<?php
// FROM HASH: d61568b55a013f6c16676aa0cfedb2db
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@_memberTooltip-padding: @xf-paddingMedium;
@_memberTooltip-avatarSize: @avatar-m;

.memberTooltip-header
{
	display: table;
	table-layout: fixed;
	width: 100%;
	padding: @_memberTooltip-padding;
	.xf-memberTooltipHeader();
}

.memberTooltip-avatar
{
	// display: table-cell;
	// width: ((@_memberTooltip-padding) * 2 + (@_memberTooltip-avatarSize));
	vertical-align: top;
	padding-right: @_memberTooltip-padding;
}

.memberTooltip-headerInfo
{
	// display: table-cell;
	vertical-align: top;
	flex-grow: 1;
}

.memberTooltip-name
{
	margin: 0;
	margin-top: -.15em;
	padding: 0;
	font-weight: @xf-fontWeightNormal;
	line-height: .8 * (@xf-lineHeightDefault);
	.xf-memberTooltipName();

	.m-hiddenLinks();
}

.memberTooltip-headerAction
{
	float: right;
}

.memberTooltip-banners {
	margin: -2px;
	
	.userBanner {margin: 2px;}
}

.memberTooltip-banners,
.memberTooltip-blurb
{
	margin-top: .25em;
}

.memberTooltip-blurb
{
	font-size: @xf-fontSizeSmall;
}

.memberTooltip-stats
{
	font-size: @xf-fontSizeSmall;

	dl.pairs.pairs--rows > dt
	{
		font-size: @xf-fontSizeSmaller;
	}
}

.memberTooltip-info,
.memberTooltip-actions
{
	padding: @_memberTooltip-padding;
	
	.button {
		.xf-uix_buttonSmall;
	}
}

.memberTooltip-separator
{
	margin: -@xf-borderSize @_memberTooltip-padding 0;
	border: none;
	border-top: @xf-borderSize solid @xf-borderColorLight;
}

@media (max-width: @xf-responsiveNarrow)
{
	.memberTooltip-avatar
	{
		width: ((@_memberTooltip-padding) * 2 + (@_memberTooltip-avatarSize * 2 / 3));

		.avatar
		{
			.m-avatarSize(@_memberTooltip-avatarSize * 2 / 3);
		}
	}
}';
	return $__finalCompiled;
});