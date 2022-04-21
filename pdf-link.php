<?php 
$directory = "/content/yogi-narharinath-letters/";

phpfiles = scandir($directory, 1);

foreach ($phpfiles as $php_file)
{
    echo '<li><a href = "'.$directory/$php_file.'">' .basename($php_file). '</a></li>>';
}
?>