<?php
// FROM HASH: db9f32600034738eaf44834fc1c4a5b1
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Kết hợp với ' . $__templater->escape($__vars['provider']['title']) . '');
	$__finalCompiled .= '

';
	$__compilerTemp1 = $__vars;
	$__compilerTemp1['pageSelected'] = 'connected_account';
	$__templater->wrapTemplate('account_wrapper', $__compilerTemp1);
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	if ($__vars['passwordEmailed']) {
		$__compilerTemp2 .= '
				' . $__templater->formInfoRow('
					<div class="blockMessage blockMessage--important blockMessage--iconic">' . 'Để xác nhận danh tính của bạn, chúng tôi đã gửi một email đến ' . $__templater->escape($__vars['user']['email']) . ' mời bạn tạo một mật khẩu. Một khi bạn đã theo sau liên kết, xin vui lòng nhập mật khẩu mới của bạn dưới đây.' . '</div>
				', array(
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp2 . '

			' . $__templater->formRow('
				' . $__templater->escape($__vars['xf']['visitor']['username']) . '
			', array(
		'label' => 'Tích hợp với',
	)) . '

			' . $__templater->formPasswordBoxRow(array(
		'name' => 'password',
	), array(
		'label' => 'Mật khẩu',
		'explain' => 'Đây là mật khẩu của tài khoản ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' mà bạn muốn liên kết.',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Associate',
	), array(
	)) . '
	</div>
	' . $__templater->fn('redirect_input', array($__vars['redirect'], null, true)) . '
', array(
		'action' => $__templater->fn('link', array('register/connected-accounts/associate', $__vars['provider'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
});