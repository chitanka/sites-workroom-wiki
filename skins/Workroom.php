<?php
/**
 * Workroom skin - based on Vector skin
 */

/**
 * SkinTemplate class for Workroom skin
 * @ingroup Skins
 */
class SkinWorkroom extends SkinVector {

	protected static $bodyClasses = array( 'vector-animateLayout', 'workroom' );

	var $skinname = 'workroom', $stylename = 'workroom',
		$template = 'WorkroomTemplate';

	/**
	 * Loads skin and user CSS files.
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ) {
		$out->addModuleStyles( array(
			'mediawiki.legacy.shared',
			'mediawiki.legacy.commonPrint',
			'mediawiki.ui.button',
			'skins.common.interface',
			'skins.workroom.styles',
		) );
	}
}

/**
 * QuickTemplate class for Workroom skin
 * @ingroup Skins
 */
class WorkroomTemplate extends VectorTemplate {

	/**
	 * Outputs the entire contents of the (X)HTML page
	 */
	public function execute() {
		$this->data['headelement'] .= $this->getProjectMenu();
		$this->data['headelement'] .= '<div class="workroom-container" style="position: relative">';
		$this->clearFooterLinks();

		parent::execute();
	}

	function printTrail() {
		global $wgAnalyticsSnippet;

		echo '</div><!-- close .workroom-container -->';
		parent::printTrail();

		echo $wgAnalyticsSnippet;
	}

	protected function getProjectMenu() {
		global $wgChitankaMenu;

		$items = array();
		foreach ($wgChitankaMenu as $key => $o) {
			$class = isset($o['class']) ? $o['class'] : '';
			$items[] = "<li id=\"project-$key\" class=\"$class\"><a href=\"$o[url]\">$o[text]</a></li>";
		}
		return '<div id="project-links"><ul>'. implode("\n", $items) .'</ul></div>';
	}

	protected function clearFooterLinks() {
		unset($this->data['privacy'], $this->data['about'], $this->data['disclaimer']);
	}
}
