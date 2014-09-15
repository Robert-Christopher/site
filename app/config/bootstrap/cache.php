<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\storage\Cache;
use lithium\core\Libraries;
use lithium\core\Environment;
use lithium\action\Dispatcher;
use lithium\storage\cache\adapter\Apc;

/**
 * Configuration
 *
 * Configures the adapters to use with the cache class. Available adapters are `Memcache`,
 * `File`, `Redis`, `Apc`, `XCache` and `Memory`. Please see the documentation on the
 * adapters for specific characteristics and requirements.
 *
 * Most of this code is for getting you up and running only, and should be replaced with
 * a hard-coded configuration, based on the cache(s) you plan to use.
 *
 * We create a default cache configuration using the most optimized adapter available, and
 * use it to provide default caching for high-overhead operations. If APC is not available
 * and we can't degrade to file based caching, bail out.
 *
 * @see lithium\storage\Cache
 * @see lithium\storage\cache\adapters
 * @see lithium\storage\cache\strategies
 */
Cache::config(array(
	'default' => array(
		'adapter' => 'Memcache',
		'scope' => PROJECT_NAME . '_' . md5(LITHIUM_APP_PATH . PROJECT_VERSION)
	)
));

/**
 * Apply
 *
 * Applies caching to neuralgic points of the framework but only when we are running
 * in production. This is also a good central place to add your own caching rules.
 *
 * Here we cache paths for auto-loaded and service-located classes.
 *
 * @see lithium\core\Environment
 * @see lithium\core\Libraries
 */
Dispatcher::applyFilter('run', function($self, $params, $chain) {
	$cacheKey = 'core.libraries';

	if ($cached = Cache::read('default', $cacheKey)) {
		$cached = (array) $cached + Libraries::cache();
		Libraries::cache($cached);
	}
	$result = $chain->next($self, $params, $chain);

	if ($cached != ($data = Libraries::cache())) {
		Cache::write('default', $cacheKey, $data, '+1 day');
	}
	return $result;
});

?>