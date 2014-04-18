<?php
# New user group for users whose edits should be autopatrolled
$wgGroupPermissions['autopatrolled']['autopatrol'] = true;


$wgFavicon = '/favicon.png';

$wgNamespacesWithSubpages[NS_MAIN] = true;

$wgAllowUserJs = true;
$wgAllowUserCss = true;

require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
$wgPFEnableStringFunctions = true;


$wgFileExtensions[] = 'djvu';
$wgDjvuDump = "/usr/bin/djvudump";
$wgDjvuRenderer = "/usr/bin/ddjvu";
$wgDjvuTxt = "/usr/bin/djvutxt";
$wgDjvuToXML = '/usr/bin/djvutoxml';
$wgDjvuPostProcessor = "/usr/bin/ppmtojpeg";
$wgDjvuOutputExtension = 'jpg';
$wgMaxShellMemory = 202400;
require_once( "$IP/extensions/ProofreadPage/ProofreadPage.php" );


require_once( "$IP/extensions/LabeledSectionTransclusion/lst.php" );
require_once( "$IP/extensions/LabeledSectionTransclusion/lsth.php" );


require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
# Enables use of WikiEditor by default but still allow users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;

# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;


require_once $IP . '/../mylib-single-login/get_user.php';
require_once $IP . '/extensions/auth_mylib/auth_mylib.php';

$wgResourceModules['skins.workroom.styles'] = array(
	'styles' => array(
		'workroom/styles.less',
	),
	'remoteBasePath' => $GLOBALS['wgStylePath'],
	'localBasePath' => __DIR__.'/'. $GLOBALS['wgStylePath'],
);


require_once("$IP/extensions/sfb/sfb.php");

$wgChitankaMenu = array(
	'main' => array('url' => 'http://chitanka.info', 'text' => 'Библиотека'),
	'forum' => array('url' => 'http://forum.chitanka.info', 'text' => 'Форум'),
	'wiki-workroom' => array('url' => 'http://wiki.workroom.chitanka.info', 'text' => 'Читалие', 'class' => 'current'),
	'rechnik' => array('url' => 'http://rechnik.chitanka.info', 'text' => 'Речник'),
	'gramofonche' => array('url' => 'http://gramofonche.chitanka.info', 'text' => 'Грамофонче'),
	'tools' => array('url' => 'http://tools.chitanka.info', 'text' => 'Инструменти'),
);

$wgAnalyticsSnippet = '';
