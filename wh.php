<!DOCTYPE HTML>
<html>
	<head>
		<title>Whistle!</title>
		<style>
		body {background-image:url('wallpaper.jpg');background-repeat:no-repeat;background-attachment:fixed;background-position:center;background-color:#B5FF6C;}
		table {border:thin cyan ridge;background-color:cyan;}
		td {border:thin lime ridge;background-color:lime;}
		img {width:8%;}
		img.type1 {position:absolute;top:25%;left:1%}
		img.type2 {position:absolute;top:25%;left:10%}
		img.type3 {position:absolute;top:25%;left:20%}
		img.type4 {position:absolute;top:60%}
		img.type5 {position:absolute;top:60%;left:10%}
		img.type6 {position:absolute;top:60%;left:20%;border:thick solid red;}
		img.type7 {width:200px;}
		div {text-align:center;margin-top:0%; margin-left:35%;border:thin white groove;background:white;opacity:0.85;color:blue;font-family:Comic Sans MS;font-weight:bold;}
		</style>
		<script type = "text/javascript">
		function change(which,imgNumber)
		{
			highlight = imgNumber
			document.getElementById("s" + imgNumber).style.border = "thick solid red";
			if (highlight == 1)
			{
				document.getElementById("s2").style.border = "none";
				document.getElementById("s3").style.border = "none";
				document.getElementById("s4").style.border = "none";
				document.getElementById("s5").style.border = "none";
				document.getElementById("s6").style.border = "none";
			}
			if (highlight == 2)
			{
				document.getElementById("s1").style.border = "none";
				document.getElementById("s3").style.border = "none";
				document.getElementById("s4").style.border = "none";
				document.getElementById("s5").style.border = "none";
				document.getElementById("s6").style.border = "none";
			}
			if (highlight == 3)
			{
				document.getElementById("s2").style.border = "none";
				document.getElementById("s1").style.border = "none";
				document.getElementById("s4").style.border = "none";
				document.getElementById("s5").style.border = "none";
				document.getElementById("s6").style.border = "none";
			}
			if (highlight == 4)
			{
				document.getElementById("s2").style.border = "none";
				document.getElementById("s3").style.border = "none";
				document.getElementById("s1").style.border = "none";
				document.getElementById("s5").style.border = "none";
				document.getElementById("s6").style.border = "none";
			}
			if (highlight == 5)
			{
				document.getElementById("s2").style.border = "none";
				document.getElementById("s3").style.border = "none";
				document.getElementById("s4").style.border = "none";
				document.getElementById("s1").style.border = "none";
				document.getElementById("s6").style.border = "none";
			}
			if (highlight == 6)
			{
				document.getElementById("s2").style.border = "none";
				document.getElementById("s3").style.border = "none";
				document.getElementById("s4").style.border = "none";
				document.getElementById("s1").style.border = "none";
				document.getElementById("s5").style.border = "none";
			}
			x = which;
			if (x == 1)
			{
				title.innerHTML = "Sho Kazamatsuri";
				img.src = "WH/SK2.jpg"
				desc.innerHTML = "Sho is the main character of the soccer manga and anime Whistle!. He is a regular of the Josui High soccer varsity team and plays the position of Forward with Shigeki Sato. For a soccer player, Sho is pretty short at 146 cm (4 feet 9 inches), which can be a hindrance, as well as an asset. His jersey number is 9. While not being very good at soccer, Sho has a thirst to improve and never gives up. His determination often inspires the people around him, and is something that even his team captain Mizuno admires. While he's neither the best nor the leader of his soccer team, he is the heart of it.His character has a few quirks. He has an odd habit of slapping his cheeks with both hands to get himself motivated. He also has a very optimistic attitude and is very open-minded to the point that sarcasm and arrogant comments usually don't work on him; rather he takes them literally and usually agrees with the offender, which either annoys or humors them. He can get very angry sometimes and yell at the offender, but often turns embaressed afterwards. As well, sometimes due to late night practices, Sho would fall asleep in class, causing Shigeki to jokingly say that Sho has already given up on school. Shigeki also calls him Pup or Puppy (pochi).";
			}
			if (x == 2)
			{
				title.innerHTML = "Mizuno Tatsuya";
				img.src = "WH/MT.jpg"
				desc.innerHTML = "Tatsuya is a second year student and is also the best player and team captain for Josui Junior High. He became the captain after defeating the former captain (Honma) in a match alongside a bunch of substitutes as he didn't think Honma was serious enough about soccer. Not only is he a talented player, but also an honor student. Tatsuya tutors the novice Sho after being impressed with his determination and hard work. Shigeki calls him Tatsu-bon, which always annoys him. Due to his handsome looks, he has the most fan girls in his school, even gaining the admiration of the opposing schools' girls, though he does prefer to ignore them. Out of all his teammates at his school, Tatsuya is close to Sho and Shigeki. His jersey number is 10.Tatsuya lives with his mom, Mariko Mizuno and his aunts, Takako and Yuriko, in the Mizuno mansion. His parents are divorced. Tatsuya's father is the coach of the Musashinomori soccer team, Josui's rival school. He, Tatsuya, doesn't get along well with his father, however, and has often expressed anger at Coach Kirihara's attempts to control him. Also, it is later revealed that, during his first year, Tatsuya passed Musashinomori's qualifying tests to enter into their school, but rejected the offer due to not wanting to be his father's puppet. Though many consider him to be a cool-headed person with an indifferent look on his face, Tatsuya actually gets very hot-headed when it comes to things involving his father, once even trying to punch Shigeki when the latter said he acted like his father.";
			}
			if (x == 3)
			{
				title.innerHTML = "Satou Shigeki";
				img.src = "WH/SSWH.jpg"
				desc.innerHTML = "Shigeki, or Shige, is a forward specializing in evasion and dodging techniques. He is said to be one of the best players in the school. He quit the soccer club during his first year because the upperclassmen didn't play seriously, so he got bored playing. But after Sho joined the club, he decided it was interesting again and decided to rejoin. Shige is never serious and usually jokes around a lot. He enjoys making-up nicknames for his friends. He often calls Sho pochi ('puppy' or 'pup'), and infuriates his captain by calling him Tatsu-bon. He was initially the goalkeeper of Josui as there was no one else for the job, but was given the forward spot when Daichi came along. He has a thick Kansai-ben accent, and it is later revealed that he ran away from his home in Kyoto when he was young, making him a year older than most of his classmates. He now lives with monks at a shrine. His jersey number is 11.Shigeki got an invitation to go to the Tokyo Senbatsu camp, but Coach Matsushita decided to reject the offer as he didn't feel that Shige was serious enough about soccer. Though he pretended not to care, Shige decided to become a serious soccer player and go for the pros after a talk with his old friend, Naoki. He also went back to visit his mother, back in his hometown. In the anime, since Shigeki finally became serious about soccer, Matsushita gave him a chance to play in the friendly match with the Seoul Senbatsu team. In the manga, which goes on for a bit further than the actual anime, Shigeki decides instead to begin playing soccer in his hometown, Kyoto. He changed his last name to Fujimura, and enrolled as a player from Kansai in the Toresen Tournament, in order to face off against Sho Kazamatsuri, his former teammate.";
			}
			if (x == 4)
			{
				title.innerHTML = "Toshiki Sugama ";
				img.src = "Suugama.jpg"
				desc.innerHTML = "Suga is a volente with Kanto Select. He is an old friend of Kazamatsuri, who plays against him in the first round of the toresen. ";
			}			
			if (x == 5)
			{
				title.innerHTML = "Kazu Kunugi";
				img.src = "Kazu.jpg"
				desc.innerHTML = "Kazu is a goal keeper with the Kyushu district. He claims that he is the number one goal keeper of the generation, ahead of Shibusawa.";
			}
			if (x == 6)
			{
				title.innerHTML = "Whistle!";
				img.src = "WH/Whistle.jpg"
				desc.innerHTML = "Whistle! is about a middle school boy named Sho Kazamatsuri. He transfers from Musashinomori School to Sakura Josui Junior High School for better hopes to make the soccer team, since he never got a game at his old school due to his small stature. Yuko Katori, his teacher, introduces him as a former star of the famed Musashinomori team, causing his classmates to be wrongly ecstatic. Right after that, one of the players, Tatsuya Mizuno, reveals that he was never a regular. In other words, since he never got the chance to play, Sho is a poor player. Sho struggles to improve his skill so he can make the team at his new school and to ignore the drastic disadvantage he has due to his height.";
			}
			
		}
		</script>
	</head>		
	<body>
	<table>
		<tr>
			<td><a href="index.php">Home</a></td>
		</tr>
		<tr>
			<td><a href="plot.php">Plot, Protagonists and Antagonists</a></td>
		</tr>
		<tr>
			<td><a href="es21.php">Eyeshield 21</a></td>
		</tr>
		<tr>
			<td><a href="pot.php">Prince of Tennis</a></td>
		</tr>
		<tr>
			<td><a href="sd.php">Slam Dunk!</a></td>
		</tr>
	</table>
	<div>
	<h1 id = "title">Whistle!</h1>
	<img class = "type7" id = "img" src = "WH/Whistle.jpg"> <br />
	<span id = "description">Whistle! is about a middle school boy named Sho Kazamatsuri. He transfers from Musashinomori School to Sakura Josui Junior High School for better hopes to make the soccer team, since he never got a game at his old school due to his small stature. Yuko Katori, his teacher, introduces him as a former star of the famed Musashinomori team, causing his classmates to be wrongly ecstatic. Right after that, one of the players, Tatsuya Mizuno, reveals that he was never a regular. In other words, since he never got the chance to play, Sho is a poor player. Sho struggles to improve his skill so he can make the team at his new school and to ignore the drastic disadvantage he has due to his height.</span>
	</div>
	<img id ="s1" class = "type1"onclick ="change(1,1);" src = "Sho.jpg">
	<img id ="s2" class = "type2"onclick ="change(2,2);" src = "Mizuno.jpg">
	<img id ="s3" class = "type3"onclick ="change(3,3);" src = "Shige.jpg">
	<br />
	<img id ="s4" class = "type4"onclick ="change(4,4);" src = "Suugama.jpg">	
	<img id ="s5" class = "type5"onclick ="change(5,5);" src = "Kazu.jpg">
	<img id ="s6" class = "type6"onclick ="change(6,6);" src = "plot.jpg">	
		<script type = "text/javascript">
		title = document.getElementById("title")
		desc = document.getElementById("description")
		img = document.getElementById("img")
		</script>
	</body>
</html>