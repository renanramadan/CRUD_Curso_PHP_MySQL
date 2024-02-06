<?php
date_default_timezone_set('America/New_York');

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now: '        . date('d-m-Y') . "\n";
echo 'Next Week: '  . date('d-m-Y', $nextWeek) ."\n";

echo("=====\n");

$now = new DateTime();
$nextWeek = new DateTime('today +1 week');
echo 'Now: '.       $now->format('d-m-Y') ."\n";
echo 'Next Week: '. $nextWeek->format('d-m-Y') ."\n";