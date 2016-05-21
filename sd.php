<!DOCTYPE HTML>
<html>
	<head>
		<title>Slam Dunk!</title>
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
		img.type7 {position:absolute;top:80%;border:thick solid red;}
		img.type8 {width:400px;}
		div {text-align:center;margin-top:0%; margin-left:35%;border:thin white groove;background:white;opacity:0.95;color:blue;font-family:Comic Sans MS;font-weight:bold;}
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
			title.innerHTML = "Sakuragi Hanamichi";
			img.src = "SLAMDUNK/SH2.jpg"
			desc.innerHTML = "Hanamichi Sakuragi is the main character of Slam Dunk series. At the beginning of the series, Sakuragi is a slacker, good for nothing other than fighting. He is the leader of the feared Sakuragi Legion, which consists of his four friends Mito, Noma, Ohkusu and Takamiya. Sakuragi's quest for love is nothing but humiliating. He is always trying to ask girls out, but is rejected constantly, the fiftieth rejection occurring at the start of the series. He then met Haruko Akagi, a lovely and friendly basketball fangirl, whom he fell in love with, immediately. This and Haruko's encouragement led to him to join the Shohoku basketball team. However, as a complete beginner, he is not able to keep up with the rest of the team at first, despite his physical attributes (great height, athleticism, stamina, speed and leaping ability). In spite of the setbacks he has had to face, Sakuragi displays a great deal of tenacity and determination that carry him through and help reciprocate for his other failings, both on and off the court. Although his love for Haruko and rivalry with Rukawa are the main driving forces motivating him to succeed in basketball, his injury during the Sannoh match makes him realize that he has actually come to love the game, leading him to give his all for his team and bring them victory.";
			}
			if (x == 2)
			{
			title.innerHTML = "Rukawa Kaede";
			img.src = "SLAMDUNK/RK2.jpg"
			desc.innerHTML = "Rukawa Kaede is, in many ways, the opposite of Sakuragi - attractive to girls, skilled at basketball, and very cold and unfeeling. The only traits they share are that they are not academically inclined and good fighters. He regards Sakuragi as an idiot, and is not shy about calling him an idiot to his face - actually, he knows Sakuragi can put his talents to a better use, but is ashamed to see the immaturity with which he deals with things. His hobby is sleeping, and is usually seen asleep whenever he's not on the court; he can even ride his bike while asleep. Waking Rukawa from a nap is considered unforgivable, since he will almost automatically beat up the culprit. Unsurprisingly, he has also been in his fair share of off-court fights, but can hold his own. Rukawa's goal is to be the best high school player in Japan, and he considers Sendoh of Ryonan to be his greatest rival.";
			}
			if (x == 3)
			{
			title.innerHTML = "Takenori Akagi";
			img.src = "SLAMDUNK/TA2.jpg"
			desc.innerHTML = "Takenori Akagi is the captain of the Shohoku basketball team and Haruko's older brother. Despite at first not thinking too much of Sakuragi (who addresses him as Gori for gorilla due to his immense physical presence), he actually realizes Sakuragi's potential as a basketball player. Serious and disciplined, Akagi's dream is to lead Shohoku to the national championship. His determination is shown in the match against Kainan, where he played on despite a serious injury to his ankle. Akagi considers Uozumi of Ryonan to be his rival, though their rivalry is not antagonistic; indeed, there is respect that borders on friendship. Regarded as the best center in the Kanagawa Prefecture, Akagi plays as a fairly typical center, using his height and power to score close to the basket. He also has a reputation for being a virtually unbeatable defender.";
			}
			if (x == 4)
			{
			title.innerHTML = "Akira Sendoh";
			img.src = "SLAMDUNK/AS2.jpg"
			desc.innerHTML = "Akira Sendoh is Ryonan's ace and is considered one of the top players in Kanagawa. An easygoing person, Sendoh usually has a smile on his face whether on-court or off. He can be lazy at times and has a reputation for arriving late to practice sessions and matches. His tardiness is tolerated though, because of his abilities. One of his hobbies is fishing, and he has a taste for lemons. His teammates trust him wholeheartedly, firmly believing that he can lead Ryonan to victory even if they are trailing. However he was outplayed by Eiji Sawakita back in junior high.";
			}			
			if (x == 5)
			{
			title.innerHTML = "Eiji Sawakita";
			img.src = "SLAMDUNK/TS.jpg"
			desc.innerHTML = "Eiji Sawakita is considered Japan's No.1 High School Player, and is the ace of Sannoh. Unlike many other characters who are extremely skilled as he is, he has a goofy attitude sometimes, and has comical moments of extreme shock when an opponent does something impressive. It was known that the high profile player, like Rukawa, has many fangirls that sends him fan mails. Masashi, on the other hand, has none and picks on Eiji because of this. Sawakita plans to go to America following the summer's Interhigh Tournament.";
			}
			if (x == 6)
			{
			title.innerHTML = "Masashi Kawata";
			img.src = "SLAMDUNK/TS.jpg"
			desc.innerHTML = "He is the center of the Sannoh Industry Affiliated High School team and is also known as Japan's #1 Center. He started out as a small forward but as he grew he claimed the center position. He now stand 190 cm in his 3rd year.";
			}
			if (x == 7)
			{
			title.innerHTML = "Slam Dunk";
			img.src = "SLAMDUNK/SD.jpg"
			desc.innerHTML = "Slam Dunk centers around Hanamichi Sakuragi, who starts as a delinquent outcast, becoming the leader of a gang. Hanamichi, being very unpopular with girls, has been rejected by them fifty times. Yet, he finds out that Haruko Akagi is the girl of his dreams, and is happy when she's not scared of him like all the other girls he has asked out. Haruko Akagi, who recognizes Hanamichi's athleticism, introduces him to the Shohoku basketball team. Hanamichi was reluctant to join the team at first because he had no previous background in any sports and thought that basketball was a game for losers (also because the fiftieth girl rejected him for a basketball player). Sakuragi, despite his immaturity and hot temper, proves to be a natural athlete with potential and joins the team in order to impress Haruko and prove that he is worthy of her. Kaede Rukawa — Sakuragi's bitter rival (both on the basketball court and love, even when Rukawa doesn't acknowledge Haruko's crush on him), the star rookie and a girl magnet - joins the team at the same time. Hisashi Mitsui, an ex-junior high school MVP (Most Valuable Player), and Ryota Miyagi, a short but fast player, both also rejoin the team and together these four struggle to complete team captain Takenori Akagi's dream of making Shohoku the national champion. Together, these misfits gain publicity and the once little known Shohoku basketball team becomes an all-star contender in Japan.";
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
			<td><a href="wh.php">Whistle!</a></td>
		</tr>
	</table>
	<div>
	<h1 id = "title">Slam Dunk!</h1>
	<img class = "type8" id = "img" src = "SLAMDUNK/SD.jpg"><br />
	<span id = "description">Slam Dunk centers around Hanamichi Sakuragi, who starts as a delinquent outcast, becoming the leader of a gang. Hanamichi, being very unpopular with girls, has been rejected by them fifty times. Yet, he finds out that Haruko Akagi is the girl of his dreams, and is happy when she's not scared of him like all the other girls he has asked out. Haruko Akagi, who recognizes Hanamichi's athleticism, introduces him to the Shohoku basketball team. Hanamichi was reluctant to join the team at first because he had no previous background in any sports and thought that basketball was a game for losers (also because the fiftieth girl rejected him for a basketball player). Sakuragi, despite his immaturity and hot temper, proves to be a natural athlete with potential and joins the team in order to impress Haruko and prove that he is worthy of her. Kaede Rukawa — Sakuragi's bitter rival (both on the basketball court and love, even when Rukawa doesn't acknowledge Haruko's crush on him), the star rookie and a "girl magnet" - joins the team at the same time. Hisashi Mitsui, an ex-junior high school MVP (Most Valuable Player), and Ryota Miyagi, a short but fast player, both also rejoin the team and together these four struggle to complete team captain Takenori Akagi's dream of making Shohoku the national champion. Together, these misfits gain publicity and the once little known Shohoku basketball team becomes an all-star contender in Japan.</span>
	</div>
	<img  id ="s1" class = "type1" onclick ="change(1,1);" src = "SH.jpg">
	<img  id ="s2" class = "type2" onclick ="change(2,2);" src = "RK.jpg">
	<img  id ="s3" class = "type3" onclick ="change(3,3);" src = "Gori.jpg">
	<br />
	<img  id ="s4" class = "type4" onclick ="change(4,4);" src = "AS.jpg">	
	<img  id ="s5" class = "type5" onclick ="change(5,5);" src = "ES.jpg">
	<img  id ="s6" class = "type6" onclick ="change(6,6);" src = "MK.jpg">
	<br />
	<img  id ="s7" class = "type7 "onclick ="change(7,7);" src = "plot.jpg">	
		<script type = "text/javascript">
		title = document.getElementById("title")
		desc = document.getElementById("description")
		img = document.getElementById("img")
		</script>
	</body>
</html>