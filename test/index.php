<?php
	require __DIR__ . '/../vendor/autoload.php';

	use \App\Video;

	$urlVideo 	= 'https://www.youtube.com/watch?v=CeacjOkLjZ0';
	$apiKey 	= '';

	$ma_video 	= new Video($urlVideo, $apiKey);

	echo $ma_video->getUrlVideo().'<br>';
	echo $ma_video->getProvider().'<br>';
	echo $ma_video->getId().'<br>';
	$test =  $ma_video->getJsonArray();

var_dump($test);