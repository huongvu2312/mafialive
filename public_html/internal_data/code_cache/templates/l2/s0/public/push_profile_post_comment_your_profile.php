<?php
// FROM HASH: d0e19e6b452771dca640d17026cdb4f2
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['xf']['visitor']['user_id'] == $__vars['content']['ProfilePost']['user_id']) {
		$__finalCompiled .= '
	' . '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' đã bình luận trên trạng thái của bạn.' . '
';
	} else {
		$__finalCompiled .= '
	' . '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' đã bình luận lên bài viết của ' . $__templater->escape($__vars['content']['ProfilePost']['username']) . ' trên hồ sơ của bạn.' . '
';
	}
	$__finalCompiled .= '
<push:url>' . $__templater->fn('link', array('canonical:profile-posts/comments', $__vars['content'], ), true) . '</push:url>';
	return $__finalCompiled;
});