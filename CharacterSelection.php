<html>
<head>
<title>RPG Battle: Character Selection</title>
</head>
<body style="background-color:#021d39">  

<div style="background-color:#02366a;
            border-style:groove;
            border-width:10">
    
<h1 align="center">Character Selection</h1>
</div>
<br>
<div style="background-color:777777;
            width:32.5%;
            height:40%;
            border-style:double;
            border-width:5;
            float:left;"
     id="warrior">
    
<b>Warrior</b>
<br><br>    
Name: Erasmus
<br><br>
<b>Stats:</b>
<br>
Strength: 25
<br>
Dexterity: 10
<br>
Constitution: 15
<br>
Willpower: 0
<br>
Attack: 30
<br>
Defense: 20
<br><br>
<b>Perks:</b> Powerful Attacks
</div>

<div style="background-color:777777;
            width:32.5%;
            height:40%;
            border-style:double;
            border-width:5;
            float:left;"
     id="archer">
    
<b>Archer</b>
<br><br>    
Name: Avelina
<br><br>
<b>Stats:</b>
<br>
Strength: 10
<br>
Dexterity: 30
<br>
Constitution: 10
<br>
Willpower: 0
<br>
Attack: 20
<br>
Defense: 15
<br><br>
<b>Perks:</b> Accuracy and Dodging

</div> 

<div style="background-color:777777;
            width:32.5%;
            height:40%;
            border-style:double;
            border-width:5;
            float:left;"
     id="wizard">
    
<b>Wizard</b>
<br><br>    
Name: Severinus
<br><br>
<b>Stats:</b>
<br>
Strength: 0
<br>
Dexterity: 5
<br>
Constitution: 15
<br>
Willpower: 30
<br>
Attack: 30
<br>
Defense: 30
<br><br>
<b>Perks:</b> Powerful Magic Attacks

</div> 

<div style="background-color:777777;
            width:32.5%;
            height:40%;
            border-style:double;
            border-width:5;
            float:left;"
     id="battlemage">
    
<b>Battlemage</b>
<br><br>    
Name: Xander
<br><br>
<b>Stats:</b>
<br>
Strength: 15
<br>
Dexterity: 10
<br>
Constitution: 10
<br>
Willpower: 15
<br>
Attack: 30
<br>
Defense: 30
<br><br>
<b>Perks:</b> Magic and Physical Attacks
</div> 

<div style="background-color:777777;
            width:32.5%;
            height:40%;
            border-style:double;
            border-width:5;
            float:left;"
     id="rogue">
    
<b>Rogue</b>
<br><br>    
Name: Barric 
<br><br>
<b>Stats:</b>
<br>
Strength: 15
<br>
Dexterity: 20
<br>
Constitution: 15
<br>
Willpower: 0
<br>
Attack: 30
<br>
Defense: 30
<br><br>
<b>Perks:</b> Dodging and Accurate Attacks

</div> 

<div style="background-color:777777;
            width:32.5%;
            height:40%;
            border-style:double;
            border-width:5;
            float:left;"
     id="knight">
    
<b>Knight</b>
<br><br>    
Name: Chronus
<br><br>
<b>Stats:</b>
<br>
Strength: 20
<br>
Dexterity: 5
<br>
Constitution: 25
<br>
Willpower: 0
<br>
Attack: 30
<br>
Defense: 30
<br><br>
<b>Perks:</b> Great Defense

</div>     

</body>
<script>
warrior = document.getElementById("warrior")
warrior.addEventListener("click", send)
warrior.addEventListener("mouseover", highlight)
warrior.addEventListener("mouseout", dehighlight)

archer = document.getElementById("archer")
archer.addEventListener("click", send)
archer.addEventListener("mouseover", highlight)
archer.addEventListener("mouseout", dehighlight)

wizard = document.getElementById("wizard")
wizard.addEventListener("click", send)
wizard.addEventListener("mouseover", highlight)
wizard.addEventListener("mouseout", dehighlight)

mage = document.getElementById("battlemage")
mage.addEventListener("click", send)
mage.addEventListener("mouseover", highlight)
mage.addEventListener("mouseout", dehighlight)

rogue = document.getElementById("rogue")
rogue.addEventListener("click", send)
rogue.addEventListener("mouseover", highlight)
rogue.addEventListener("mouseout", dehighlight)

knight = document.getElementById("knight")
knight.addEventListener("click", send)
knight.addEventListener("mouseover", highlight)
knight.addEventListener("mouseout", dehighlight)

function send(e)
{
   var url = 'http://cs.sru.edu/~sac7134/Cpsc317/Final_Project/playercreate.php?character=' + this.getAttribute("id")

	window.location = url 
}

function highlight(e)
{
    this.setAttribute("style", "background-color:777777;width:32.5%;height:40%;border-style:double;border-width:5;float:left;border-color:white")
}
    
function dehighlight(e)
{
    this.setAttribute("style", "background-color:777777;width:32.5%;height:40%;border-style:double;border-width:5;float:left;border-color:black")
}
    
</script>    

</html>
