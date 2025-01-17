<?php

include("file1.php");

class user extends details
{

    public function data()
    {
        $result = $this->test();
        echo "hello user $result","\n";
    }

    function test () {
        return 1 + 1;
    }
}

$darvin = new user();

$darvin->data();
echo "darvin";
// echo $name;