<?php
// FROM HASH: 3c0cc67a7719df37aefcec1ad5dc9596
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Tạo tài khoản');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

<div class="blockMessage">
	';
	if ($__vars['xf']['visitor']['user_state'] == 'email_confirm') {
		$__finalCompiled .= '
		' . 'Cám ơn bạn đã đăng ký. Để hoàn thành việc đăng ký, bạn phải ấn vào đường dẫn trong email đã được gửi đến bạn.' . '
	';
	} else if ($__vars['xf']['visitor']['user_state'] == 'moderated') {
		$__finalCompiled .= '
		' . 'Thanks for registering. Your registration must now be approved by an administrator. You will receive an email when a decision has been taken.' . '
	';
	} else if ($__vars['facebook']) {
		$__finalCompiled .= '
		' . 'Thanks for creating an account using Facebook. Your account is now fully active.' . '
	';
	} else {
		$__finalCompiled .= '
		' . 'Cám ơn bạn đã đăng ký. Việc đăng ký thành viên đã hoàn tất.' . '
	';
	}
	$__finalCompiled .= '

	<ul>
		';
	if ($__vars['redirect']) {
		$__finalCompiled .= '<li><a href="' . $__templater->fn('link', array($__vars['redirect'], ), true) . '">' . 'Return to the page you were viewing' . '</a></li>';
	}
	$__finalCompiled .= '
		<li><a href="' . $__templater->fn('link', array('index', ), true) . '">' . 'Trở về trang chủ diễn đàn' . '</a></li>
		';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditProfile', array())) {
		$__finalCompiled .= '
			<li><a href="' . $__templater->fn('link', array('account', ), true) . '">' . 'Sửa chi tiết tài khoản của bạn' . '</a></li>
		';
	}
	$__finalCompiled .= '
	</ul>
</div>';
	return $__finalCompiled;
});