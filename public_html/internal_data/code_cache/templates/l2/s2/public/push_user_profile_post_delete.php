<?php
// FROM HASH: 96b7808a8eac0e3d902ba3f5802ab2ee
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['extra']['profileUserId'] == $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
	' . 'Your status update was deleted.' . '
';
	} else {
		$__finalCompiled .= '
	' . 'Bài đăng hồ sơ cho ' . $__templater->escape($__vars['extra']['profileUser']) . ' bị xóa.' . '
	<push:url>' . $__templater->fn('base_url', array($__vars['extra']['profileLink'], 'canonical', ), true) . '</push:url>
';
	}
	$__finalCompiled .= '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Lý do' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	return $__finalCompiled;
});