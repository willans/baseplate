<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterBuild(function (Jigsaw $jigsaw) {
	$destination = $jigsaw->getDestinationPath();

	// copy assets to root of build
	$jigsaw->getFilesystem()->copyDirectory(__DIR__ . '/resources/public', $destination);

	// move 404 page from 404/index.html to 404.html for Netlify
	// $jigsaw->getFilesystem()->move($destination . '/views/404/index.html', $destination . '/404.html');
	// $jigsaw->getFilesystem()->deleteDirectory($destination . '/views/404');

	// move built templates from custom views directory
	$jigsaw->getFilesystem()->copyDirectory($destination . '/views', $destination);
	$jigsaw->getFilesystem()->deleteDirectory($destination . '/views');
});
