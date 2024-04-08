<?php
// FROM HASH: 8437a8231c6eefcf22c0d77a037102bd
return array('macros' => array('uix_tabBar' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
		<div class="uix_tabBar">
			<div class="uix_tabList">
				<a href="' . $__templater->fn('link', array('account', ), true) . '" class="uix_tabItem">
					' . $__templater->fontAwesome('fa-user', array(
			'class' => 'uix_icon uix_icon--user',
		)) . '
					<div class="uix_tabLabel">' . 'account' . '</div>
				</a>
				<a href="' . $__templater->fn('link', array('whats-new', ), true) . '" class="uix_tabItem">
					' . $__templater->fontAwesome('fa-comment-alt-exclamation', array(
			'class' => 'uix_icon uix_icon--comment-alert',
		)) . '
					<div class="uix_tabLabel">' . 'What\'s new' . '</div>
				</a>
				<a href="' . $__templater->fn('link', array('conversations', ), true) . '" data-xf-click="overlay" data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '" class="uix_tabItem js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '">
					' . $__templater->fontAwesome('fa-inbox', array(
			'class' => 'uix_icon uix_icon--inbox',
		)) . '
					<div class="uix_tabLabel">' . 'Inbox' . '</div>
				</a>
				<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '" data-xf-click="overlay" data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '" class="uix_tabItem js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '">
					' . $__templater->fontAwesome('fa-bell', array(
			'class' => 'uix_icon uix_icon--alert',
		)) . '
					<div class="uix_tabLabel">' . 'Alerts' . '</div>
				</a>
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';

	return $__finalCompiled;
});