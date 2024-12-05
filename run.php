private function color($text, $color = "default")
{
    $arrayColor = array(
        'grey'         => '1;30',
        'red'         => '1;31',
        'green'     => '1;32',
        'yellow'     => '1;33',
        'blue'         => '1;34',
        'purple'     => '1;35',
        'nevy'         => '1;36',
        'white'     => '1;0',
    );
    return "\033[" . $arrayColor[$color] . "m" . $text . "\033[43dcd9a7-70db-4a1f-b0ae-981daa162054](https://github.com/thaotrong/webscan/tree/2803ba5debdaae1f22af3da54e2c3acbcc902822/Modules%2Fwploit-modules.php?citationMarker=43dcd9a7-70db-4a1f-b0ae-981daa162054 "1")[43dcd9a7-70db-4a1f-b0ae-981daa162054](https://github.com/gasbarengsidoarjo/food169/tree/1bc2375fb4e6a2a0d35d0d7b8f33d50ed8f80af8/function.php?citationMarker=43dcd9a7-70db-4a1f-b0ae-981daa162054 "2")
