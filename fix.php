<?php

$dir = '/';

$story = file_get_contents('The First Hunt.md');

$scenes = explode('##',$story);

foreach ($scenes as $i => $s) {
	if(empty($s)) {
		continue;
	}

	file_put_contents('extract/'.str_pad($i,3,'0',STR_PAD_LEFT).'.md', '#'.$s);
}


/*$files = scandir('.');

sort($files);

$i = 1;
foreach($files as $file) {
    if(preg_match('/[0-9]{3}/',$file)) {
        $chapter = file_get_contents($file);

        $scenes = explode('#',$chapter);

        foreach($scenes as $string) {
        	if(empty($string)) {
        		continue;
        	}
	        $newFile = fopen('extract/'.str_pad($i,3,'0',STR_PAD_LEFT).'.md', 'w+');
	        fwrite($newFile, "# Scene Break\n".$string);
	        fclose($newFile);
	        $i++;
	    }
    }
}


