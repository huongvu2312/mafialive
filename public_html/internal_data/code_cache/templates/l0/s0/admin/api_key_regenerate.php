<?php
// FROM HASH: 631e052f46cc30bfb4fe20e792b92ae2
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Confirm action');
	$__finalCompiled .= '

' . $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Please confirm that you want to regenerate the following API key' . ':
				<strong><a href="' . $__templater->fn('link', array('api-keys/edit', $__vars['apiKey'], ), true) . '">' . $__templater->escape($__vars['apiKey']['title']) . '</a></strong>
				' . 'Any applications using the old key value will not function correctly until they have been updated with the new key.' . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Regenerate key',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>

', array(
		'action' => $__templater->fn('link', array('api-keys/regenerate', $__vars['apiKey'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
});