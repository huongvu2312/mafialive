<?php
// FROM HASH: b8ec508479884757180b293697d0c019
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . '' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' - Yêu cầu đặt lại mật khẩu' . '
</mail:subject>

' . '' . $__templater->escape($__vars['user']['username']) . ', để đặt lại mật khẩu của bạn tại ' . (((('<a href="' . $__templater->fn('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . ', bạn cần nhấp vào liên kết bên dưới. Điều này sẽ tạo ra một mật khẩu mới sẽ được gửi qua email cho bạn.' . '

<p><a href="' . $__templater->fn('link', array('canonical:lost-password/confirm', $__vars['user'], array('c' => $__vars['confirmation']['confirmation_key'], ), ), true) . '" class="button">' . 'Lấy lại mật khẩu' . '</a></p>

';
	if ($__vars['isAdminReset']) {
		$__finalCompiled .= '
	<p>' . 'Đặt lại mật khẩu này được yêu cầu bởi một quản trị của ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' thay cho bạn.' . '</p>
';
	} else {
		$__finalCompiled .= '
	<p>' . 'Nếu bạn không yêu cầu email này, bạn có thể an toàn bỏ qua nó.' . '</p>
';
	}
	return $__finalCompiled;
});