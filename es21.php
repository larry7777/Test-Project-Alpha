<!DOCTYPE HTML>
<html>
	<head>
		<title>Eyeshield 21</title>
		<style>
		body {background-image:url('wallpaper.jpg');background-repeat:no-repeat;background-attachment:fixed;background-position:center;background-color:#B5FF6C;}
		table {border:thin cyan ridge;background-color:cyan;}
		td {border:thin lime ridge;background-color:lime;}
		img {width:8%;}
		img.type1 {position:absolute;top:25%;left:1%}
		img.type2 {position:absolute;top:25%;left:12%}
		img.type3 {position:absolute;top:25%;left:24%}
		img.type4 {position:absolute;top:53%}
		img.type5 {position:absolute;top:53%;left:12%}
		img.type6 {position:absolute;top:53%;left:24%}
		img.type7 {position:absolute;top:78%;border:thick solid red;}
		img.type8 {width:225px;}
		div {text-align:center;margin-top:0%; margin-left:40%;border:thin white groove;background:white;opacity:0.95;color:blue;font-family:Comic Sans MS;font-weight:bold;}
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
			document.getElementById("s7").style.border = "none";
			}
			if (highlight == 2)
			{
			document.getElementById("s1").style.border = "none";
			document.getElementById("s3").style.border = "none";
			document.getElementById("s4").style.border = "none";
			document.getElementById("s5").style.border = "none";
			document.getElementById("s6").style.border = "none";
			document.getElementById("s7").style.border = "none";
			}
			if (highlight == 3)
			{
			document.getElementById("s2").style.border = "none";
			document.getElementById("s1").style.border = "none";
			document.getElementById("s4").style.border = "none";
			document.getElementById("s5").style.border = "none";
			document.getElementById("s6").style.border = "none";
			document.getElementById("s7").style.border = "none";
			}
			if (highlight == 4)
			{
			document.getElementById("s2").style.border = "none";
			document.getElementById("s3").style.border = "none";
			document.getElementById("s1").style.border = "none";
			document.getElementById("s5").style.border = "none";
			document.getElementById("s6").style.border = "none";
			document.getElementById("s7").style.border = "none";
			}
			if (highlight == 5)
			{
			document.getElementById("s2").style.border = "none";
			document.getElementById("s3").style.border = "none";
			document.getElementById("s4").style.border = "none";
			document.getElementById("s1").style.border = "none";
			document.getElementById("s6").style.border = "none";
			document.getElementById("s7").style.border = "none";
			}
			if (highlight == 6)
			{
			document.getElementById("s2").style.border = "none";
			document.getElementById("s3").style.border = "none";
			document.getElementById("s4").style.border = "none";
			document.getElementById("s1").style.border = "none";
			document.getElementById("s5").style.border = "none";
			document.getElementById("s7").style.border = "none";
			}
			if (highlight == 7)
			{
			document.getElementById("s2").style.border = "none";
			document.getElementById("s3").style.border = "none";
			document.getElementById("s4").style.border = "none";
			document.getElementById("s1").style.border = "none";
			document.getElementById("s5").style.border = "none";
			document.getElementById("s6").style.border = "none";
			}
			x = which;
			if (x == 1)
			{
			title.innerHTML = "Sena Kobayakawa";
			img.src = "ES21/SK2.jpg"
			desc.innerHTML = "Sena Kobayakawa is the main character of Eyeshield 21. He is a student at Deimon High School who is forcefully recruited by Yoichi Hiruma to become the running back for the school's American football team, the Deimon Devil Bats. To hide his amazing running ability from the school's other  clubs, Hiruma disguises Sena's identity with a green eyeshield while he plays, and has him use the series eponymous codename Eyeshield 21. For much of the series, this is a secret known only to a very big group of people, before Sena grows more mature and confident in his abilities and eventually discards the disguise (episode 79), throughout the series Sena affirms his position in the team as being the Deimon Devil Bats' unquestioned Ace. His parents are: Shuuma Kobayakawa, an office worker and Mihae Kobayakawa, a housewife.";
			stat1.innerHTML = "Stats";
			stat2.innerHTML = "Jersey: 21<br />40 yard dash: 4.2/4.1 seconds<br />Bench Press: 45 kg<br />Weight: 48 kg<br />Height: 155 cm<br />Position:Running Back/Free Safety";
			}
			if (x == 2)
			{
			title.innerHTML = "Yoichi Hiruma";
			img.src = "ES21/YH2.jpg"
			desc.innerHTML = "Yoichi Hiruma is one of the main characters in the series. He is one of the three founding members of the Deimon Devil Bats along with Kurita and Musashi. He is a high school student of Deimon Private Senior High School, holding the position of quarterback and official tactician for Deimon Devil Bats";
			stat1.innerHTML = "Stats";
			stat2.innerHTML = "Jersey: 1<br />40 Yard Dash: 5.1 seconds<br />Bench Press: 75 Kg<br />Weight: 67 Kg<br />Height: 176 cm<br />Position: Quarterback, Strong Safety, Punter, Placekicker, Holder";
			}
			if (x == 3)
			{
			title.innerHTML = "Ryokan Kurita";
			img.src = "ES21/KR2.jpg"
			desc.innerHTML = "The largest and strongest player in the Deimon Devil Bats, Ryokan Kurita is a kind-hearted individual, and the only thing bigger than his body is his heart.";
			stat1.innerHTML = "Stats";
			stat2.innerHTML = "Jersey: 77<br />40 yard dash: 6.5 seconds<br />Bench Press: 160 kg<br />Height: 195cm<br />Weight: 145 kg <br />Position: Center / Defensive Tackle / Offensive Tackle";
			}
			if (x == 4)
			{
			title.innerHTML = "Takeru Yamato";
			img.src = "ES21/YT2.jpg"
			desc.innerHTML = " Although merely a player for the best team in Kansai, Yamato is in actuality the real and mysterious Eyeshield 21 from Notre Dame that once fought against Kyoshin Poseidon's Shun Kakei who played for Phoenix. He is said to be the perfect runner and has great strength, speed, technique, spin the ball on one finger and even perfect body balance. Basically, he is a fellow perfect player like Shin. In example of this is said by one of his teammates who says that 10 players from the Teikoku 2nd string combined are not even capable of stopping his run. His run was only stopped by Seijuro Shin the Ojo White Knights. In fact his is shown to only really be challenged by his fellow ace, Taka Honjo in all of Teikoku. The original person believed to be this man was Hayato Akaba from the Bando Spiders, but Shun comments that his body type is slightly different from the one he played against. Near the climax of the game against the Hakushu Dinosaurs, Marco reveals that the team that this Eyeshield 21 plays for is Teikoku, shocking both Sena and Shun. With Deimon in the Christmas Bowl, the showdown between him and Sena is now a reality. When Sena, Monta, and Suzuna go to scout Teikoku's football team, he pairs up with Sena against 4th string players to see what Sena was capable of. However, his true goal is to meet someone who can match him to the point of being able to make him use his true style, which has yet to be revealed.";
			stat1.innerHTML = "Stats";
			stat2.innerHTML = "Jersey Number: 21<br />40-yard dash: surpassed 4.2 with Caesar's charge<br />Benchpress: 170kg with Caesar's Charge<br />Height: 190 cm<br />Weight: 79kg<br />Position: Runningback";
			}			
			if (x == 5)
			{
			title.innerHTML = "Patrick (Panther) Spencer";
			img.src = "ES21/PS2.jpg"
			desc.innerHTML = " Panther is a good-natured person who has extraordinary running talents, but has been reduced to being a ball boy, due to Apollo's prejudice. He trains everyday by running across rooftops. Panther's dream is to become a pro NFL player and make money so that his grandmother would no longer have to work. He is also one of the few people who is able to eat his grandmother's horrendous oatmeal recipe. He has always looked up to Apollo despite Apollo's terrible treatment, because Apollo always trained three times as much as anyone, which becomes Panther's work ethic as well. Initially, he wasn't interested in going to Japan since he really wanted to compete against Shin. Then he saw Eyeshield 21's running ability on Hiruma's web video and wanted to run against him. Eventually, he and Sena became good friends and promised to play on equal terms the next time they met on the field, (Sena was nearly at his limit by the time Panther had entered the game).";
			stat1.innerHTML = "Stats";
			stat2.innerHTML = "Jersey Number: 20<br />40-Yard Dash: 4.1 seconds (during the world tournament)<br />Bench Press: 70kgs<br />Height: 6'1<br />Weight: 205 lb<br />Position: Running Back";
			}
			if (x == 6)
			{
			title.innerHTML = "Seijuro Shin";
			img.src = "ES21/SS2	.jpg"
			desc.innerHTML = "Seijuro Shin is one of the star players of the Ojo White Knights, and the ace of the team. Playing the defensive position of linebacker, he is known for his strength, speed, and his famous Spear Tackle. Although later on in the series he also plays offense as a fullback. He is the most prominent rival of the series' main character, Sena Kobayakawa.";
			stat1.innerHTML = "Stats";
			stat2.innerHTML = "Jersey Number: 40<br />40-yard dash: 4.62 seconds (initially), 4.4 (initially), 4.37 seconds (initially), 4.36 seconds, 4.34 seconds, 4.2 seconds (after Tokyo Fall Tournament)<br />Bench Press: 140 kg<br />Height: 175 cm<br />Weight: 71 kg<br />Position: Linebacker / Fullback";
			}
			if (x == 7)
			{
			title.innerHTML = "Eyeshield 21";
			img.src = "ES21/ES21.jpg"
			desc.innerHTML = "The plot of Eyeshield 21 revolves around a physically unassuming and non-assertive boy named Sena Kobayakawa who enters the high school of his choice, Deimon Private Senior High School, where his childhood friend Mamori Anezaki, one year older than Sena, already attends. His only remarkable physical abilities are his running speed, dodging techniques, and intense agility (perfect for football), the result of a school life spent complying with the demands of bullies (later on it is revealed that he went through training with a classmate in elementary school for running), quickly catch the eye of the high school's American football team captain Yoichi Hiruma who then forces Sena to join the team (Deimon Devil Bats) as the running back. To protect his identity (on the premise that other school sports teams will try to recruit Sena upon discovering his athletic skill) Sena is forced to publicly assume the role of team secretary, and enter the field wearing a helmet equipped with a green-tinted eyeshield in order to hide his features under the pseudonym of Eyeshield 21. The makeshift team initially takes part in the Spring football tournament (at the beginning of the Japanese school year) hoping to win with through the strength of their new secret weapon. But the extremely weak team is eliminated early on by the Ojo White Knights, a powerhouse football team. Others see the skill of the current White Knights as having declined from the previous Golden Generation but the team members are trying to prove that they have the ability to surpass their predecessors. It is in this game that Sena meets the man he will acknowledge as his ultimate rival, Seijuro Shin, a talented linebacker.";
			stat1.innerHTML = "";
			stat2.innerHTML = "";
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
			<td><a href="pot.php">Prince of Tennis</a></td>
		</tr>
		<tr>
			<td><a href="sd.php">Slam Dunk!</a></td>
		</tr>
		<tr>
			<td><a href="wh.php">Whistle!</a></td>
		</tr>
	</table>
	<div>
	<h1 id = "title">Eyeshield 21</h1>
	<img class = "type8" id = "img" src = "ES21/ES21.jpg"><br />
	<span id = "description">The plot of Eyeshield 21 revolves around a physically unassuming and non-assertive boy named Sena Kobayakawa who enters the high school of his choice, Deimon Private Senior High School, where his childhood friend Mamori Anezaki, one year older than Sena, already attends. His only remarkable physical abilities are his running speed, dodging techniques, and intense agility (perfect for football), the result of a school life spent complying with the demands of bullies (later on it is revealed that he went through training with a classmate in elementary school for running), quickly catch the eye of the high school's American football team captain Yoichi Hiruma who then forces Sena to join the team (Deimon Devil Bats) as the running back.
To protect his identity (on the premise that other school sports teams will try to recruit Sena upon discovering his athletic skill) Sena is forced to publicly assume the role of team secretary, and enter the field wearing a helmet equipped with a green-tinted eyeshield in order to hide his features under the pseudonym of "Eyeshield 21." The makeshift team initially takes part in the Spring football tournament (at the beginning of the Japanese school year) hoping to win with through the strength of their new "secret weapon." But the extremely weak team is eliminated early on by the Ojo White Knights, a powerhouse football team. Others see the skill of the current White Knights as having declined from the previous "Golden Generation" but the team members are trying to prove that they have the ability to surpass their predecessors. It is in this game that Sena meets the man he will acknowledge as his ultimate rival, Seijuro Shin, a talented linebacker.</span>
	<h2 id = "stat1"></h2>
	<span id = "stat2"></span>
	</div>
	<img id ="s1" class = "type1"onclick ="change(1,1);" src = "sk.jpg">
	<img id ="s2" class = "type2"onclick ="change(2,2);" src = "hy.jpg">
	<img id ="s3" class = "type3"onclick ="change(3,3);" src = "kr.jpg">
	<br />
	<img id ="s4" class = "type4"onclick ="change(4,4);" src = "yt.jpg">
	<img id ="s5" class = "type5"onclick ="change(5,5);" src = "ps.jpg">	
	<img id ="s6" class = "type6"onclick ="change(6,6);" src = "shin.jpg">	
	<br />
	<img id ="s7" class = "type7"onclick ="change(7,7);" src = "plot.jpg">	
		<script type = "text/javascript">
		title = document.getElementById("title")
		desc = document.getElementById("description")
		stat1 = document.getElementById("stat1")
		stat2 = document.getElementById("stat2")
		img = document.getElementById("img")
		</script>
	</body>
</html>