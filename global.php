<?php

$X=10;
$Y=20;

function addition()
{
$GLOBALS['Z']=$GLOBALS['X']+$GLOBALS['Y'];
    //$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $Z;
?>
