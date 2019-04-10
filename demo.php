<?php
$filename = './apacheTest';
$build_number=$argv[1];
if (file_exists($filename)) {

    $gco_output = exec(
            "cd ".$filename . "\n"
        .   "git checkout origin/master" . "\n"
        .   "rsync -auxz  . /efs/web/web".$build_number." --delete" . "\n"
        .   "ln -sfn /efs/web/web".$build_number." /efs/web/html". "\n"   

                                 );
} 

else {
    echo "cloning repo";
    $gco_output = exec(
            "git clone https://github.com/karankhannagit/apacheTest.git" . "\n"
        .   "rsync -auxz  ./apacheTest/ /efs/web/web".$build_number." --delete" . "\n"
        .   "ln -sfn /efs/web/web".$build_number." /efs/web/html". "\n"

                                 );

}
?>
