<?php
// FROM HASH: 95457daa9a83a5c860195f22b557991f
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['extra']['profileUserId'] == $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
	' . 'Your <a href="' . $__templater->fn('base_url', array($__vars['extra']['link'], ), true) . '">status update</a> was edited.' . '
';
	} else {
		$__finalCompiled .= '
	' . 'Bài viết trên hồ sơ của ' . (((('<a href="' . $__templater->fn('base_url', array($__vars['extra']['link'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['extra']['profileUser'])) . '</a>') . ' được sửa.' . '
';
	}
	$__finalCompiled .= '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Lý do' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	return $__finalCompiled;
});