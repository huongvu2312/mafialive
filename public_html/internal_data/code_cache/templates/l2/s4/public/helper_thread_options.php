<?php
// FROM HASH: fe93b92091963fbb309f06b62f39c691
return array('macros' => array('watch_input' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'thread' => '!',
		'rowType' => '',
		'label' => 'Tùy chọn',
		'explain' => '',
		'forceWatchChecked' => null,
		'forceWatchEmailChecked' => null,
		'visible' => true,
	), $__arguments, $__vars);
	$__finalCompiled .= '

	';
	$__vars['threadWatch'] = $__vars['thread']['Watch'][$__vars['xf']['visitor']['user_id']];
	$__finalCompiled .= '
	';
	$__vars['defaultThreadWatch'] = ($__templater->method($__vars['thread'], 'isInsert', array()) ? $__vars['xf']['visitor']['Option']['creation_watch_state'] : $__vars['xf']['visitor']['Option']['interaction_watch_state']);
	$__finalCompiled .= '

	';
	if ($__vars['forceWatchChecked'] !== null) {
		$__finalCompiled .= '
		';
		$__vars['watchChecked'] = $__vars['forceWatchChecked'];
		$__finalCompiled .= '
	';
	} else {
		$__finalCompiled .= '
		';
		$__vars['watchChecked'] = (($__vars['thread']['thread_id'] AND !$__templater->test($__vars['threadWatch'], 'empty', array())) ?: ($__vars['defaultThreadWatch'] != ''));
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '

	';
	if ($__vars['forceWatchEmailChecked'] !== null) {
		$__finalCompiled .= '
		';
		$__vars['watchEmailChecked'] = $__vars['forceWatchEmailChecked'];
		$__finalCompiled .= '
	';
	} else {
		$__finalCompiled .= '
		';
		$__vars['watchEmailChecked'] = (($__vars['thread']['thread_id'] AND $__vars['threadWatch']['email_subscribe']) ?: ($__vars['defaultThreadWatch'] == 'watch_email'));
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '

	';
	if ($__vars['visible']) {
		$__finalCompiled .= '
		' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'watch_thread',
			'value' => '1',
			'selected' => $__vars['watchChecked'],
			'label' => 'Theo dõi tin đăng này' . $__vars['xf']['language']['ellipsis'],
			'_dependent' => array($__templater->formCheckBox(array(
		), array(array(
			'name' => 'watch_thread_email',
			'value' => '1',
			'selected' => $__vars['watchEmailChecked'],
			'label' => 'và nhận email thông báo',
			'_type' => 'option',
		)))),
			'_type' => 'option',
		)), array(
			'label' => $__templater->escape($__vars['label']),
			'rowtype' => $__vars['rowType'],
			'explain' => $__templater->escape($__vars['explain']),
		)) . '
	';
	} else {
		$__finalCompiled .= '
		' . $__templater->formHiddenVal('watch_thread', $__vars['watchChecked'], array(
		)) . '
		' . $__templater->formHiddenVal('watch_thread_email', $__vars['watchEmailChecked'], array(
		)) . '
	';
	}
	$__finalCompiled .= '
	' . $__templater->formHiddenVal('_xfSet[watch_thread]', '1', array(
	)) . '
';
	return $__finalCompiled;
},
'thread_status' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'thread' => '!',
		'rowType' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '

	';
	$__compilerTemp1 = array();
	if ($__templater->method($__vars['thread'], 'canLockUnlock', array())) {
		$__compilerTemp1[] = array(
			'name' => 'discussion_open',
			'value' => '1',
			'selected' => $__vars['thread']['discussion_open'],
			'label' => 'Mở',
			'hint' => 'Mọi người có thể trả lời chủ đề này',
			'afterhtml' => '
					' . $__templater->formHiddenVal('_xfSet[discussion_open]', '1', array(
		)) . '
				',
			'_type' => 'option',
		);
	}
	if ($__templater->method($__vars['thread'], 'canStickUnstick', array())) {
		$__compilerTemp1[] = array(
			'name' => 'sticky',
			'value' => '1',
			'selected' => $__vars['thread']['sticky'],
			'label' => 'Dán lên cao',
			'hint' => 'Chủ đề được dán lên cao hiển thị trên đầu của danh sách trang đầu tiên trong diễn đàn',
			'afterhtml' => '
					' . $__templater->formHiddenVal('_xfSet[sticky]', '1', array(
		)) . '
				',
			'_type' => 'option',
		);
	}
	$__finalCompiled .= $__templater->formCheckBoxRow(array(
		'hideempty' => 'true',
	), $__compilerTemp1, array(
		'rowtype' => $__vars['rowType'],
		'label' => 'Đặt trang thái chủ đề',
	)) . '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

';
	return $__finalCompiled;
});