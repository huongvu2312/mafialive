<?php
// FROM HASH: 7fe42d9e26ffce7b5691e135aa0dc1ba
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>' . '' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' - Xác minh đăng nhập' . '</mail:subject>

' . '<p>' . $__templater->escape($__vars['user']['username']) . ',</p>

<p>Để hoàn tất đăng nhập vào tài khoản của bạn (hoặc hoàn thành thiết lập xác minh hai bước) tại ' . (((('<a href="' . $__templater->fn('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . ', bạn phải nhập mã sau đây:</p>' . '

<h2>' . $__templater->escape($__vars['code']) . '</h2>

' . '<p>Mã này có giá trị trong 15 phút.</p>

<p>Đăng nhập được yêu cầu thông qua IP ' . $__templater->escape($__vars['ip']) . '. Nếu bạn không bắt đầu yêu cầu này, bạn nên thay đổi mật khẩu khẩn cấp.</p>';
	return $__finalCompiled;
});