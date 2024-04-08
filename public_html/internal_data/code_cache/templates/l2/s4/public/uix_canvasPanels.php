<?php
// FROM HASH: 15f9ece1651b402dc17ec94175f4ff41
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="sidePanel sidePanel--nav sidePanel--visitor">
	<div class="sidePanel__tabPanels">
		
		<div data-content="navigation" class="is-active sidePanel__tabPanel js-navigationTabPanel">
			' . $__templater->callMacro('PAGE_CONTAINER', 'canvasNavPanel', array(
		'widgets' => $__vars['uix_sidebarNavWidgets'],
	), $__vars) . '
		</div>
		
		';
	if ($__vars['xf']['visitor']['user_id'] AND ($__templater->fn('property', array('uix_visitorTabsMobile', ), false) == 'canvas')) {
		$__finalCompiled .= '
			
		<div data-content="account" class="sidePanel__tabPanel js-visitorTabPanel">
		<div class="uix_canvasPanelBody" data-menu="menu" aria-hidden="true"
			 data-href="' . $__templater->fn('link', array('account/visitor-menu', ), true) . '"
			 data-load-target=".js-visitorMenuBody">
			<div class="menu-content">
				<div class="offCanvasMenu-header">
					' . 'Tài khoản của bạn' . '
					<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="' . 'Đóng' . '"></a>
				</div>
				<div class="js-visitorMenuBody"></div>
			</div>
		</div>
		</div>
		
		<div data-content="inbox" class="sidePanel__tabPanel js-convoTabPanel">
			<div class="menu-content">
				<div class="uix_canvasPanelBody" data-menu="menu" aria-hidden="true"
					 data-href="' . $__templater->fn('link', array('conversations/popup', ), true) . '"
					 data-nocache="true"
					 data-target=".js-convMenuBody">
					<div class="offCanvasMenu-header">
						' . 'Đối thoại' . '
						<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="' . 'Đóng' . '"></a>
					</div>
					<div class="js-convMenuBody">
					</div>
				</div>
				<div class="menu-footer">
					<a href="' . $__templater->fn('link', array('conversations/add', ), true) . '" class="u-pullRight">' . 'Bắt đầu đối thoại mới' . '</a>
					<a href="' . $__templater->fn('link', array('conversations', ), true) . '">' . 'Xem tất cả' . $__vars['xf']['language']['ellipsis'] . '</a>
				</div>
			</div>
		</div>
		
		<div data-content="alerts" class="sidePanel__tabPanel js-alertTabPanel">
			<div class="menu-content">
				<div class="uix_canvasPanelBody" data-menu="menu" aria-hidden="true"
					 data-href="' . $__templater->fn('link', array('account/alerts-popup', ), true) . '"
					 data-nocache="true"
					 data-target=".js-alertsMenuBody">
					<div class="offCanvasMenu-header">
						' . 'Thông báo' . '
						<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="' . 'Đóng' . '"></a>
					</div>
					<div class="js-alertsMenuBody">
					</div>
				</div>
				<div class="menu-footer menu-footer--split">
					<span class="menu-footer-main">
						<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '">' . 'Xem tất cả' . $__vars['xf']['language']['ellipsis'] . '</a>
					</span>
					<span class="menu-footer-opposite">
						<a href="' . $__templater->fn('link', array('account/preferences', ), true) . '">' . 'Tùy chọn' . '</a>
					</span>
				</div>
			</div>
		</div>
			
		';
	}
	$__finalCompiled .= '
		
	</div>
</div>';
	return $__finalCompiled;
});