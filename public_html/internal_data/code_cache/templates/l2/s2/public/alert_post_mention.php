<?php
// FROM HASH: cd37eda4a55cd840b90aec9ad6f4e36c
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . $__templater->fn('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' đã nhắc đến bạn trong một bài trong chủ đề ' . ((((('<a href="' . $__templater->fn('link', array('posts', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->fn('prefix', array('thread', $__vars['content']['Thread'], ), true)) . $__templater->escape($__vars['content']['Thread']['title'])) . '</a>') . '.';
	return $__finalCompiled;
});