<?php
DEFINE ("_BBCLONE_DIR", "../../../bbclone/");
DEFINE ("_NEW_COUNTER", _BBCLONE_DIR . "mark_page.php");

DEFINE("_BBC_PAGE_NAME","RATS index page");

if(file_exists(_NEW_COUNTER))
{
include (_NEW_COUNTER);
}
else
echo "counter didn't work!";

include ("RATS.html");
?>

