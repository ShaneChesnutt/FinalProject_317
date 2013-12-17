<?php

$attack = rand(1,30);

$player = file("gamefiles/".$_GET['id'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$character = file("playerfiles/".$_GET['id'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$opp = file("gamefiles/".$_GET['opp'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$oppcharacter = file("playerfiles/".$_GET['opp'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$character = explode(" ", $character[1]);
$oppcharacter = explode(" ", $oppcharacter[1]);

$health = intval($opp[count($opp) - 2]) - $attack;

$file = fopen("gamefiles/".$_GET['opp'].".txt", 'a');
fwrite($file, $health."\ntrue\n");
//fwrite($file, "true\n" );
fclose($file);

$update = fopen("gamefiles/".$_GET['id'].".txt", 'a');
fwrite($update, $player[count($player) - 2]."\nfalse\n");
//fwrite($update, "false\n");
fclose($update);

$player = file("gamefiles/".$_GET['id'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$opp = file("gamefiles/".$_GET['opp'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$message = $character[1]. " does " . $attack . " damage to ".$oppcharacter[1] ." HP: ". $opp[count($opp) - 2];
	
$log = fopen("gamefiles/gamelog.txt", 'a');
fwrite($log, $message . "\n");
fclose($log);

print_r($player);
print "<br>";
print_r($opp);
print "<br>";
print $character[1];


header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Battle.php?character='.$character[1].'&id='.$_GET['id'].'&opp='.$_GET['opp']);
exit;



?>
