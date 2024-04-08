<?php
// FROM HASH: f5cc40739994f8d64643e7f205cd450a
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if (!$__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
	' . $__templater->form('
		<div class="block-container">
			<h3 class="block-minorHeader">' . 'Đăng nhập' . '</h3>
			<div class="block-body">
				<div class="block-row">
					<label for="ctrl_loginWidget_login">' . 'Tên tài khoản hoặc địa chỉ Email' . '</label>
					<div class="u-inputSpacer">
						<input name="login" id="ctrl_loginWidget_login" class="input" />
					</div>
				</div>

				<div class="block-row">
					<label for="ctrl_loginWidget_password">' . 'Mật khẩu' . '</label>
					<div class="u-inputSpacer">
						<input name="password" id="ctrl_loginWidget_password" type="password" class="input" />
						<a href="' . $__templater->fn('link', array('lost-password', ), true) . '" data-xf-click="overlay">' . 'Bạn đã quên mật khẩu?' . '</a>
					</div>
				</div>

				<div class="block-row">
					<label>
						<input type="checkbox" name="remember" value="1" checked="checked"> ' . 'Duy trì trạng thái đăng nhập' . '
					</label>
				</div>

				' . $__templater->formSubmitRow(array(
			'icon' => 'login',
		), array(
		)) . '
			</div>
		</div>
	', array(
			'action' => $__templater->fn('link', array('login/login', ), false),
			'class' => 'block',
			'attributes' => $__templater->fn('widget_data', array($__vars['widget'], true, ), false),
		)) . '
';
	}
	return $__finalCompiled;
});