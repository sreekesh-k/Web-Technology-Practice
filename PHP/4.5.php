<?php
$globalVar = "I am a global variable";

function test()
{
    global $globalVar;
    echo $globalVar;
}

test();
