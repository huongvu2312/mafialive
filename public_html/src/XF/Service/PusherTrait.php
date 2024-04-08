<?php

namespace XF\Service;

use XF\Entity\User;
use XF\Language;

trait PusherTrait
{
	/**
	 * @var User
	 */
	protected $receiever;

	/**
	 * @var Language
	 */
	protected $language;

	public function __construct(\XF\App $app, User $receiver, ...$properties)
	{
		parent::__construct($app, $receiver, $properties);

		$this->receiver = $receiver;
		$this->language = $app->language($receiver->language_id);

		$this->setInitialProperties(...$properties);
	}

	abstract protected function setInitialProperties(...$properties);

	abstract protected function getNotificationTitle();

	abstract protected function getNotificationBody();

	protected function getNotificationUrl()
	{
		return null;
	}

	protected function getNotificationTag()
	{
		return '';
	}

	protected function setAdditionalOptions(PushNotification $pushNotification)
	{
	}

	protected function setUserOptions(PushNotification $pushNotification, \XF\Entity\User $user)
	{
		/** @var \XF\App $app */
		$app = $this->app;

		$avatar = $user->getAvatarUrl('m');
		if ($avatar)
		{
			$pushNotification->setIconAndBadge($avatar);
		}
		else if (!$app->options()->dynamicAvatarEnable)
		{
			$style = $app->style($this->receiver->style_id);
			if ($style->getProperty('avatarDefaultType') === 'image')
			{
				$url = $style->getProperty('avatarDefaultImage');
				if ($url)
				{
					$pushNotification->setIconAndBadge($url);
				}
			}
		}
	}

	public function push()
	{
		/** @var \XF\Service\PushNotification $pushNotification */
		$pushNotification = $this->service('XF:PushNotification', $this->receiver);

		$pushNotification->setNotificationContent(
			$this->getNotificationTitle(), $this->getNotificationBody(), $this->getNotificationUrl()
		);

		$pushNotification->setNotificationTag($this->getNotificationTag());

		$this->setAdditionalOptions($pushNotification);

		$pushNotification->sendNotifications();
	}
}