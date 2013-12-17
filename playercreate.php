<?php

$playerid = "232" . rand(100, 999);

$playerfile = "playerfiles/". $playerid . ".txt";

$file = fopen($playerfile, 'w');
fwrite($file, "PlayerID: ".$playerid."\n");
fwrite($file, "Character: ".$_GET['character']."\n");
fclose($file);

$players = fopen("playerfiles/players.txt",'a');
fwrite($players, $playerid . "\n");
fclose($players);

header('Location:http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Connection.php?character='.$_GET['character']."&id=".$playerid);
exit;


?>
