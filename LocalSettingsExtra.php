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
	'main' => array('url' => '//chitanka.info', 'text' => 'Библиотека'),
	'biblioman' => array('url' => '//biblioman.chitanka.info', 'text' => 'Библиоман'),
	'forum' => array('url' => '//forum.chitanka.info', 'text' => 'Форум'),
	'dachko' => array('url' => '//prevodi.chitanka.info', 'text' => 'Дачко'),
	'wiki-workroom' => array('url' => '//wiki.workroom.chitanka.info', 'text' => 'Читалие', 'class' => 'current'),
	'rechnik' => array('url' => '//rechnik.chitanka.info', 'text' => 'Речник'),
	'gramofonche' => array('url' => '//gramofonche.chitanka.info', 'text' => 'Грамофонче'),
	'tools' => array('url' => '//tools.chitanka.info', 'text' => 'Сръчко'),
);

$wgAnalyticsSnippet = '';
