<?php
// FROM HASH: 7361d86e7f578c23911be37c27fb47ea
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->includeJs(array(
		'src' => 'xf/login_signup.js',
		'min' => '1',
	));
	$__finalCompiled .= '
';
	$__templater->setPageParam('uix_hideExtendedFooter', '1');
	$__finalCompiled .= '
';
	$__templater->setPageParam('uix_hideNotices', '1');
	$__finalCompiled .= '
';
	$__templater->setPageParam('uix_hideBreadcrumb', '1');
	$__finalCompiled .= '
' . '

';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Đăng nhập');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= $__templater->escape($__vars['error']);
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--error blockMessage--iconic">
		' . $__compilerTemp1 . '
	</div>
';
	}
	$__finalCompiled .= '

<div class="blocks">
	';
	$__compilerTemp2 = '';
	if ($__vars['uix_loginPreventAutoFocus']) {
		$__compilerTemp2 .= '
					' . $__templater->formTextBoxRow(array(
			'name' => 'login',
			'value' => $__vars['login'],
			'autocomplete' => 'username',
		), array(
			'label' => 'Tên tài khoản hoặc địa chỉ Email',
		)) . '
				';
	} else {
		$__compilerTemp2 .= '
					' . $__templater->formTextBoxRow(array(
			'name' => 'login',
			'value' => $__vars['login'],
			'autofocus' => 'autofocus',
			'autocomplete' => 'username',
		), array(
			'label' => 'Tên tài khoản hoặc địa chỉ Email',
		)) . '
				';
	}
	$__compilerTemp3 = '';
	if ($__vars['captcha']) {
		$__compilerTemp3 .= '
					' . $__templater->formRowIfContent($__templater->fn('captcha', array(true)), array(
			'label' => 'Mã xác nhận',
			'force' => 'true',
		)) . '
				';
	}
	$__compilerTemp4 = '';
	if ($__vars['xf']['options']['registrationSetup']['enabled']) {
		$__compilerTemp4 .= '
			<div class="block-outer block-outer--after uix_login__registerLink">
				<div class="block-outer-middle">
					' . 'Chưa có tài khoản?' . ' <a href="' . $__templater->fn('link', array('register', ), true) . '">' . 'Đăng ký ngay' . '</a>
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->form('
		<div class="block-container">
			<div class="block-body">
				' . $__compilerTemp2 . '

				' . $__templater->formPasswordBoxRow(array(
		'name' => 'password',
		'autocomplete' => 'current-password',
	), array(
		'label' => 'Mật khẩu',
		'html' => '
						<a class="uix_forgotPassWord__link" href="' . $__templater->fn('link', array('lost-password', ), true) . '" data-xf-click="overlay">' . 'Bạn đã quên mật khẩu?' . '</a>
					',
	)) . '

				' . $__compilerTemp3 . '

				' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'remember',
		'selected' => true,
		'label' => 'Duy trì trạng thái đăng nhập',
		'_type' => 'option',
	)), array(
	)) . '

				' . $__templater->formHiddenVal('_xfRedirect', $__vars['redirect'], array(
	)) . '
			</div>
			' . $__templater->formSubmitRow(array(
		'icon' => 'login',
	), array(
	)) . '
		</div>
		' . $__compilerTemp4 . '
	', array(
		'action' => $__templater->fn('link', array('login/login', ), false),
		'class' => 'block',
	)) . '

	';
	if (!$__templater->test($__vars['providers'], 'empty', array())) {
		$__finalCompiled .= '
		<div class="blocks-textJoiner"><span></span><em>' . 'hoặc' . ' ' . 'Đăng nhập bằng' . '</em><span></span></div>

		<div class="block uix_loginProvider__row">
			<div class="block-container">
				<div class="block-body">
					';
		$__compilerTemp5 = '';
		if ($__templater->isTraversable($__vars['providers'])) {
			foreach ($__vars['providers'] AS $__vars['provider']) {
				$__compilerTemp5 .= '
								<li>
									' . $__templater->callMacro('connected_account_macros', 'button', array(
					'provider' => $__vars['provider'],
				), $__vars) . '
								</li>
							';
			}
		}
		$__finalCompiled .= $__templater->formRow('
						<ul class="listHeap">
							' . $__compilerTemp5 . '
						</ul>
					', array(
			'rowtype' => 'button',
		)) . '
				</div>
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
</div>';
	return $__finalCompiled;
});