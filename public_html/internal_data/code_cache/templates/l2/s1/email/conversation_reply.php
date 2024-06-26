<?php
// FROM HASH: b4a1f88de2a2d247d5ec554fc37342c5
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . '' . $__templater->escape($__vars['conversation']['title']) . ' - Trả lời mới cho cuộc hội thoại của bạn' . '
</mail:subject>

' . '<p>' . $__templater->escape($__vars['receiver']['username']) . ', ' . (((('<a href="' . $__templater->fn('link', array('canonical:members', $__vars['sender'], ), true)) . '">') . $__templater->escape($__vars['sender']['username'])) . '</a>') . ' trả lời cuộc trò chuyện cá nhân của bạn tại ' . (((('<a href="' . $__templater->fn('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . '.</p>' . '

<h2><a href="' . $__templater->fn('link', array('canonical:conversations/unread', $__vars['conversation'], ), true) . '">' . $__templater->escape($__vars['conversation']['title']) . '</a></h2>

';
	if ($__vars['xf']['options']['emailConversationIncludeMessage']) {
		$__finalCompiled .= '
	<div class="message">' . $__templater->fn('bb_code_type', array('emailHtml', $__vars['message']['message'], 'conversation_message', $__vars['message'], ), true) . '</div>
';
	}
	$__finalCompiled .= '

<table cellpadding="10" cellspacing="0" border="0" width="100%" class="linkBar">
<tr>
	<td>
		<a href="' . $__templater->fn('link', array('canonical:conversations/unread', $__vars['conversation'], ), true) . '" class="button">' . 'Xem cuộc trò chuyện này' . '</a>
	</td>
	<td align="' . ($__vars['xf']['isRtl'] ? 'left' : 'right') . '">
		<a href="' . $__templater->fn('link', array('canonical:conversations', ), true) . '" class="buttonFake">' . 'Xem tất cả các cuộc hội thoại' . '</a>
	</td>
</tr>
</table>

' . $__templater->callMacro('conversation_macros', 'footer', array(
		'conversation' => $__vars['conversation'],
	), $__vars);
	return $__finalCompiled;
});