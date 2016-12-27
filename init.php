<?
set_time_limit(0);

require 'config.php';
require 'lib/utility.php';
require 'lib/mysqli.class.php';
require 'lib/php_crossword.class.php';

$script_start = getmicrotime();

$cols = isset($_REQUEST['cols']) ? (int)$_REQUEST['cols'] : 15;
$rows = isset($_REQUEST['rows']) ? (int)$_REQUEST['rows'] : 15;
$max_words = isset($_REQUEST['max_words']) ? (int)$_REQUEST['max_words'] : 15;
$max_tries = isset($_REQUEST['max_tries']) ? (int)$_REQUEST['max_tries'] : 10; 
$groupid = isset($_REQUEST['groupid']) ? $_REQUEST['groupid'] : 'demo';

$pc = new PHP_Crossword($rows, $cols);

$pc->setGroupID($groupid);
$pc->setMaxWords($max_words);

// UTF-8 encoding
$charset = 'UTF-8';
?>