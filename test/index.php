<?php
	require __DIR__ . '/../vendor/autoload.php';

	use \App\Video;

	$urlVideo 	= 'https://www.youtube.com/watch?v=CeacjOkLjZ0';
	$apiKey 	= 'AIzaSyBuXN1PKvY5gJK2sC4CrSujUyCiFhsUNA';

	$ma_video 	= new Video($urlVideo, $apiKey);

	echo $ma_video->getUrlVideo().'<br>';
	echo $ma_video->getProvider().'<br>';
	echo $ma_video->getId().'<br>';
	$test =  $ma_video->getJsonArray();

var_dump($ma_video);