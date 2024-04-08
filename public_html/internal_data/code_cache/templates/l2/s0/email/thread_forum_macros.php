<?php
// FROM HASH: 9e173f4dd5c156b176a1f60236a89888
return array('macros' => array('go_thread_bar' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'thread' => '!',
		'watchType' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<table cellpadding="10" cellspacing="0" border="0" width="100%" class="linkBar">
	<tr>
		<td>
			<a href="' . $__templater->fn('link', array('canonical:threads/unread', $__vars['thread'], array('new' => 1, ), ), true) . '" class="button">' . 'Xem chủ đề này' . '</a>
		</td>
		<td align="' . ($__vars['xf']['isRtl'] ? 'left' : 'right') . '">
			';
	if ($__vars['watchType'] == 'threads') {
		$__finalCompiled .= '
				<a href="' . $__templater->fn('link', array('canonical:watched/threads', ), true) . '" class="buttonFake">' . 'Theo dõi' . '</a>
			';
	} else if ($__vars['watchType'] == 'forums') {
		$__finalCompiled .= '
				<a href="' . $__templater->fn('link', array('canonical:watched/forums', ), true) . '" class="buttonFake">' . 'Diễn đàn được theo dõi' . '</a>
			';
	}
	$__finalCompiled .= '
		</td>
	</tr>
	</table>
';
	return $__finalCompiled;
},
'watched_forum_footer' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'thread' => '!',
		'forum' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . '<p class="minorText">Vui lòng không trả lời tin nhắn này. Bạn phải vào diễn đàn để trả lời.</p>

<p class="minorText">Tin nhắn này được gửi cho bạn vì bạn đã chọn theo dõi diễn đàn "' . $__templater->escape($__vars['forum']['title']) . '" tại ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' với email thông báo của chủ đề hoặc tin nhắn mới. Bạn sẽ không nhận bất kỳ email nào khác về chủ đề này cho đến khi bạn đọc tin nhắn mới.</p>

<p class="minorText">Nếu bạn không muốn nhận thêm email, bạn có thể <a href="' . $__templater->fn('link', array('canonical:email-stop/content', $__vars['xf']['toUser'], array('t' => 'forum', 'id' => $__vars['forum']['node_id'], ), ), true) . '">vô hiệu hóa email từ diễn đàn này</a> hoặc <a href="' . $__templater->fn('link', array('canonical:email-stop/all', $__vars['xf']['toUser'], ), true) . '">vô hiệu hóa tất cả email</a>.</p>' . '
';
	return $__finalCompiled;
},
'watched_thread_footer' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'thread' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . '<p class="minorText">Vui lòng không trả lời tin nhắn này. Bạn phải vào diễn đàn để trả lời.</p>

<p class="minorText">Tin nhắn này được gửi cho bạn vì bạn đã chọn theo dõi chủ đề "' . (((('<a href="' . $__templater->fn('link', array('canonical:threads', $__vars['thread'], ), true)) . '">') . $__templater->escape($__vars['thread']['title'])) . '</a>') . '" tại ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' với email thông báo của phản hồi mới. Bạn sẽ không nhận bất kỳ email nào khác về chủ đề này cho đến khi bạn đọc tin nhắn mới.</p>

<p class="minorText">Nếu bạn không muốn nhận thêm email, bạn có thể <a href="' . $__templater->fn('link', array('canonical:email-stop/content', $__vars['xf']['toUser'], array('t' => 'thread', 'id' => $__vars['thread']['thread_id'], ), ), true) . '">vô hiệu hóa email từ diễn đàn này</a> hoặc <a href="' . $__templater->fn('link', array('canonical:email-stop/all', $__vars['xf']['toUser'], ), true) . '">vô hiệu hóa tất cả email</a>.</p>' . '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

';
	return $__finalCompiled;
});