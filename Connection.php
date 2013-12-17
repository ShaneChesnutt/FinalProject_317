<html>
<head>
<title>RPG Battle: Connection</title>
<script>
</script>
</head>
<body style="background-color:#021d39">

<div style="background-color:#02366a;
            border-style:groove;
            border-width:10">
    
<h1 align="center">Player Connection</h1>
</div>
<br>
<div style="background-color:777777;
            width:49.2%;
            height:80%;
            border-style:double;
            border-width:5;
            float:left">
    
Player 1
<?php

if(isset($_GET['character']))
{

  print "<br><br>";
  print "-------------------------------------------------------<br><br>";

  $characterfile = "characters/" . $_GET['character'] . ".txt";

  $file = file($characterfile);

  foreach ($file as &$line)
  {

    print $line . "<br>";

  }

}


?>
</div>
<div style="background-color:AAAAAA;
            width:49.2%;
            height:80%;
            border-style:double;
            border-width:5;
            float:left"
     onload="setTimeout(function(){},3000)">

Player 2
<?php

if(isset($_GET['opp']))
{
  if($_GET['opp'] != $_GET['id'])
  {
    print "Player Found";
    
    print "Session Beginning";

    print "<script>";
    print "alert('Playerfound Let the match begin')";
    print "</script>";
    
    header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Battle_log.php?character='.$_GET['character'].'&id='.$_GET['id'].'&opp='.$_GET['opp']);
    exit; 
    
  }
}
else
{
 print "Searching...<br><br>";

 print "<script>";
 print "alert('Searching for player please refresh page')";
 print "</script>";

 $players = file("playerfiles/players.txt", FILE_IGNORE_NEW_LINES );

 foreach($players as &$player)
 {
  //print $player . "<br>";

  if($player != $_GET['id'])
  {
   header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Connection.php?character='.$_GET['character'].'&id='.$_GET['id'].'&opp='.$player);
   exit;
  }


 }
 
}

?>
</div>
</body>
</html>
