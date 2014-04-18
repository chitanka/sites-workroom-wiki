<?php

require_once $IP . '/extensions/sfb/sfb-converter/lib/Sfblib/SfbConverter.php';
require_once $IP . '/extensions/sfb/sfb-converter/lib/Sfblib/SfbToHtmlConverter.php';
require_once $IP . '/extensions/sfb/sfb-converter/lib/Sfblib/XmlElement.php';
require_once $IP . '/extensions/sfb/sfb-converter/lib/Sfblib/Char.php';

$wgHooks['ParserFirstCallInit'][] = function(Parser $parser) {
	$parser->setHook('sfb', function($input, array $args, Parser $parser, PPFrame $frame) {
		$converter = new Sfblib_SfbToHtmlConverter(trim($input, "\n"));
		return '<div class="sfb">' . $converter->convert()->getContent() . '</div>';
	});
	return true;
};
/*
$wgHooks['PageContentSave'][] = function($wikiPage, $user, $content, $summary, $isMinor, $isWatch, $section, $flags, $status) {
	if ($content instanceof ProofreadPageContent) {
		$content->getBody()->mText = preg_replace_callback('|(<sfb>)(.+)(</sfb>)|Ums', function($matches) {
			return $matches[1] . Sfblib_SfbConverter::addMissingCommandDelimiters($matches[2]) . $matches[3];
		}, $content->getBody()->mText);
	}
};
*/
