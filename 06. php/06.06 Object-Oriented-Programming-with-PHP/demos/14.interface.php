<?php
/**
 * base plugin - all plugins have to implement this interface!
 *
 */
interface iPlugin {
	public function __construct ($controller);
	public function __destruct ();

	public function render ();
}

/**
 * the plugin controller class
 * maybe it should be static
 */
class PluginsController {
	private $loadedPlugins = array ();

	public function loadPlugin ($plugin_class) {
		// check if the plugin class has implemented iPlugin
		$interfaces = class_implements($plugin_class);
		if (in_array('iPlugin', $interfaces)) {
			// simple way is:
			$this->loadedPlugins[] = new $plugin_class($this);

			// addon: pass arguments forward ;)
			/*$args = func_get_args();
			$args[0] = $this;
			$reflectionObj = new ReflectionClass($plugin_class);
			$this->loadedPlugins[] = $reflectionObj->newInstanceArgs($args);*/
		} else {
			echo 'Trying to load plugin that does not implement iPlugin';
		}
	}

	public function __destruct () {
		foreach ($this->loadedPlugins as $plugin)
			unset ($plugin);
	}

	public function render () {
		foreach ($this->loadedPlugins as $plugin)
			$plugin->render();
	}
}

/**
 * Simple test plugin
 * prints some meaningless data
 *
 */
class TestPlugin implements iPlugin {
	public static $name = 'Test Plugin';
	private $controller;
	private $text_to_print = '';

	public function __construct ($controller) {
		$this->controller = $controller;
		//print_r(func_get_args());
	}
	public function __destruct () {
		//
	}

	public function render () {
		echo 'This is the test plugin<br />';
		echo $this->text_to_print;
	}
}


/**
 * Main applicaion body
 */

$controller = new PluginsController();
$controller->loadPlugin('TestPlugin', 'Print this');
$controller->render();

?>