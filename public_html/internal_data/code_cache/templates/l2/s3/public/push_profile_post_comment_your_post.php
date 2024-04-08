<?php
// FROM HASH: 36956f93a2e21af109e886ae1a992535
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' đã bình luận lên bài viết của bạn trên hồ sơ của ' . $__templater->escape($__vars['content']['ProfilePost']['ProfileUser']['username']) . '.' . '
<push:url>' . $__templater->fn('link', array('canonical:profile-posts/comments', $__vars['content'], ), true) . '</push:url>';
	return $__finalCompiled;
});