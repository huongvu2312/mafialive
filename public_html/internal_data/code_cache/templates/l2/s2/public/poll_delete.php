<?php
// FROM HASH: bc02401fdc44fccceaece3eeb8c710d7
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Đặt lại phiếu bầu');
	$__finalCompiled .= '

';
	$__templater->breadcrumbs($__vars['breadcrumbs']);
	$__finalCompiled .= '

' . $__templater->callMacro('poll_macros', 'delete_block', array(
		'poll' => $__vars['poll'],
	), $__vars);
	return $__finalCompiled;
});