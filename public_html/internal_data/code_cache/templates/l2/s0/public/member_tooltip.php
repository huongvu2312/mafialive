<?php
// FROM HASH: 85dff3b456ce7fdcb9a84b96e906378d
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->includeCss('member_tooltip.less');
	$__finalCompiled .= '

<div class="tooltip-content-inner">
	<div class="memberTooltip">
		<div class="memberTooltip-header">
			<span class="memberTooltip-avatar">
				' . $__templater->fn('avatar', array($__vars['user'], 'm', false, array(
		'notooltip' => 'true',
	))) . '
			</span>
			<div class="memberTooltip-headerInfo">
				';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
									' . $__templater->callMacro('member_macros', 'moderator_menu_actions', array(
		'user' => $__vars['user'],
		'context' => 'tooltip',
	), $__vars) . '
								';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
					<div class="memberTooltip-headerAction">
						' . $__templater->button('
							' . $__templater->fontAwesome('fa-cog', array(
		)) . '
						', array(
			'class' => 'button--link button--small menuTrigger',
			'data-xf-click' => 'menu',
			'aria-label' => 'Thêm tùy chọn',
			'aria-expanded' => 'false',
			'aria-haspopup' => 'true',
		), '', array(
		)) . '

						<div class="menu" data-menu="menu" aria-hidden="true">
							<div class="menu-content">
								<h3 class="menu-header">' . 'Moderator tools' . '</h3>
								' . $__compilerTemp1 . '
							</div>
						</div>
					</div>
				';
	}
	$__finalCompiled .= '

				<h4 class="memberTooltip-name">' . $__templater->fn('username_link', array($__vars['user'], true, array(
		'notooltip' => 'true',
	))) . '</h4>

				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= $__templater->fn('user_banners', array($__vars['user'], array(
	)));
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
					<div class="memberTooltip-banners">
						' . $__compilerTemp2 . '
					</div>
				';
	}
	$__finalCompiled .= '

				';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
						' . $__templater->fn('user_blurb', array($__vars['user'], array(
		'tag' => 'div',
	))) . '
					';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__finalCompiled .= '
					<div class="memberTooltip-blurb">
					' . $__compilerTemp3 . '
					</div>
				';
	}
	$__finalCompiled .= '

				<div class="memberTooltip-blurb">
					<dl class="pairs pairs--inline">
						<dt>' . 'Tham gia' . '</dt>
						<dd>' . $__templater->fn('date_dynamic', array($__vars['user']['register_date'], array(
	))) . '</dd>
					</dl>
				</div>

				';
	$__compilerTemp4 = '';
	$__compilerTemp4 .= $__templater->fn('user_activity', array($__vars['user']));
	if (strlen(trim($__compilerTemp4)) > 0) {
		$__finalCompiled .= '
					<div class="memberTooltip-blurb">
						<dl class="pairs pairs--inline">
							<dt>' . 'Thấy lần gần đây nhất' . '</dt>
							<dd dir="auto">
								' . $__compilerTemp4 . '
							</dd>
						</dl>
					</div>
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
		<div class="memberTooltip-info">
			<div class="memberTooltip-stats">
				<div class="pairJustifier">
					' . $__templater->callMacro('member_macros', 'member_stat_pairs', array(
		'user' => $__vars['user'],
		'context' => 'tooltip',
	), $__vars) . '
				</div>
			</div>
		</div>

		';
	$__compilerTemp5 = '';
	$__compilerTemp5 .= '
				' . $__templater->callMacro('member_macros', 'member_action_buttons', array(
		'user' => $__vars['user'],
		'context' => 'tooltip',
	), $__vars) . '
			';
	if (strlen(trim($__compilerTemp5)) > 0) {
		$__finalCompiled .= '
			<hr class="memberTooltip-separator" />

			<div class="memberTooltip-actions">
			' . $__compilerTemp5 . '
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
</div>';
	return $__finalCompiled;
});