<?php
ini_set ( 'max_execution_time', 0);
include 'GoogleScraper.class.php';
$obj=new GoogleScraper();
// Pass your keyword and proxy ip here.
$arr=$obj->getUrlList(urlencode('car'),'');
print_r($arr);

?>
