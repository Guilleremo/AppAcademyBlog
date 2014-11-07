<?php
	$title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//This post means it is receiving data called title and filtering it
	$post = filer_inpt(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//this post means it is receiving data called post and is filtering it

	echo "<p>Title: $title</p>";
	//this is just to echo out title
	echo "<p>Post: $post</p>";
	//this is just to echo out post