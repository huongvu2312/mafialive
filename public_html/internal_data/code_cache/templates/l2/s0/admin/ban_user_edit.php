<?php
// FROM HASH: 16ecf247420cc1304c76c54d3af6906d
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['userBan'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Ban User');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Edit Banned User' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['userBan']['User']['username']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['userBan'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('Lift Ban', array(
			'href' => $__templater->fn('link', array('banning/users/lift', $__vars['userBan'], ), false),
			'overlay' => 'true',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if (!$__vars['userBan']['user_id']) {
		$__compilerTemp1 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => 'username',
			'ac' => 'single',
			'value' => $__vars['addName'],
		), array(
			'label' => 'Tên tài khoản',
		)) . '
			';
	} else {
		$__compilerTemp1 .= '
				' . $__templater->formRow($__templater->escape($__vars['userBan']['User']['username']), array(
			'label' => 'Tên tài khoản',
		)) . '

				' . $__templater->formRow($__templater->escape($__vars['userBan']['BanUser']['username']), array(
			'label' => 'Banned By',
		)) . '

				' . $__templater->formRow($__templater->fn('date', array($__vars['userBan']['ban_date'], ), true), array(
			'label' => 'Ban Started',
		)) . '

				';
		$__compilerTemp2 = '';
		if ($__vars['userBan']['end_date']) {
			$__compilerTemp2 .= '
						' . $__templater->fn('date', array($__vars['userBan']['end_date'], ), true) . '
					';
		} else {
			$__compilerTemp2 .= '
						' . 'Never' . '
					';
		}
		$__compilerTemp1 .= $__templater->formRow('
					' . $__compilerTemp2 . '
				', array(
			'label' => 'Ban Ends',
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '

			' . $__templater->formRadioRow(array(
		'name' => 'ban_length',
		'value' => ((!$__vars['userBan']['end_date']) ? 'permanent' : 'temporary'),
	), array(array(
		'label' => 'Permanent',
		'value' => 'permanent',
		'_type' => 'option',
	),
	array(
		'label' => 'Until' . $__vars['xf']['language']['label_separator'],
		'value' => 'temporary',
		'_dependent' => array($__templater->formDateInput(array(
		'name' => 'end_date',
		'value' => ($__vars['userBan']['end_date'] ? $__templater->fn('date', array($__vars['userBan']['end_date'], 'Y-m-d', ), false) : ''),
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Ban Length',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'user_reason',
		'value' => $__vars['userBan']['user_reason'],
		'maxlength' => $__templater->fn('max_length', array($__vars['userBan'], 'user_reason', ), false),
	), array(
		'label' => 'Reason for banning',
		'explain' => 'This will be shown to the user if provided.',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('banning/users/save', $__vars['userBan'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
});