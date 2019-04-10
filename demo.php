<?php
$build_number=$argv[1];
$prev_build = $build_number-1;
$gco_output = exec(       "rm -rf apacheTest" . "\n"
                        . "git clone https://github.com/karankhannagit/apacheTest.git" . "\n"
                        . "git -C ./apacheTest/ checkout master". "\n"
                        . "ls -al" . "\n"
                        . "rsync -auxz  ./apacheTest/ /efs/web/web".$build_number." --delete" . "\n"
                        //. "rm /efs/web/html" . "\n"
                        . "ln -sf /efs/web/web".$build_number." /efs/web/html". "\n"
                    );
    $array = explode("\n", $gco_output);
    $array = array_filter($array);
    $local_commit = end($array);
    echo ("Local Commit: " . $local_commit . "\n\n"); //last commit or local commit ?

?>

