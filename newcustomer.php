<!DOCTYPE html>
<html>
<head>
	<title>test Page</title>
</head>

<body>


<!DOCTYPE html>
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<html>
	<head>
		<title>FIREWORK DEMO</title>
		<style>
		body	{
			background-color : #001126;
		}
		@keyframes 			firework-animation {
			0% {background-color : #ff8426;}
			25% {background-color : #fffc84;}
			50% {background-color : #ff83f4;}
			75% {background-color : #83b6ff;}
			100% {background-color : #ff8426;}
		}
		@-webkit-keyframes 	firework-animation {
			0% {background-color : #ff8426;}
			25% {background-color : #fffc84;}
			50% {background-color : #ff83f4;}
			75% {background-color : #83b6ff;}
			100% {background-color : #ff8426;}
		}
		@keyframes 			firework-seed-animation	{
			0% {background-color : #ff8426;}
			25% {background-color : #fffc84;}
			100% {background-color : #ff8426;}
		}
		@-webkit-keyframes	firework-seed-animation	{
			0% {background-color : #ff8426;}
			25% {background-color : #fffc84;}
			100% {background-color : #ff8426;}
		}
		@keyframes 			firework-fade-animation {
			0% {opacity : 1;}
			50% {opacity : 1;}
			100% {opacity : 0;}
		}
		@-webkit-keyframes 	firework-fade-animation {
			0% {opacity : 1;}
			50% {opacity : 1;}
			100% {opacity : 0;}
		}
		.fireWorkBatch {
			z-index : 999;
			position: absolute;
			top : 0px;
			left : 0px;
			animation-name : firework-fade-animation;
			animation-timing-function : cubic-bezier(0.5, 0, 1. 1);
			animation-duration : 2.5s;
		}
		.fireWorkParticle {
			z-index : 999;
			position: absolute;
			height : 5px;
			width : 5px;
			border-radius : 2.5px;
			animation-name : firework-animation;
			animation-timing-function : linear;
			animation-duration : 1s;
			animation-iteration-count : infinite;
		}
		.fireWorkSeed {
			z-index : 999;
			position: absolute;
			height : 5px;
			width : 5px;
			border-radius : 5px;
			animation-name : firework-seed-animation;
			animation-timing-function : linear;
			animation-duration : 0.5s;
			animation-iteration-count : infinite;
		}		
		</style>
	</head>
	<body>
		<div id = "board"></div>
		<center>
			<h1><font style = "font-family:impact;color:red;">Succesfully registered<font></h1>
				<h1><font style = "font-family:impact;color:red;">click on screen for fireworks<font></h1>
		</center>
	</body>
	<script>
		var brd = document.createElement("DIV");
		document.body.insertBefore(brd, document.getElementById("board"));

		seeds = [];
		particles = [];

		const fwkPtcIniV = 0.5;
		const fwkSedIniV = 0.5;
		const fwkPtcIniT = 2500;
		const fwkSedIniT = 1000;
		const a = 0.0005;
		const g = 0.0005;
		const v = 0.3;
		const cursorXOffset = 5;
		const cursorYOffset = 0;


		function newFireworkParticle(x, y, angle)
		{
			var fwkPtc = document.createElement("DIV");
			fwkPtc.setAttribute('class', 'fireWorkParticle');
			fwkPtc.time = fwkPtcIniT;
			while(angle > 360)
				angle -= 360;
			while(angle < 0)
				angle += 360;
			fwkPtc.velocity = [];
			if(angle > 270)
			{
				fwkPtc.velocity.x = fwkPtcIniV * Math.sin(angle * Math.PI / 180) * (1 - Math.random() * v);
				fwkPtc.velocity.y = fwkPtcIniV * Math.cos(angle * Math.PI / 180) * (1 - Math.random() * v);
			}
			else if(angle > 180)
			{
				fwkPtc.velocity.x = fwkPtcIniV * Math.sin(angle * Math.PI / 180) * (1 - Math.random() * v);
				fwkPtc.velocity.y = fwkPtcIniV * Math.cos(angle * Math.PI / 180) * (1 - Math.random() * v);
			}
			else if(angle > 90)
			{
				fwkPtc.velocity.x = fwkPtcIniV * Math.sin(angle * Math.PI / 180) * (1 - Math.random() * v);
				fwkPtc.velocity.y = fwkPtcIniV * Math.cos(angle * Math.PI / 180) * (1 - Math.random() * v);
			}
			else
			{
				fwkPtc.velocity.x = fwkPtcIniV * Math.sin(angle * Math.PI / 180) * (1 - Math.random() * v);
				fwkPtc.velocity.y = fwkPtcIniV * Math.cos(angle * Math.PI / 180) * (1 - Math.random() * v);
			}
			fwkPtc.position = [];
			fwkPtc.position.x = x;
			fwkPtc.position.y = y;
			fwkPtc.style.left = fwkPtc.position.x + 'px';
			fwkPtc.style.top = fwkPtc.position.y + 'px';
			if(particles == null)
				particles = [];
			particles.push(fwkPtc);
			return fwkPtc;
		}

		document.addEventListener("click", newFireWorkOnClick);

		function newFireWorkOnClick(event)
		{
			newFireworkSeed(event.pageX - brd.offsetLeft + cursorXOffset, event.pageY - brd.offsetTop + cursorYOffset);
		}

		function newFireworkSeed(x, y)
		{
			var fwkSed = document.createElement("DIV");
			fwkSed.setAttribute('class', 'fireWorkSeed');
			brd.appendChild(fwkSed);
			fwkSed.time = fwkSedIniT;
			fwkSed.velocity = [];
			fwkSed.velocity.x = 0;
			fwkSed.velocity.y = fwkSedIniV;
			fwkSed.position = [];
			fwkSed.position.x = x;
			fwkSed.position.y = y;
			fwkSed.style.left = fwkSed.position.x + 'px';
			fwkSed.style.top = fwkSed.position.y + 'px';
			if(seeds == null)
				seeds = [];
			seeds.push(fwkSed);
			return fwkSed;
		}
		
		function newFireWorkStar(x, y)
		{
			var fwkBch = document.createElement("DIV");
			fwkBch.setAttribute('class', 'fireWorkBatch');
			var a = 0;
			while(a < 360)
			{
				var fwkPtc = newFireworkParticle(x, y, a);
				fwkBch.appendChild(fwkPtc);
				a += 5;
			}
			brd.appendChild(fwkBch);
		}

		var before = Date.now();
		var id = setInterval(frame, 5);
		
		function frame()
		{
			var current = Date.now();
			var deltaTime = current - before;
			before = current;
			for(i in seeds)
			{
				var fwkSed = seeds[i];
				fwkSed.time -= deltaTime;
				if(fwkSed.time > 0)
				{
					fwkSed.velocity.x -= fwkSed.velocity.x * a * deltaTime;
					fwkSed.velocity.y -= g * deltaTime + fwkSed.velocity.y * a * deltaTime;
					fwkSed.position.x += fwkSed.velocity.x * deltaTime;
					fwkSed.position.y -= fwkSed.velocity.y * deltaTime;
					fwkSed.style.left = fwkSed.position.x + 'px';
					fwkSed.style.top = fwkSed.position.y + 'px';
				}
				else
				{
					newFireWorkStar(fwkSed.position.x, fwkSed.position.y);
					fwkSed.parentNode.removeChild(fwkSed);
					seeds.splice(i, 1);
				}
			}
			for(i in particles)
			{
				var fwkPtc = particles[i];
				fwkPtc.time -= deltaTime;
				if(fwkPtc.time > 0)
				{
					fwkPtc.velocity.x -= fwkPtc.velocity.x * a * deltaTime;
					fwkPtc.velocity.y -= g * deltaTime + fwkPtc.velocity.y * a * deltaTime;
					fwkPtc.position.x += fwkPtc.velocity.x * deltaTime;
					fwkPtc.position.y -= fwkPtc.velocity.y * deltaTime;
					fwkPtc.style.left = fwkPtc.position.x + 'px';
					fwkPtc.style.top = fwkPtc.position.y + 'px';
				}
				else
				{
					fwkPtc.parentNode.removeChild(fwkPtc);
					particles.splice(i, 1);
				}
			}
		}
	</script>
</html>



<?php


include "config.php";


if (isset($_POST['Member_Name'])){	

$Mname=$_POST['Member_Name'];
$Mpass=$_POST['Member_Password'];
$email=$_POST['Member_Email'];
$Mage=(int)$_POST['Member_Age'];
//$Mstatue=(int)$_POST['Membership_Status'];
$Madd=$_POST['Member_Address'];





$sql1_statement = "INSERT INTO member (Member_name,Member_pass,email,AGE,M_Address)
					VALUES ('$Mname','$Mpass','$email','$Mage','$Madd')";


$result = mysqli_query($db, $sql1_statement);


if($result!=1)
{


	echo "Tekrar deneyiniz";


}
else
{



	//header ("Location: index.php");


}

 


}

else
{

	echo "The form is not set.";

}


?>

<div align="center">
<form action="index.php" method="POST">
<br />

<button> Return to main page </button>
<br />
</form>
</div>

