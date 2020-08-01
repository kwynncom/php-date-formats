<?php

require_once('/opt/kwynn/kwutils.php');

doit();

function doit() {
    kwas(isset($_REQUEST['format']), 'no format sent');
    $fs =      $_REQUEST['format'];
    $a = explode(',', $fs);
    $ra = [];
    foreach($a as $f) {    
	kwas(!preg_match('/^[^A-Za-z- \.-]+$/', $f), 'bad character');
	$ra[$f] = date($f);
    }
    
    header('Content-Type: application/json');
    echo(json_encode($ra));
}
