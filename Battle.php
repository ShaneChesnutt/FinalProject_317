<html>
<head>
<title>RPG Battle: Battle</title>
<script>

function attack(playerid, oppid)
{

  window.location="Attack.php?id=" + playerid  + "&opp=" + oppid

}

function reload(turn, playerid, oppid)
{
  window.location="Reload.php?turn=" + turn +"&id=" + playerid + "&opp=" + oppid
}

</script>
</head>
<body style="background-color:#021d39">

<div style="background-color:#02366a;
            border-style:groove;
            border-width:10">
    
<h1 align="center">Battle</h1>
</div>
<br>
<div style="background-color:777777;
            width:32.5%;
            height:80%;
            border-style:double;
            border-width:5;
            float:left">
    
<b>Player 1</b>

<?php

$playerfile = file("gamefiles/".$_GET['id'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

print "<br><br><b>Health: ".$playerfile[count($playerfile) - 2]."</b><br><br>";
print "<b>Your Turn: ".$playerfile[count($playerfile) - 1]."</b><br>";

if(isset($_GET['character']))
{

  print "<br>";
  print "-------------------------------------------------------<br><br>";

  $characterfile = "characters/" . $_GET['character'] . ".txt";

  $file = file($characterfile);

  foreach ($file as &$line)
  {

    print $line . "<br>";

  }

}

if($playerfile[count($playerfile) - 1] == "true")
{

  print "<br><button onclick='attack(".$_GET['id'].", ".$_GET['opp'].")' style='width:100;border-style:groove;border-width:5'>Attack</button>";

}
else
{

  //$pturn = file("gamefiles/".$_GET['id'].".txt", FILE_IGNORE_NEW_LINES);

  //print "<br><button onclick='reload(".$_GET['turn'].", ".$_GET['id'].", ".$_GET['opp'].")' style='width:100;border-style:groove;border-width:5'>Check Turn</button>";
}

if(intval($playerfile[count($playerfile) - 2]) < 0)
{

  header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Gameover.php?victory=Lose');
  exit;

}


?>


</div>
<div style="background-color:AAAAAA;
            width:32.5%;
            height:80%;
            border-style:double;
            border-width:5;
            float:left">
    
Battle Log

<?php

$game = file("gamefiles/gamelog.txt", FILE_IGNORE_NEW_LINES);

print "<br><br>";

 foreach ($game as &$line)
  {
    print $line . "<br>";
  }



?>



</div>

<div style="background-color:777777;
            width:32.5%;
            height:80%;
            border-style:double;
            border-width:5;
            float:left">
    
<b>Player 2</b>

<?php

if(file_exists("gamefiles/".$_GET['opp'].".txt"))
{

 $oppfile = file("gamefiles/".$_GET['opp'].".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

 print "<br><br><b>Health: ".$oppfile[count($oppfile) - 2]."</b><br>";
 print "<br><b>Opponent Turn: " .$oppfile[count($oppfile) - 1]."</b><br>"; 



if(intval($oppfile[count($oppfile) - 2]) < 0)
{

  header('Location: http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/Gameover.php?victory=Win');
  exit;

}
}

if(isset($_GET['opp']))
{

  print "<br>";
  print "-------------------------------------------------------<br><br>";

  $player = "playerfiles/" . $_GET['opp'] . ".txt";

  $file = file($player, FILE_IGNORE_NEW_LINES);

  $file = explode(" ", $file[1]);

  $oppchar = "characters/" . $file[1] .".txt";

  $character = file($oppchar);

  foreach ($character as &$line)
  {

    print $line . "<br>";

  }




}
?>


</div>
    
</body>
</html>
