<?php
// FROM HASH: 9ccee5602bac66d0a83ad445a3636aa3
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
' . '' . $__templater->escape($__vars['subject']) . ' (từ ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ')' . '
</mail:subject>

' . '<p>Tin nhắn sau đây đã được gửi từ ' . (((((('<a href="mailto:' . $__templater->escape($__vars['email'])) . '">') . $__templater->escape($__vars['name'])) . ' &lt;') . $__templater->escape($__vars['email'])) . '&gt;</a>') . ' thông qua biểu mẫu liên hệ tại ' . (((('<a href="' . $__templater->fn('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . '.</p>' . '

<h2>' . $__templater->escape($__vars['subject']) . '</h2>

<div class="message">' . $__templater->filter($__vars['message'], array(array('nl2br', array()),), true) . '</div>';
	return $__finalCompiled;
});