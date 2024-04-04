<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista przyjaciół</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<section id="banner">
		<h1>Portal społecznościowy - moje konto</h1>
	</section>
	<section id="main">
		<h2>Moje zainteresowania</h2>
		<ul>
			<li>muzyka</li>
			<li>film</li>
			<li>komputery</li>
		</ul>
		<h2>Moi znajomi</h2>
		<!-- Efekt działania skryptu 1 -->
		<?php
		$id_polaczenia = mysqli_connect("localhost", "root", "", "dane");
		$zapytanie = 'SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 or Hobby_id = 2 or Hobby_id = 6 ';
		$wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);
		// var_dump($wynik_zapytania);
		while($rekord = mysqli_fetch_array($wynik_zapytania)) { 
			echo'<div class="person"';
				echo '<div class ="blok_foto" >';
					// zdjecie
					echo '<img src="' . $rekord['zdjecie'] . '">';
				echo '</div>';
				echo '<div class="opis">';
					echo '<h3>' .$rekord['imie'].' '.$rekord['nazwisko'].  '</h3>';
					echo '<p>' . $rekord['opis']. '</p>';
			echo '</div>';
		}

		mysqli_close($id_polaczenia); 

		?>
	</section>
	<section class="footer">
		Stronę wykonał: 394875938457
	</section>
	<section class="footer">
		<a href="mailto:ja@portal.pl">napisz do mnie</a>
	</section>
</body>
</html>