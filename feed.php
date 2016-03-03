<?php
	/*
	require_once('libs/autoloader.php');
	$feed = new SimplePie();
	$feed->set_feed_url('http://claption.tumblr.com/rss');
	$feed->init();
	*/

	require('libs/magpie/rss_fetch.inc');
	$feed = fetch_rss('http://claption.tumblr.com/rss');
	//$feed->handle_content_type();
?>