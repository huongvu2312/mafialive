<?php
// FROM HASH: 94577e40a374f6e47ffd7cf3936a6400
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// ######################################### STAFF BAR #################################

.p-staffBar
{
	.xf-publicStaffBar();

	a { color: inherit;	}

	.hScroller-action
	{
		.m-hScrollerActionColorVariation(
			xf-default(@xf-publicStaffBar--background-color, transparent),
			@xf-publicStaffBar--color,
			xf-intensify(@xf-publicStaffBar--color, 10%)
		);
	}
}

.p-staffBar-inner
{
	.m-pageWidth();
	.m-pageInset();
	.m-clearFix();

	padding-top: 4px;
	padding-bottom: 4px;
}

.p-staffBar-link
{
	display: inline-block;
	vertical-align: top;
	color: inherit;
	padding: 4px @xf-paddingMedium;
	margin-right: .35em;

	&:last-child
	{
		margin-right: 0;
	}

	&:hover
	{
		text-decoration: none;
		background: xf-diminish(@xf-publicStaffBar--background-color, 6%);
		border-radius: @xf-borderRadiusSmall;
	}
}';
	return $__finalCompiled;
});