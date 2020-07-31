<?php

require_once('/opt/kwynn/kwutils.php');

doit();

function doit() {
    kwas(isset($_REQUEST['format']), 'no format sent');
    $f =       $_REQUEST['format'];
    kwas(!preg_match('/^[^A-Za-z- \.-]+$/', $f), 'bad character');
    header('Content-Type: text/plain');
    echo(date($f));
}