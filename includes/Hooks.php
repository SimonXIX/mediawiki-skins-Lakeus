<?php
namespace Lakeus;

use Config;
use ResourceLoaderContext;

class Hooks {
	/**
	 * @param ResourceLoaderContext $context
	 * @param Config $config
	 * @return $wgLakeusWvuiSearchOptions
	 */
	public static function getSnapwikiskinWvuiSearchResourceLoaderConfig(
		ResourceLoaderContext $context,
		Config $config
	) {
		return $config->get( 'LakeusWvuiSearchOptions' );
	}
}