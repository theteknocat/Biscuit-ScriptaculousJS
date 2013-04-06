<?php
/**
 * Extension for easy inclusion of Scriptaculous JS
 *
 * @package Extensions
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0
 **/
class ScriptaculousJs extends AbstractExtension {
	protected $_dependencies = array("PrototypeJs");
	function run() {
		$this->register_js('footer','scriptaculous.js');
		$this->register_js('footer','../vendor/builder.js');
		$this->register_js('footer','../vendor/effects.js');
		$this->register_js('footer','../vendor/dragdrop.js');
		$this->register_js('footer','../vendor/controls.js');
		$this->register_js('footer','../vendor/slider.js');
		$this->register_js('footer','../vendor/sound.js');
	}
}
?>