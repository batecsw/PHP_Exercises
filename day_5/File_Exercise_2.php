<?php

$file_handle = fopen("last_access.log" , "w");
$file_content = date('U');
fwrite($file_handle, $file_content);
fclose($file_handle);
	/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */
?>