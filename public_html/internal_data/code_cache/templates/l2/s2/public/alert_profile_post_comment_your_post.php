<?php
// FROM HASH: a426295e0e02d3b6722ee97847c49331
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . $__templater->fn('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' bình luận trong <a ' . (('href="' . $__templater->fn('link', array('profile-posts/comments', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink"') . '>bài đăng của bạn</a> trong hồ sơ của ' . $__templater->escape($__vars['content']['ProfilePost']['ProfileUser']['username']) . '.';
	return $__finalCompiled;
});