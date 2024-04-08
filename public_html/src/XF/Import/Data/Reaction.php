<?php

namespace XF\Import\Data;

class Reaction extends AbstractEmulatedData
{
	protected $title;

	public function getImportType()
	{
		return 'reaction';
	}

	public function getEntityShortName()
	{
		return 'XF:Reaction';
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	protected function postSave($oldId, $newId)
	{
		$this->insertMasterPhrase('reaction_title.' . $newId, $this->title);

		/** @var \XF\Repository\Reaction $repo */
		$repo = $this->repository('XF:Reaction');

		\XF::runOnce('rebuildReactionImport', function() use ($repo)
		{
			$repo->rebuildReactionCache();
			$repo->rebuildReactionSpriteCache();
		});
	}
}