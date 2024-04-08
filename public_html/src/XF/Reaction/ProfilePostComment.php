<?php

namespace XF\Reaction;

use XF\Mvc\Entity\Entity;

class ProfilePostComment extends AbstractHandler
{
	public function reactionsCounted(Entity $entity)
	{
		return ($entity->message_state == 'visible');
	}
}