<?php
require 'StopWatch.php';
$stopwatch = new StopWatch;
echo $stopwatch->start();
echo '<br>';
for($i=0 ; $i<200000 ; $i++)
{
    echo $i;
}
echo '<br>';
echo $stopwatch->stop();
echo '<br>';
echo $stopwatch->getElapsedTime();
?>