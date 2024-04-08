<?php
// FROM HASH: 18145675361ec1157911ef8abf529da7
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if (!$__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
	';
		$__compilerTemp1 = '';
		if (!$__templater->test($__vars['providers'], 'empty', array())) {
			$__compilerTemp1 .= '
				<div class="blocks-textJoiner"><span></span><em>' . 'hoặc' . ' ' . 'Đăng nhập bằng' . '</em><span></span></div>

				<div class=" uix_loginProvider__row">
					';
			$__compilerTemp2 = '';
			if ($__templater->isTraversable($__vars['providers'])) {
				foreach ($__vars['providers'] AS $__vars['provider']) {
					$__compilerTemp2 .= '
								<li>
									' . $__templater->callMacro('connected_account_macros', 'button', array(
						'provider' => $__vars['provider'],
					), $__vars) . '
								</li>
							';
				}
			}
			$__compilerTemp1 .= $__templater->formRow('
						<ul class="listHeap">
							' . $__compilerTemp2 . '
						</ul>
					', array(
				'rowtype' => 'button',
			)) . '
				</div>
			';
		}
		$__finalCompiled .= $__templater->form('
		<div class="block-container">
			<h3 class="block-minorHeader">' . 'Đăng nhập' . '</h3>
			<div class="block-body block-row">
				<label for="ctrl_loginWidget_login">' . 'Tên tài khoản hoặc địa chỉ Email' . '</label>
				<div class="u-inputSpacer">
					<input name="login" id="ctrl_loginWidget_login" class="input" />
				</div>
			</div>

			<div class="block-body block-row">
				<label for="ctrl_loginWidget_password">' . 'Mật khẩu' . '</label>
				<div class="u-inputSpacer">
					<input name="password" id="ctrl_loginWidget_password" type="password" class="input" />
					<a href="' . $__templater->fn('link', array('lost-password', ), true) . '" data-xf-click="overlay">' . 'Bạn đã quên mật khẩu?' . '</a>
				</div>
			</div>

			<div class="block-body block-row">
				<label>
					<input type="checkbox" name="remember" value="1" checked="checked"> ' . 'Duy trì trạng thái đăng nhập' . '
				</label>
			</div>

			' . $__compilerTemp1 . '

			' . $__templater->formSubmitRow(array(
			'icon' => 'login',
		), array(
		)) . '
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