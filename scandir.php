<?php

$resource=opendir("src");

while (($entry=readdir($resource))!==FALSE) {
    if($entry!='.' && $entry!='..')
    echo $entry."<br/>";
}

$dir    = $resource;
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

?>