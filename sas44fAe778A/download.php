<?php


if($_GET['get'] == "zip"){

	$hit_count = @file_get_contents('count.txt');
	$hit_count++;
	@file_put_contents('count.txt', $hit_count);


	header('Location: https://github.com/deivisonarthur/OSC-Magento-Brasil-6-Pro/zipball/master'); // redirect to git	
}

if($_GET['get'] == "tar.gz"){

	$hit_count = @file_get_contents('count.txt');
	$hit_count++;
	@file_put_contents('count.txt', $hit_count);


	header('Location: https://github.com/deivisonarthur/OSC-Magento-Brasil-6-Pro/tarball/master'); // redirect to git	
}

if($_GET['get'] == "git"){

	$hit_count = @file_get_contents('count.txt');
	$hit_count++;
	@file_put_contents('count.txt', $hit_count);


	header('Location: https://github.com/deivisonarthur/OSC-Magento-Brasil-6-Pro'); // redirect to git	
}