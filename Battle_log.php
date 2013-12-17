<?php

if(file_exists("gamefiles/gamelog.txt") != true)
{

  $file = fopen("gamefiles/gamelog.txt", 'a');
  fwrite( $file, "The battle has begun \n");
  fclose($file);

 // chmod("gamefiles/gamelog.txt", 777);


  $player = fopen("gamefiles/".$_GET['id'].".txt", 'a');
  fwrite( $player, "100\n" );
  fwrite( $player, "true\n");
  fclose($player);
  
 // chmod("gamefiles/".$_GET['id'].".txt", 777);

  header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Battle.php?character='.$_GET['character'].'&id='.$_GET['id'].'&opp='.$_GET['opp'].'&turn=true');
  exit;
}
else
{

 $player = fopen("gamefiles/".$_GET['id'].".txt", 'a');
 fwrite( $player, "100\n" );
 fwrite( $player, "false\n");    
 fclose($player);

 //chmod("gamefiles/".$_GET['id'].".txt", 777);

 header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Battle.php?character='.$_GET['character'].'&id='.$_GET['id'].'&opp='.$_GET['opp'].'&turn=false');
 exit;

}


?>
