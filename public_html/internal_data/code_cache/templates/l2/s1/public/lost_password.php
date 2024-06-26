<?php
// FROM HASH: 7435ca9856475cebae83a90d715d01e7
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Quên mật khẩu');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['xf']['options']['lostPasswordCaptcha']) {
		$__compilerTemp1 .= '
				' . $__templater->formRowIfContent($__templater->fn('captcha', array(false)), array(
			'label' => 'Mã xác nhận',
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('Nếu bạn đã quên mật khẩu của mình, bạn có thể sử dụng mẫu này để thiết lập lại mật khẩu của bạn. Bạn sẽ nhận được một email hướng dẫn.', array(
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'email',
		'type' => 'email',
		'autofocus' => 'autofocus',
		'maxlength' => $__templater->fn('max_length', array($__vars['xf']['visitor'], 'email', ), false),
	), array(
		'label' => 'Email',
		'explain' => 'Địa chỉ email mà bạn đã đăng ký là cần thiết để đặt lại mật khẩu của bạn.',
	)) . '

			' . $__compilerTemp1 . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Đặt lại',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('lost-password', ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
});