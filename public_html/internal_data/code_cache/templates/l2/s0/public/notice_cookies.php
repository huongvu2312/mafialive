<?php
// FROM HASH: 5de8134d4d577e8684330952749b86ea
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="u-alignCenter">
	' . 'Trang web này sử dụng cookie để giúp cá nhân hóa nội dung, điều chỉnh trải nghiệm của bạn và để giữ cho bạn đăng nhập nếu bạn đăng ký.<br />
Bằng cách tiếp tục sử dụng trang web này, bạn đồng ý với việc sử dụng cookie của chúng tôi.' . '
</div>

<div class="u-inputSpacer u-alignCenter">
	' . $__templater->button('Đồng ý', array(
		'icon' => 'confirm',
		'href' => $__templater->fn('link', array('account/dismiss-notice', null, array('notice_id' => $__vars['notice']['notice_id'], ), ), false),
		'class' => 'js-noticeDismiss button--notice',
		'data-xf-init' => 'tooltip',
		'title' => 'Dismiss Notice',
	), '', array(
	)) . '
	' . $__templater->button('Tìm hiểu thêm.' . $__vars['xf']['language']['ellipsis'], array(
		'href' => $__templater->fn('link', array('help/cookies', ), false),
		'class' => 'button--notice',
	), '', array(
	)) . '
</div>';
	return $__finalCompiled;
});