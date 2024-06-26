<?php
// FROM HASH: fc970515d0a4e3416b433c88485cdb95
return array('macros' => array('reaction_snippet' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'reactionUser' => '!',
		'reactionId' => '!',
		'profilePost' => '!',
		'date' => '!',
		'fallbackName' => 'Unknown Member',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="contentRow-title">
		';
	if ($__vars['profilePost']['user_id'] == $__vars['profilePost']['profile_user_id']) {
		$__finalCompiled .= '
			';
		if ($__vars['profilePost']['user_id'] == $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
				' . '' . $__templater->fn('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' phản ứng với <a ' . (('href="' . $__templater->fn('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>trạng thái của bạn</a> với ' . $__templater->filter($__templater->fn('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
			';
		} else {
			$__finalCompiled .= '
				' . '' . $__templater->fn('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' đã phản ứng với <a ' . (('href="' . $__templater->fn('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>trạng thái của ' . $__templater->escape($__vars['profilePost']['username']) . '</a> với ' . $__templater->filter($__templater->fn('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
			';
		}
		$__finalCompiled .= '
		';
	} else {
		$__finalCompiled .= '
			';
		if ($__vars['profilePost']['user_id'] == $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
	
				' . '' . $__templater->fn('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' đã phản ứng với <a ' . (('href="' . $__templater->fn('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>bài viết của bạn</a> trên hồ sơ của ' . $__templater->escape($__vars['profilePost']['ProfileUser']['username']) . ' với ' . $__templater->filter($__templater->fn('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
			';
		} else if ($__vars['profilePost']['ProfileUser']['user_id'] == $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
	
				' . '' . $__templater->fn('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' đã phản ứng với <a ' . (('href="' . $__templater->fn('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>bài viết của ' . $__templater->escape($__vars['profilePost']['username']) . '</a> trên hồ sơ của bạn với ' . $__templater->filter($__templater->fn('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
			';
		} else {
			$__finalCompiled .= '
	
				' . '' . $__templater->fn('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' đã phản ứng với <a ' . (('href="' . $__templater->fn('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>bài viết của ' . $__templater->escape($__vars['profilePost']['username']) . '</a> trên hồ sơ của ' . $__templater->escape($__vars['profilePost']['ProfileUser']['username']) . ' với ' . $__templater->filter($__templater->fn('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '
	</div>
	
	<div class="contentRow-snippet">' . $__templater->fn('snippet', array($__vars['profilePost']['message'], $__vars['xf']['options']['newsFeedMessageSnippetLength'], array('stripPlainTag' => true, 'stripQuote' => true, ), ), true) . '</div>

	<div class="contentRow-minor">' . $__templater->fn('date_dynamic', array($__vars['date'], array(
	))) . '</div>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . $__templater->callMacro(null, 'reaction_snippet', array(
		'reactionUser' => $__vars['reaction']['ReactionUser'],
		'reactionId' => $__vars['reaction']['reaction_id'],
		'profilePost' => $__vars['content'],
		'date' => $__vars['reaction']['reaction_date'],
	), $__vars);
	return $__finalCompiled;
});