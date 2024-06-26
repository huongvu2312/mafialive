<?php
// FROM HASH: 5b4564c3dd35712274fa13e19365a980
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Trả lời vào chủ đề');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'metaNoindex', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__templater->breadcrumbs($__templater->method($__vars['thread'], 'getBreadcrumbs', array()));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['attachmentData']) {
		$__compilerTemp1 .= '
					' . $__templater->callMacro('helper_attach_upload', 'upload_block', array(
			'attachmentData' => $__vars['attachmentData'],
			'forceHash' => $__vars['thread']['draft_reply']['attachment_hash'],
		), $__vars) . '
				';
	}
	$__compilerTemp2 = '';
	if ($__vars['xf']['options']['multiQuote']) {
		$__compilerTemp2 .= '
					' . $__templater->callMacro('multi_quote_macros', 'button', array(
			'href' => $__templater->fn('link', array('threads/multi-quote', $__vars['thread'], ), false),
			'messageSelector' => '.js-post',
			'storageKey' => 'multiQuoteThread',
		), $__vars) . '
				';
	}
	$__compilerTemp3 = '';
	if (!$__vars['xf']['visitor']['user_id']) {
		$__compilerTemp3 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => '_xfUsername',
			'data-xf-init' => 'guest-username',
			'maxlength' => $__templater->fn('max_length', array($__vars['xf']['visitor'], 'username', ), false),
		), array(
			'label' => 'Tên',
		)) . '

				' . $__templater->formRowIfContent($__templater->fn('captcha', array(false)), array(
			'label' => 'Mã xác nhận',
		)) . '
			';
	} else {
		$__compilerTemp3 .= '
				' . $__templater->callMacro('helper_thread_options', 'watch_input', array(
			'thread' => $__vars['thread'],
		), $__vars) . '
				' . $__templater->callMacro('helper_thread_options', 'thread_status', array(
			'thread' => $__vars['thread'],
		), $__vars) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formEditorRow(array(
		'name' => 'message',
		'value' => $__vars['defaultMessage'],
		'attachments' => ($__vars['attachmentData'] ? $__vars['attachmentData']['attachments'] : array()),
		'placeholder' => 'Viết câu trả lời của bạn...',
	), array(
		'rowtype' => 'fullWidth noLabel',
		'label' => 'Nội dung',
	)) . '

			' . $__templater->formRow('
				' . $__compilerTemp1 . '

				' . $__compilerTemp2 . '
				' . $__templater->button('', array(
		'class' => 'button--link u-jsOnly',
		'data-xf-click' => 'preview-click',
		'icon' => 'preview',
	), '', array(
	)) . '
			', array(
	)) . '

			' . $__compilerTemp3 . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Trả lời',
		'icon' => 'reply',
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('threads/add-reply', $__vars['thread'], ), false),
		'class' => 'block',
		'ajax' => 'true',
		'draft' => $__templater->fn('link', array('threads/draft', $__vars['thread'], ), false),
		'data-xf-init' => 'attachment-manager',
		'data-preview-url' => $__templater->fn('link', array('threads/reply-preview', $__vars['thread'], ), false),
	));
	return $__finalCompiled;
});