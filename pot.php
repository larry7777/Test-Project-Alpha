<!DOCTYPE HTML>
<html>
	<head>
		<title>Prince of Tennis!</title>
		<style>
		body {background-image:url('wallpaper.jpg');background-repeat:no-repeat;background-attachment:fixed;background-position:center;background-color:#B5FF6C;}
		table {border:thin cyan ridge;background-color:cyan;height:20%}
		td {border:thin lime ridge;background-color:lime;}
		img {width:8%;}
		div {text-align:center;margin-top:0%;margin-left:40%;border:thin white groove;background:white;opacity:0.95;color:blue;font-family:Comic Sans MS;font-weight:bold;}
		img.type1 {position:absolute;top:20%;left:2%;}
		img.type2 {position:absolute;top:45%;left:2%;}
		img.type3 {position:absolute;top:45%;left:12%}
		img.type4 {position:absolute;top:75%;left:2%;}
		img.type5 {position:absolute;top:75%;left:12%}
		img.type6 {position:absolute;top:75%;left:22%;border:thick solid red;}
		img.type7 {width:400px;}
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
			x = which
			if (x == 1)
			{
			title.innerHTML = "Ryoma Echizen";
			img.src = "POT/RE2.jpg"
			desc.innerHTML = "Ryoma Echizen is a fictional character and the main protagonist of the manga and anime series The Prince of Tennis created by Takeshi Konomi. Ryoma is a first year student at Seishun Academy ('Seigaku' for short), which he attends immediately after his arrival in Japan after formerly residing in the United States. Although only a first year in middle school, Ryoma had already earned notoriety through winning four consecutive titles in the American Junior Tennis tournaments – all in a little over a year. Due to his nearly invincible tennis play, Ryoma has earned the label 'prodigy' by the age of twelve. His good looks and confidence make him highly popular with ladies, although he seems not to notice, having his focus exclusively on tennis.";
			}
			if (x == 2)
			{
			title.innerHTML = "Kintaro Toyama";
			img.src = "POT/TK2.jpg"
			desc.innerHTML = "While Echizen Ryoma commanded the headlines at the Kanto Tournament by conquering the Emperor Sanada Genichiro, Toyama was creating his own waves at the Kansai Tournament, annihilating the region's best players.  Heading to Tokyo for the Nationals, he got off the train in Shizuoka, mistaken that Fujisan was located in Tokyo. Toyama probably doesn't receive high marks in his academics. Kanji is not his strong point either, mispronouncing Echizen's name Koshimae. During his detour through Shizuoka and Hakone, Toyama met a traveling buddy, Horio Junpei, a 21-year-old with two years of bicycling experience.";
			}
			if (x == 3)
			{
			title.innerHTML = "Keigo Atobe";
			img.src = "POT/KA2.jpg"
			desc.innerHTML = "Atobe is the captain of Hyotei, having defeated all of the members of the team during his first year. Along with Kunimitsu Tezuka of Seigaku, Kippei Tachibana of Fudomine, Genichiro Sanada and Seiichi Yukimura of Rikkaidai, Atobe is a Zenkoku ku, which means a national level player. He defeated Seigaku's captain in his second year, a favor returned when Tezuka then beat Hyotei's captain at the time. He is the son of a very rich family. He has rivalries with Tezuka, who he defeats in the Kanto Tournament, Sanada, who he comes close to defeating in a practice match before it is called off, and Ryoma, who defeats Atobe in the nationals. Hyotei is one of the few schools in the series without a vice-captain, an indication of both Atobe's skill and leadership. There are several facts that may suggest Atobe is not entirely Japanese. He apparently grew up overseas, attending primary school in Britain along with Kabaji. Aside from his tennis club captaincy, Atobe is also student body president. He enjoys all subjects, especially Greek, and is a fan of the poetry of Goethe and Homer. It is also implied that he has an appreciation for classical composers such as Richard Wagner.";
			}
			if (x == 4)
			{
			title.innerHTML = "Genichiro Sanada";
			img.src = "POT/GS2.jpg"
			desc.innerHTML = "Gen'ichiro Sanada, also known as The Emperor, is the strict vice-captain (and temporarily captain) of Rikkai Daigaku Fuzoku. Sanada, along with fellow teammates Yukimura Seiichi and Yanagi Renji, have led their team to the Nationals from their first year. Together, the three Rikkai members are known as The Three Demons of Rikkai. (Sannin Bakemono in Japanese)";
			}			
			if (x == 5)
			{
			title.innerHTML = "Seiichi Yukimura";
			img.src = "POT/YS2.jpg"
			desc.innerHTML = "Yukimura Seiichi is the team captain of Rikkai Dai Tennis Club. He is known as one of the Big Three, with the other two being Genichiro Sanada (The Emperor) and Yanagi Renji (The Master). Yukimura is one of the characters mentioned and shown earlier on in the series, but does not show his true strength until near the end of the original series. He had been a Rikkai Dai regular since his first year along with Yanagi and Genichiro Sanada. Yukimura is known as The Child of God due to his play style and the fact that he has never lost or dropped a single game before his Nationals Finals match against Echizen Ryoma (who beats him 6-4 after achieving Teni Muhou No Kiwami). He is hospitalized for much of the season due to a neurological disease (the most probable disease is the Guillain-Barré Syndrome, a neurological disease that causes paralysis in the limbs). The surgery he must undergo to cure it only has a fifty percent survival rate. Nonetheless, he takes the chance and survives.";
			}
			if (x == 6)
			{
			title.innerHTML = "Prince of Tennis";
			img.src = "POT/POT.jpg"
			desc.innerHTML = "The story itself is about a 12-year old boy named Ryoma Echizen, who is a tennis genius. He has won 4 tournaments in the US and returned to his homeland in Japan to attend Seishun Academy and find out what tennis means to him.";
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
			<td><a href="sd.php">Slam Dunk!</a></td>
		</tr>
		<tr>
			<td><a href="wh.php">Whistle!</a></td>
		</tr>
	</table>
	<div>
	<h1 id = "title">Prince of Tennis</h1>
	<img class = "type7" id = "img" src = "POT/POT.jpg"> <br />
	<span id = "description">The story itself is about a 12-year old boy named Ryoma Echizen, who is a tennis genius. He has won 4 tournaments in the US and returned to his homeland in Japan to attend Seishun Academy and find out what tennis means to him.</span>
	</div>
	<img id ="s1" class = "type1" onclick ="change(1,1);"src = "RE.jpg">
	<br />
	<img id ="s2" class = "type2" onclick ="change(2,2);" src = "TK.jpg">
	<img id ="s3" class = "type3" onclick ="change(3,3);" src = "KA.jpg">
	<br />
	<img id ="s4" class = "type4" onclick ="change(4,4);" src = "GS.jpg">
	<img id ="s5" class = "type5" onclick ="change(5,5);" src = "YS.jpg">
	<img id ="s6" class = "type6" onclick ="change(6,6);" src = "plot.jpg">	
		<script type = "text/javascript">
		title = document.getElementById("title")
		desc = document.getElementById("description")
		img = document.getElementById("img")
		</script>
	</body>
</html>