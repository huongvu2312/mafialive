<?php
// FROM HASH: 6fa46286ce69c51fe1b97b169d9980bd
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['isWatched']) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Bỏ theo dõi tin đăng');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Theo dõi');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	$__templater->breadcrumbs($__templater->method($__vars['thread'], 'getBreadcrumbs', array()));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['isWatched']) {
		$__compilerTemp1 .= '
				' . $__templater->formInfoRow('
					' . 'Are you sure you want to unwatch this thread?' . '
				', array(
			'rowtype' => 'confirm',
		)) . '

				' . $__templater->formHiddenVal('stop', '1', array(
		)) . '
			';
	} else {
		$__compilerTemp1 .= '
				' . $__templater->formRadioRow(array(
			'name' => 'email_subscribe',
			'value' => (($__vars['xf']['visitor']['Option']['interaction_watch_state'] == 'watch_email') ? 1 : 0),
		), array(array(
			'value' => '1',
			'label' => 'và nhận email thông báo',
			'_type' => 'option',
		),
		array(
			'value' => '0',
			'label' => 'không nhận email thông báo',
			'_type' => 'option',
		)), array(
			'rowtype' => 'noColon',
			'label' => 'Theo dõi tin đăng này' . $__vars['xf']['language']['ellipsis'],
		)) . '
			';
	}
	$__compilerTemp2 = '';
	if ($__vars['isWatched']) {
		$__compilerTemp2 .= '
			' . $__templater->formSubmitRow(array(
			'submit' => 'Bỏ theo dõi',
		), array(
			'rowtype' => 'simple',
		)) . '
		';
	} else {
		$__compilerTemp2 .= '
			' . $__templater->formSubmitRow(array(
			'submit' => 'Theo dõi',
		), array(
		)) . '
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '
		</div>
		' . $__compilerTemp2 . '
	</div>
', array(
		'action' => $__templater->fn('link', array('threads/watch', $__vars['thread'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
});