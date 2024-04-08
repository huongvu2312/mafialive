<?php
// FROM HASH: 6b2ccf8d4da6768f3c22a4555f26fddb
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => $__vars['inputName'],
		'value' => $__vars['option']['option_value'],
	), array(array(
		'value' => 'trophy_points',
		'class' => 'js-trophy_points',
		'label' => 'Điểm thành tích',
		'_type' => 'option',
	),
	array(
		'value' => 'message_count',
		'class' => 'js-messages',
		'label' => 'Bài viết',
		'_type' => 'option',
	),
	array(
		'value' => 'reaction_score',
		'class' => 'js-reactionScore',
		'label' => 'Điểm tương tác',
		'_type' => 'option',
	)), array(
		'label' => $__templater->escape($__vars['option']['title']),
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'html' => $__templater->escape($__vars['listedHtml']),
	));
	return $__finalCompiled;
});