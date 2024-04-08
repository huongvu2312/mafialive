<?php
// FROM HASH: c0e48021b94c07bd5b869cf19e6e6720
return array('macros' => array('footer' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'conversation' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . '<p class="minorText">Vui lòng không trả lời thư này. Bạn phải ghé thăm diễn đàn để trả lời.</p>

<p class="minorText">Thư này đã được gửi cho bạn bởi vì tùy chọn của bạn được đặt để nhận email khi thư thoại mới được nhận. <a href="' . $__templater->fn('link', array('canonical:email-stop/conversation', $__vars['xf']['toUser'], ), true) . '">Ngừng nhận các email này</a>.</p>' . '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';

	return $__finalCompiled;
});