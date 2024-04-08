<?php
// FROM HASH: 12aa15f033ed2090d954aca1f8b2f75a
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.avatar.avatar--resourceIconDefault
{
	color: @xf-textColorMuted !important;
	background: mix(@xf-textColorMuted, @xf-avatarBg, 25%) !important;
	text-align: center;

	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;

	> span:before
	{
		.m-faBase();
		.m-faContent(@fa-var-cog);
		' . $__templater->callMacro('uix_icons.less', 'content', array(
		'icon' => 'settings',
	), $__vars) . '
	}
}';
	return $__finalCompiled;
});