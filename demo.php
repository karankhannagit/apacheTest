<?php
	
	$commands = array(
		'echo $PWD',
		'whoami',
		'git pull',
        'git status',
        // 'git reset --hard HEAD',
		// 'git submodule sync',
		// 'git submodule update',
		// 'git submodule status',
	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output;
	}
	
?>

