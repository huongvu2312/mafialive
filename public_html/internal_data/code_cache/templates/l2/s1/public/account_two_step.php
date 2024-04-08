<?php
// FROM HASH: 7b2744e2aba934498d78b597e05ad27f
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Bảo mật 2 bước');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

';
	if ($__vars['backupAdded']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important blockMessage--iconic">
		' . 'Mã dự phòng xác minh đã tự động được tạo. Mỗi mã này có thể được sử dụng một lần trong trường hợp bạn không có quyền truy cập vào các phương tiện xác minh khác. Các mã này nên được lưu ở một vị trí an toàn.' . '
		<a href="' . $__templater->fn('link', array('account/two-step/manage', array('provider_id' => 'backup', ), ), true) . '">' . 'Xem mã dự phòng của bạn.' . '</a>
		<a href="' . $__templater->fn('link', array('account/two-step/backup-codes', ), true) . '" data-xf-click="overlay" data-overlay-config="' . $__templater->filter(array('backdropClose' => false, 'escapeClose' => false, ), array(array('json', array()),), true) . '" data-load-auto-click="true" style="display: none"></a>
	</div>
';
	}
	$__finalCompiled .= '

';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped('Xác minh hai bước làm tăng tính bảo mật cho tài khoản của bạn bằng cách yêu cầu bạn cung cấp mã bổ sung để hoàn tất quy trình đăng nhập. Nếu mật khẩu của bạn đã từng bị xâm phạm, xác minh này sẽ giúp ngăn chặn truy cập trái phép vào tài khoản của bạn.');
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

<div class="block">
	<div class="block-container">
		<div class="block-body">
			';
	if ($__templater->isTraversable($__vars['providers'])) {
		foreach ($__vars['providers'] AS $__vars['provider']) {
			if ($__templater->method($__vars['provider'], 'isEnabled', array()) OR $__templater->method($__vars['provider'], 'canEnable', array())) {
				$__finalCompiled .= '
				<div class="block-row block-row--separated">
					<div class="contentRow">
						<div class="contentRow-main contentRow-main--close">
							<div class="contentRow-extra">
								';
				if ($__templater->method($__vars['provider'], 'canEnable', array())) {
					$__finalCompiled .= '
									' . $__templater->form('
										' . $__templater->button('Bật', array(
						'type' => 'submit',
					), '', array(
					)) . '
									', array(
						'action' => $__templater->fn('link', array('account/two-step/enable', $__vars['provider'], ), false),
					)) . '
								';
				}
				$__finalCompiled .= '
								';
				if ($__templater->method($__vars['provider'], 'canDisable', array())) {
					$__finalCompiled .= '
									' . $__templater->button('
										' . 'Tắt' . '
									', array(
						'href' => $__templater->fn('link', array('account/two-step/disable', $__vars['provider'], ), false),
						'overlay' => 'true',
					), '', array(
					)) . '
								';
				}
				$__finalCompiled .= '
								';
				if ($__templater->method($__vars['provider'], 'canManage', array())) {
					$__finalCompiled .= '
									' . $__templater->button('
										' . 'Quản lý' . '
									', array(
						'href' => $__templater->fn('link', array('account/two-step/manage', $__vars['provider'], ), false),
					), '', array(
					)) . '
								';
				}
				$__finalCompiled .= '
							</div>
							<h2 class="contentRow-title">' . $__templater->escape($__vars['provider']['title']) . '</h2>
							<div class="contentRow-minor">' . $__templater->escape($__vars['provider']['description']) . '</div>
						</div>
					</div>
				</div>
			';
			}
		}
	}
	$__finalCompiled .= '
		</div>
		';
	if ($__vars['xf']['visitor']['Option']['use_tfa']) {
		$__finalCompiled .= '
			<div class="block-footer">
				<span class="block-footer-controls">' . $__templater->button('
					' . 'Vô hiệu hóa xác minh hai bước' . '
				', array(
			'href' => $__templater->fn('link', array('account/two-step/disable', ), false),
			'overlay' => 'true',
		), '', array(
		)) . '</span>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
</div>

';
	if ($__vars['currentTrustRecord'] OR $__vars['hasOtherTrusted']) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<h2 class="block-header">' . 'Thiết bị đáng tin cậy' . '</h2>
			<div class="block-body">
				';
		if ($__vars['currentTrustRecord']) {
			$__finalCompiled .= '
					<div class="block-row block-row--separated">
						' . 'Thiết bị này hiện được tin cậy cho đến ' . $__templater->fn('date', array($__vars['currentTrustRecord']['trusted_until'], ), true) . '. Bạn sẽ không cần phải hoàn thành xác minh hai bước từ thiết bị này cho đến lúc đó. Bạn có thể chọn ngừng tin tưởng thiết bị này để bạn sẽ được nhắc hoàn thành xác minh hai bước khi bạn đăng nhập lần sau.' . '

						' . $__templater->form('
							' . $__templater->button('Ngừng tin tưởng thiết bị này', array(
				'type' => 'submit',
			), '', array(
			)) . '
						', array(
				'action' => $__templater->fn('link', array('account/two-step/trusted-disable', ), false),
			)) . '
					</div>
				';
		}
		$__finalCompiled .= '
				';
		if ($__vars['hasOtherTrusted']) {
			$__finalCompiled .= '
					<div class="block-row block-row--separated">
						' . 'Các thiết bị khác hiện đang được tin cậy. Bạn sẽ không được nhắc hoàn thành xác minh hai bước từ các thiết bị này. Nếu bạn đã mất quyền truy cập vào một thiết bị đáng tin cậy, bạn nên ngừng tin tưởng các thiết bị này.' . '
						';
			if ($__vars['currentTrustRecord']) {
				$__finalCompiled .= 'This device will remain trusted.';
			}
			$__finalCompiled .= '

						' . $__templater->form('
							' . $__templater->button('Ngừng tin tưởng các thiết bị khác', array(
				'type' => 'submit',
			), '', array(
			)) . '
							' . $__templater->formHiddenVal('others', '1', array(
			)) . '
						', array(
				'action' => $__templater->fn('link', array('account/two-step/trusted-disable', ), false),
			)) . '
					</div>
				';
		}
		$__finalCompiled .= '
			</div>
		</div>
	</div>
';
	}
	return $__finalCompiled;
});