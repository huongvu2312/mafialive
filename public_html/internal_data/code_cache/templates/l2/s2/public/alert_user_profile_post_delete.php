<?php
// FROM HASH: 815417d69d9aa3edba05b7a8327945f6
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['extra']['profileUserId'] == $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
	' . 'Your status update was deleted.' . '
';
	} else {
		$__finalCompiled .= '
	' . 'Bài đăng hồ sơ cho ' . (((('<a href="' . $__templater->fn('base_url', array($__vars['extra']['profileLink'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['extra']['profileUser'])) . '</a>') . ' bị xóa.' . '
';
	}
	$__finalCompiled .= '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Lý do' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	return $__finalCompiled;
});