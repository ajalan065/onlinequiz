<?php 
	session_start();
		$user=$_SESSION['user'];
		$conn=mysql_connect("localhost", "root", "mukti123!");
		mysql_select_db("onlinequiz");
		$qno=mysql_query("SELECT LEVEL FROM participants WHERE USERNAME ='$user'", $conn);
		$qn=mysql_fetch_object($qno);
		$q=$qn->LEVEL;
		$_SESSION['q']=$q;
		echo '
			<html>
				<head>
				<style type="text/css">
					h3
					{
						font-family: Times New Roman;
						font-weight: bold;
						font-size: 8;
					}
				</style>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" href="css/cssonquiz.css">
				</head>
				<body>
				<div class="container">
					<div class="col-md-12">
					<div class="col-md-12">
					<div class="col-md-12">
					<div class="col-md-12">
					<div class="col-md-12">
					<div class="col-md-12">
		';
		echo "<header style='text-align: right;'>". $_SESSION['user']. "&nbsp; &nbsp; &nbsp; &nbsp;<span class='glyphicon glyphicon-off aria-hidden='true''><a href='welcome.html'>LOGOUT</a></span></header>";
		echo "<br /><br /><br /><br /><br /><br /><br />";
		if($q=='1'){
		echo '
		<h3>
		1.	In the periodic table, how many elements are found naturally?<br />
		<pre>	 		(i) 97
			(ii) 102
			(iii) 101
			(iv) 97
		</pre>
		</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
	<br /><br />';
	}
	if($q=='2')
	{
		echo '<h3>
		2.	The outermost layer of sun is called? <br />
		<pre>			(i) Corona
			(ii) Photosphere
			(iii) Granule
			(iv) Chromosphere
		</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
	<br /><br />';
	}
	if($q=='3')
	{
		echo '<h3>
		3.	Arrange these archipelagoes in terms of increasing size:<br /> 
			(a) Carribean Islands (b) Thousand islands  (c)  Japanese Archipelago  (d) Indonesian Archipelago<br />
		<pre>	 		(i) (b)<(c)<(a)<(d)
			(ii) (b)<(a)<(c)<(d)
			(iii) (a)<(b)<(c)<(d)
			(iv) (d)<(a)<(b)<(c)
		</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
	<br /><br />';
	}
	if($q=='4')
	{
		echo '<h3>
		4.	Which gas dissolves under pressure in soda water ?<br /> 
	<pre>		(i)   Oxygen
		(ii)  Carbon Dioxide
		(iii) Helium
		(iv)  Hydrogen
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='5')
	{
	echo '<h3>
	5.	How many stanzas of Rabindranath Tagore’s “Jana Mana Gana” has been adopted as our National Anthem?<br />
	<pre>		(i) Whole poem
		(ii)  1
		(iii) 2
		(iv)  3
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='6')
	{
	echo '<h3>
	6.	What was the first element to be produced artificially? <br />
	<pre>		(i)   Plutonium
		(ii)  Neptunium
		(iii) Technetium
		(iv)  Francium
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='7')
	{
		echo '<h3>
	7.	Who won the Women’s Single Title of Australian Open on 31st January, 2015<br />
	<pre>		(i)	Maria Sharapova
		(ii)	Serena Williams
		(iii)	Martina Navratilova 
		(iv)	Helen Wills Moody
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='8')
	{
		echo '<h3>
	8.	How many toes do most birds have
	<pre>		(i)	4 
		(ii)	6
		(iii)	8
		(iv)	5 
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='9')
	{
		echo '<h3>
	9.	Noble prize except the peace prize is awarded in?
	<pre>		(i)   Oslo
		(ii)  Stockholm
		(iii) London
		(iv)  Zurich
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='10')
	{
		echo '<h3>
	10.	Cricket was brought to India by the Britishers. Can you tell me which is the first All-Indian Cricket Club?
	<pre>		(i) Cricket Club of India (CCI) 
		(ii) Orient Cricket Club
		(iii) Mumbai Cricket Club  
		(iv) Ashwanti Club. 
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='11')
	{
		echo '<h3>
	11.	Sanofi Pasteur is the first pharmaceutical company to issue world’ first _________ vaccine?
	<pre>		(i) TB
		(ii) Dengue
		(iii) Colorectal cancer
		(iv) Smallpox
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='12')
	{
		echo '<h3>
	12.	You have been given two numbers. 0.99999….(infinitely many times 9) and number 1. Which of the following is true.
	<pre>		(i)	0.99999…. is less than 1
		(ii)	Both are equal
		(iii)	0.999…… is greater than 1
		(iv)	Data insufficient
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='13')
	{
		echo '<h3>
	13.	How long does it take for earth to complete one full rotation?
	<pre>		(i)	More than 24 hours
		(ii)	Less than 24 hours
		(iii)	Exactly 24 hours
		(iv)	May vary with season
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='14')
	{
		echo '<h3>
	14.	A wholesale dealer can place 10 small packages or 8 large ones into a carton for distribution. In one shipment, he sends 96 packages. How many cartons did he distribute?
	<pre>		(i)	10
		(ii)	11
		(iii)	12
		(iv)	None of the above
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='15')
	{
	echo '<h3>
	15.	When was barb wire patented? </h3>
	<pre>		(i)	1874
		(ii)	1840
		(iii)	1895
		(iv)	1900

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='16')
	{
	echo '<h3>
	16.	“I wanted to be a bus conductor, but ended up being a cricketer”. Who said this?
	<pre>		(i)	Kapil Dev
		(ii)	M S Dhoni
		(iii)	Sunil Gavaskar
		(iv)	Irfan Pathan
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='17')
	{
	echo '<h3>
	17.	Which country has fifty or more nuclear reactors? 
	<pre>		(i)	France 
		(ii)	Germany  
		(iii)	China 
		(iv)	Japan
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='18')
	{
	echo '<h3>
	18.	Which food is named after a northern German city on the river Elbe?
	<pre>		(i)	Hamburg
		(ii)	Dresben  
		(iii)	Magdeburg
		(iv)	Wittenburg  
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='19')
	{
	echo '<h3>
	19.	In which city was the 1992 Olympics? 
	<pre>		(i)	South Korea
		(ii)	Barcelona
		(iii)	Atlanta
		(iv)	Beijing 
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='20')
	{
	echo '<h3>
	20.	Who did an act of unforgivable sin of kissing the Queen Mother?
	<pre>		(i)	Ronald Reagan
		(ii)	Jimmy Carter
		(iii)	Lyndon Johnson
		(iv)	George W. Bush
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='21')
	{
	echo '<h3>
	21.	This historical constituency of England did not admit any voters. Name the constituency.
	<pre>		(i)	Calder Valley
		(ii)	Birmingham
		(iii)	Aldershot
		(iv)	Old Sarum
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='22')
	{
	echo '<h3>
	22.	With which treaty did World War I end?
	<pre>		(i)	Treaty of Sevres
		(ii)	Treaty of Trianon
		(iii)	Treaty of Versailles
		(iv)	Treaty of Peace 
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='23')
	{
	echo '<h3>
	23.	The velocity of sound is measured in hydrogen and oxygen at a certain temperature. The ratio of the velocities is:
	<pre>		(i)	1:1
		(ii)	1:2
		(iii)	4:1
		(iv)	1:4
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='24')
	{
	echo '<h3>
	24.	Forbes listed around 50+ Indian companies among the 2000 public companies leading the world. Which of these was not listed? 
	<pre>		(i)	HCL Technologies
		(ii)	Jindal Steel Limited
		(iii)	Adani Enterprises
		(iv)	Coal India Limited
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='25')
	{
	echo '<h3>
	25.	The death of this person in 2003 was a topic of great controversy for the British Media. 
	He was an important person in the British Ministry of Defense.
	<pre>		(i)	John Reid
		(ii)	Des Browne
		(iii)	George Robeston
		(iv)	David Kelly
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='26')
	{
	echo '<h3>
	26.	This volcano has an elevation of 1150 meters and it last erupted in 4050BC. Can you guess this volcano?
	<pre>		(i)	Mount Ashitaka
		(ii)	Hohentwiel
		(iii)	Mount Niseko
		(iv)	Mount Buninyong
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='27')
	{
	echo '<h3>
	27.	Which Indian film maker won Magsaysay Award in 1967?
	<pre>		(i)	Mani Ratnam
		(ii)	Satyajit Ray
		(iii)	Kamal Hasan
		(iv)	Shyam Benegal
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='28')
	{
	echo '<h3>
	28.	Who is the youngest ever Academy Award winner?
	<pre>		(i)	Elizabeth Taylor
		(ii)	Audrey Hepburn
		(iii)	Tatum O’ Neal
		(iv)	Anne Pacquin
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='29')
	{
	echo '<h3>
	29.	In which James Bond’s film was there this famous exchange: “You expect me to talk?”. “No Mr. Bond, I expect you to die!”?
	<pre>		(i)	Live and let die
		(ii)	Goldfinger
		(iii)	You only live twice
		(iv)	Skyfall
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='30')
	{
	echo '<h3>
	30.	Tiger Feet was which band’s first number one single, in 1974? 
	<pre>		(i)	Mud 
		(ii)	Queen
		(iii)	Nirvana
		(iv)	U2  
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='31')
	{
	echo '<h3>
	31.	Who is the official supplier of match balls in Indian Super League? 
	<pre>		(i)	Adidas
		(ii)	PUMA
		(iii)	Nike
		(iv)	Longway
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='32')
	{
	echo '<h3>
	32.	This actor pursued film making at the School of Visual Arts & The Lee Strasberg Theatre, following which he assisted Sanjay L 
	Bhansali in Black(2005). He made an acting debut with Bhansali’s movie in 2007 which was a box flop but he was awarded 
	with Filmfare Award for his performance. Identify the actor.
	<pre>		(i)	Ranbir Kapoor
		(ii)	Fawad Khan
		(iii)	Abhishek Bachchan
		(iv)	Akshay Kumar
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='33')
	{
	echo '<h3>
	33.	Which of these films has highest number of songs:
	<pre>		(i)	Neel Kamal
		(ii)	Alam Ara
		(iii)	Indra Sabha
		(iv)	Kishan Kanhaiya
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='34')
	{
	echo '<h3>
	34.	This is the first movie premiered at USA 
	<pre>		(i)	Mother India
		(ii)	Ram Rajya
		(iii)	Maa Tujhe Salam
		(iv)	Amar Jyoti
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='35')
	{
	echo '<h3>
	35.	What colour is the innermost zone in the archery target?
	<pre>		(i)	Green 
		(ii)	Black
		(iii)	Red
		(iv)	Gold 
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='36')
	{
	echo '<h3>
	36.	5+3+2 = 151022<br />
	9+2+4 = 183652<br />
	8+6+3 = 482466<br />
	5+4+5 = 202541<br />
	THEN: <br />
	7+2+5 =?

	<pre>		(i)	143569
		(ii)	143547
		(iii)	143749
		(iv)	143569
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='37')
	{
	echo '<h3>
	37.	A shopkeeper wants to keep all of his apples for sale. 
	But he discovers that one apple is left over when he places them<br /> in groups of three. 
	Same happens for five and seven. Only possible way is to group in 11. <br />
	What are the number of apples.

	<pre>		(i)	950
		(ii)	946
		(iii)	948
		(iv)	848
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='38')
	{
	echo '<h3>
	38.	Which sports and team names is not correctly associated? 
	<pre>		(i)	Cleveland Indians <-> Baseball  
		(ii)	Leicester Tigers <-> Rugby Union
		(iii)	Bradford Bulls <->Rugby Union
		(iv)	Belle Vue Aces <->Poker
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='39')
	{
	echo '<h3>
	39.	Given are some chemical elements which forms a series: H, Be, F, S, Mn, Kr, In, Gd, Tl.<br /> Identify the next element?
	<pre>		(i)	Xe
		(ii)	Fm
		(iii)	Te
		(iv)	Po
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='40')
	{
	echo '<h3>
	40.	A football coaching association was set up in Spain, in place of an old church. Now it is one of the biggest associations
	producing unbeatable players.<br /> Name the Institute.
	<pre>		(i)	Sevilla
		(ii)	Lamacia
		(iii)	Levante
		(iv)	Aspire Academy
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='41')
	{
	echo '<h3>
	41.	With which club is this association related?
	<pre>		(i)	Real Madrid
		(ii)	Granada
		(iii)	Barcelona
		(iv)	Espanyol
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='42')
	{
	echo '<h3>
	42.	Which American was the best paid sportsman in 1920?
	<pre>		(i)	Babe Ruth
		(ii)	Georgia Bonora
		(iii)	Shawn Johnson
		(iv)	Mackayla Maraoney
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='43')
	{
	echo '<h3>
	43.	Where does trees store water?
	<pre>		(i)	Xylem
		(ii)	Phloem
		(iii)	Food tubes
		(iv)	Cambium
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='44')
	{
	echo '<h3>
	44.	How many astronauts were in the shuttle when it was destroyed in 1986?
	<pre>		(i)	7
		(ii)	6
		(iii)	8
		(iv)	10

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='45')
	{
	echo '<h3>
	45.	int x[]={1,4,8,5,1,4}<br />
		int *ptr, y;<br />
		ptr=x+4;<br />
		y=ptr-x;<br />
		What will be the value of y? 
	<pre>		(i)	-3
		(ii)	0
		(iii)	4
		(iv)	5
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='46')
	{
	echo '<h3>
	46.	Which one of the following functions is the correct choice for moving blocks of binary data that <br />
		are of arbitrary size and position in memory?
	<pre>		(i)	memcpy()
		(ii)	memset()
		(iii)	memcat()
		(iv)	memmove()
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='47')
	{
	echo '<h3>
	47.	The efficiency and work ratio of a simple gas turbine cycle are:
	<pre>		(i)	Low
		(ii)	High
		(iii)	Very low
		(iv)	Very high
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='48')
	{
	echo '<h3>
	48.	The distillation carried out in such a way that the liquid with the lowest boiling point is first evaporated and 
	recondensed, <br />then the liquid with the next higher boiling point is then evaporated and recondensed, and so <br />
	on until all the available liquid fuels are separately recovered in the sequence of their <br />
	boiling points. Such a process is called
	<pre>		(i)	Cracking
		(ii)	Carbonisation
		(iii)	Fractional distillation
		(iv)	Full distillation
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='49')
	{
	echo '<h3>
	49.	The transformer that develops the high voltage in a home television is commonly called a...?
	<pre>		(i)	Tesla Coil
		(ii)	Flyback
		(iii)	Van de Graff
		(iv)	Yoke
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='50')
	{
	echo '<h3>
	50.	To prevent a DC return between source and load, it is necessary to use
	<pre>		(i)	resistor between source and load
		(ii)	inductor between source and load
		(iii)	capacitor between source and load
		(iv)	either (i) or (ii)
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='51')
	{
	echo '<h3>
	51.	 Two steel wires of same radius have their lengths in the ratio of 1:2. if they are stretched by the same force, <br />
		then the strains produced in the two wires will be in the ratio of

	<pre>		(i)	1:2
		(ii)	2:1
		(iii)	1:1
		(iv)	1:4
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='52')
	{
	echo '<h3>
	52.	The acceleration due to gravity ‘g’ becomes (g/2) at an elevation of:
	<pre>		(i)	R/2
		(ii)	2R
		(iii)	R/4
		(iv)	4R;<br />where R is the radius of the earth

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='53')
	{
	echo '<h3>
	53.	Which of the following is employed as an Antihistamine?
	<pre>		(i)	Omeprazole
		(ii)	Chloramphenicol
		(iii)	Diphenhydramine
		(iv)	Norethindrone
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='54')
	{
	echo '<h3>
	54.	The new electric railway engines are manufactured at:
	<pre>		(i)	Varanasi
		(ii)	Chittaranjan
		(iii)	Patiala
		(iv)	Chennai
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}if($q=='55')
	{
	echo '<h3>
	55.	Which of the following countries has decided to offer knighthood to Salman Rushdie?
	<pre>		(i)	France
		(ii)	Italy
		(iii)	Germany
		(iv)	UK
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='56')
	{
	echo '<h3>
	56.	The actress who was also a topper of her class and also took part in athletic run representing women. 
	<pre>		(i)	Raveena Tondon 
		(ii)	Zeenat Aman
		(iii)	K Kaur
		(iv)	Hema Malini
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='57')
	{
	echo '<h3>
	57.	Which of these can be used to efficiently increase our data storage?
	<pre>		(i)	graphene
		(ii)	fullerene
		(iii)	Silicon
		(iv)	None of the above
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='58')
	{
	echo '<h3>
	58.	Most recent X Class Solar flare has been rated as:
	<pre>		(i)	X6.2
		(ii)	X2.2
		(iii)	X1.4
		(iv)	X8.5
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='59')
	{
	echo '<h3>
	59.	JAXA found out new technology for wireless energy transfer.It is the use of ____________
	<pre>		(i)	microwaves
		(ii)	radiowaves
		(iii)	infrared
		(iv)	Optical waves.
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='60')
	{
	echo '<h3>
	60.	100 persons forms a circle. Person I starts killing the person next to him,<br />
	and the sword is passed to the third person. The process of <br />
	killing continues till there is only one person left. <br />Find out that lucky guy!!!

	<pre>		(i)	1
		(ii)	73
		(iii)	99
		(iv)	51
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='61')
	{
	echo '<h3>
	61.	Under Akbar, the Mir Bakshi was required to look after:
	<pre>		(i)	Military Affairs
		(ii)	State Treasury
		(iii)	Royal Household
		(iv)	Land Revenue System
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='62')
	{
	echo '<h3>
	62.	A professor in order to check the intelligence of his interviewees, gave them this<br />
		 sequence. 1, 11, 21, 1211, 111221, 312211. Now they were asked to find<br />
		 the next number.<br />
		 Only two of them got it correct. What is the number?

	<pre>		(i)	13112221
		(ii)	12112121
		(iii)	13112112
		(iv)	13111212
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='63')
	{
	echo '<h3>
	63.	Two ladders are placed crossed in an alley. The length of the ladders are : 2 mtrs and <br />
		3 mtrs respectively. Rest of the details are given in the picture. <br />
		What is the width of the alley?

	<pre>		(i)	1.252
		(ii)	1.354
		(iii)	1.231
		(iv)	1.115
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='64')
	{
	echo '<h3>
	64.	Solve this mystery. 9209=3, 8828=6, 2246=2, then what is 1825=?
	<pre>		(i)	6
		(ii)	2
		(iii)	0
		(iv)	4
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='65')
	{
	echo '<h3>
	65.	A cable is 16 metres in length. It is hung between two pillars which are 15 metres above ground.<br />
		At its lowest point, the canble is 7 metres above ground. What is the separation between<br />
		the pillars.

	<pre>		(i)	15
		(ii)	13
		(iii)	10
		(iv)	None of the above

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='66')
	{
	echo '<h3>
	66.	In an interview round, the interviewer inorder to check the cleverness of the other<br />
		side gave this puzzle:<br />
		There are one thousand dummy safes in our bank and one thousand staff of <br />
		our bank. He asks the first staff to go to every locker and open it. Then he has <br />
		the second staff go to every second locker and close it. The third goes to every third<br />
		locker and, if it is closed, he opens it, and if it is open, he closes it. The fourth <br />
		staff does this to every fourth locker, and so on. After the process is completed<br />
		with the thousandth staff, how many safes are open?

	<pre>		(i)	None
		(ii)	30
		(iii)	28
		(iv)	31
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='67')
	{
	echo '<h3>
	67.	Three partners shared the profit in a business in the ratio 5 : 7 : 8. They had partnered for 14<br />
		months, 8 months and 7 months respectively.<br />What was the ratio of their investments?

	<pre>		(i)	5 : 7 : 8
		(ii)	38 : 28 : 21
		(iii)	20 : 49 : 64
		(iv)	None of these
	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='68')
	{
	echo '<h3>
	68.	Given the data that log 27 = 1.431, find the value of log 9 is:
	<pre>		(i)	0.934
		(ii)	0.945
		(iii)	0.954
		(iv)	0.958

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='69')
	{
	echo '<h3>
	69.	Which was the 1st non Test playing country to beat India in an international match?
	<pre>		(i)	Canada
		(ii)	Zimbabwe
		(iii)	Sri Lanka
		(iv)	West Indies

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q=='70')
	{
	echo '<h3>
	70.	The length of the day is determined in:
	<pre>		(i)	Astronomical units
		(ii)	Solar terms
		(iii)	Length of the hours
		(iv)	None of the above

	</pre>
	</h3>
		<form action="scorecalc.php" method="POST">
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="i" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="ii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iii" />
			<input type="submit" class="btn btn-md btn-danger" name="ans" value="iv" />
		</form>
		<br /><br />';
	}
	if($q>='71')
	{
		echo "<script type='text/javascript'>alert('You have successfully completed the quiz');
		alert('You have obtained ". $_SESSION['score']. "');
		window.location.assign('http://www.google.com');
		</script>";
	}
	echo '</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>';
$q+=1;
mysql_query("UPDATE participants SET LEVEL='$q' WHERE USERNAME='$user'");
mysql_close($conn);
date_default_timezone_set("Asia/Kolkata");
echo "<footer style='text-align: right;'>". date('Y.m.d')."&nbsp;&nbsp;". date('h:i:sa'). "</footer>";
?>
