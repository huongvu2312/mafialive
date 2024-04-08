<?php
// FROM HASH: 90b88de3ce5bc1b2a56d68ad3e959910
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Mật khẩu và bảo mật');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['xf']['visitor']['Option']['use_tfa']) {
		$__compilerTemp1 .= '
					' . 'Đã bật (' . $__templater->filter($__vars['enabledTfaProviders'], array(array('join', array(', ', )),), true) . ')' . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Vô hiệu hóa' . '
				';
	}
	$__compilerTemp2 = '';
	if ($__vars['hasPassword']) {
		$__compilerTemp2 .= '
				' . $__templater->formPasswordBoxRow(array(
			'name' => 'old_password',
			'autofocus' => 'autofocus',
		), array(
			'label' => 'Mật khẩu hiện tại của bạn',
			'explain' => 'Vì lý do an ninh, bạn phải xác minh mật khẩu hiện tại trước khi đặt mật khẩu mới.',
		)) . '

				' . $__templater->formPasswordBoxRow(array(
			'name' => 'password',
			'checkstrength' => 'true',
		), array(
			'label' => 'Mật khẩu mới',
		)) . '

				' . $__templater->formPasswordBoxRow(array(
			'name' => 'password_confirm',
		), array(
			'label' => 'Xác nhận mật khẩu mới',
		)) . '
			';
	} else {
		$__compilerTemp2 .= '
				' . $__templater->formRow('
					' . 'Your account does not currently have a password.' . ' <a href="' . $__templater->fn('link', array('account/request-password', ), true) . '" data-xf-click="overlay">' . 'Request a password be emailed to you' . '</a>
				', array(
			'label' => 'Mật khẩu',
		)) . '
			';
	}
	$__compilerTemp3 = '';
	if ($__vars['hasPassword']) {
		$__compilerTemp3 .= '
			' . $__templater->formSubmitRow(array(
			'icon' => 'save',
		), array(
		)) . '
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow('

				' . $__compilerTemp1 . '
				' . $__templater->button('Thay đổi', array(
		'href' => $__templater->fn('link', array('account/two-step', ), false),
		'class' => 'button--link',
	), '', array(
	)) . '
			', array(
		'rowtype' => 'button',
		'label' => 'Bảo mật 2 bước',
	)) . '

			<hr class="formRowSep" />

			' . $__compilerTemp2 . '
		</div>
		' . $__compilerTemp3 . '
	</div>
', array(
		'action' => $__templater->fn('link', array('account/security', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'true',
	));
	return $__finalCompiled;
});