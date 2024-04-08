<?php
// FROM HASH: ab42f4268bcda05054d42222f21f5a5f
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.has-flexbox .thNodes__nodeList.block .block-container .node-body {
	border: none;
	box-shadow: none;
}

.node, .has-flexbox .thNodes__nodeList.block .block-container .uix_block-body--outer .block-body .node {border: none;}

.p-nav-inner .p-header-logo {
	border-right: 1px solid rgba(255,255,255,.12);
}

.p-staffBar-inner .hScroller-scroll {margin-left: -4px;}

.p-sectionLinks-list {margin-left: -@xf-publicSubNavPaddingH;}

.uix_xenithSpaceFix {
	margin: @xf-paddingLargest 0 0 !important;
}

.message-userDetails,
.thThreads__message-userExtras {padding: @xf-paddingMedium;}

.p-body-sidebar .block-minorHeader:after {
    content: \'\';
    width: 20%;
    height: 2px;
    background: @xf-uix_primaryColor;
    margin-top: @xf-uix_widgetPadding;
}

// if parallax 

.parallax-mirror {
	background-color: @xf-uix_sectionBg;
}

.uix_hasWelcomeSection {
	.parallax-mirror {
		clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);
		-webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);	
	}
	.uix_headerContainer {
		position: relative;
		
		&:before {
			content: \'\';
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			background-color: @xf-uix_sectionBg;
			z-index: -200;
			clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);
			-webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);	
		}
	}
}

.has-touchevents {
	.uix_headerContainer {
		position: relative;
		
		&:before {
			content: \'\';
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			background-color: @xf-xenith_headerOverlay;
		}
	}
	
	&.uix_hasWelcomeSection {
		.uix_headerContainer {
			background-image: none !important;

			&:after {
				background-image: url(@xf-uix_parallaxImage);
				background-size: cover;
				background-position: center;
				content: \'\';
				position: absolute;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				z-index: -2;
				clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);
				-webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);	
			}
			
			&:before {
				z-index: -1;
			}
		}		
	}
}

.parallax-mirror:before {
	content: \'\';
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	background-color: @xf-xenith_headerOverlay;
	z-index: 1;
}

// if not parallax

/*
.uix_hasWelcomeSection .uix_headerContainer {
	&:before, &:after {
		clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);
		-webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 50% 100%, 0% 90%);			
	}
}

.uix_headerContainer {
	z-index: 2 !important;
	position: relative;
	
	&:before {background-color: @xf-xenith_headerOverlay;}
	
	&:after {			
		z-index: -1;
		background-image: url(\'styles/xenith/xenith/bg.jpg\');
		background-size: cover;
		background-position: center;
	}
	
	&:before, &:after {
		content: \'\';
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
	}
}
*/

.uix_headerContainer > *:not(.uix_welcomeSection):last-child {padding-bottom: @xf-paddingMedium;}

.node-icon {position: relative;}

.node-body {
	position: relative;

	&:before {
		content: \'\';
		position: absolute;
		left: 32px;
		bottom: 0;
		top: 0;
		width: 1px;
		background-color: @xf-borderColor;
	}
}

.message:not(.message--simple) .message--post .message-cell.message-cell--user {
	padding: 0;
	
	.message-avatar .avatar {
		border-radius: 0;
		.m-avatarSize(@xf-messageUserBlockWidth + ' . ($__templater->fn('property', array('messagePadding', ), false) * 2) . 'px);
	}

	.uix_messagePostBitWrapper {
		padding-top: 5px;
		padding-bottom: 5px;
	}
}

.node, .has-flexbox .thNodes__nodeList.block .block-container .block-body .node {border-top: 1px solid @xf-borderColor;}

';
	if ($__templater->fn('property', array('th_enableGrid_nodes', ), false)) {
		$__finalCompiled .= '

.has-flexbox .uix_nodeList .thNodes__nodeList .block-container {
	.node {padding: 0;}
	
	.block-header {margin-bottom: 0;}
	
	.node-body {
		flex-wrap: wrap;

		.node-extra {
			width: 100%;
			padding-left: ' . ($__templater->fn('property', array('uix_nodeIconWidth', ), false) + $__templater->fn('property', array('paddingLarge', ), false)) . 'px;
		}
		.block-footer {
			width: 100%;
			padding-left: @xf-uix_nodeIconWidth;
		}
	}
}

';
	}
	return $__finalCompiled;
});