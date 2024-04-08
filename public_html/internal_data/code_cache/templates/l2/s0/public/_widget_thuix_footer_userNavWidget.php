<?php
// FROM HASH: dd462f0492ea71eb00dc7db06e198c62
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="block" data-widget-definition="th_userNavigation">
    <div class="block-container block-container--noStripRadius">
        <h3 class="block-minorHeader">User Menu</h3>
        <div class="block-body">
            ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
                <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('members', $__vars['xf']['visitor'], ), true) . '">' . 'Profile' . '</a>
                <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('account/account-details', ), true) . '">' . 'Chi tiết tài khoản' . '</a>
                <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('whats-new/news-feed', ), true) . '">' . 'Dòng thời gian' . '</a>
                <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('logout', null, array('t' => $__templater->fn('csrf_token', array(), false), ), ), true) . '">' . 'Thoát' . '</a>
            ';
	} else {
		$__finalCompiled .= '
                <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('login', ), true) . '">' . 'login' . '</a>
            ';
	}
	$__finalCompiled .= '
        </div>
    </div>
</div>';
	return $__finalCompiled;
});