<?php
switch($_GET['lang']) {
	case 'fr':
		$lng = 1;
		break;
	case 'sp':
		$lng = 2;
		break;
	default:
		$lng = 0;
}

$hello = array('Hello World!', 'Bonjour Monde!', '&iexcl;Hola Mundo!');
$gettysburg = array('<p>Four score and seven years ago, our fathers brought forth upon this continent a new nation:  conceived in liberty, and dedicated to the proposition that all men are created equal.</p>Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated can long endure.  We are met on a great battlefield of that war.</p><p>We have come to dedicate a portion of that field as a final resting place for those who here gave their lives that this nation might live. It is altogether fitting and proper that we should do this.</p><p>But, in a larger sense, we cannot dedicate, we cannot consecrate, we cannot hallow this ground.  The brave men, living and dead, who struggled here have consecrated it, far above our poor power to add or detract.  The world will little note, nor long remember, what we say here, but it can never forget what they did here.</p><p>It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us, that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion, that we here highly resolve that these dead shall not have died in vain, that this nation, under God, shall have a new birth of freedom, and that government of the people, by the people, for the people, shall not perish from this earth.</p>', 
'<p>Quatre points et il y a sept ans, nos p&egrave;res ont apport&eacute; sur ce continent une nouvelle nation : con&ccedil;u dans la libert&eacute;, et consacr&eacute; &agrave; la proposition que tous les hommes sont &eacute;gale cr&eacute;&eacute;e.</p><p>Maintenant nous sommes engag&eacute;s dans une grande guerre civile, examinant si cette nation, ou n\'importe quelle nation ainsi con&ccedil;u et ainsi consacr&eacute; peut longtemps supporter. Nous sommes rencontr&eacute;s sur un grand champ de bataille de cette guerre.</p><p>Nous sommes venus pour consacrer une partie de ce champ comme endroit de repos final pour ceux qui ont ici donn&eacute; leurs vies que cette nation pourrait vivre. Il est tout &agrave; fait convenable et appropri&eacute; que nous devrions faire ceci.</p><p>Mais, dans un plus grand sens, nous ne pouvons pas consacrer, nous ne pouvons pas consacrer, nous ne pouvons pas sanctifier cette terre. Les hommes de braver, la vie et mort, qui a lutt&eacute; ici l\'ont consacr&eacute;, loin au-dessus de notre puissance faible de s\'ajouter ou enlever. La volont&eacute; du monde peu de note, ni se rappellent longtemps, ce que nous disons ici, mais il peut ne jamais oublier ce qu\'elles ici. C\'est pour nous la vie, plut&ocirc;t, être consacr&eacute; ici au travail non fini qu\'ils qui a combattu ici jusqu\'ici ont tellement noblement avanc&eacute;.</p><p>Il est plut&ocirc;t pour que nous soient ici consacr&eacute;s au grand chargent restant avant nous. that de ces morts honor&eacute;s nous prenons la d&eacute;votion accrue &agrave; cette cause pour laquelle ils ont donn&eacute; la derni&egrave;re pleine mesure de d&eacute;votion, cela que nous r&eacute;solvons ici fortement que ces morts ne seront pas morts en vain, que cette nation, sous Dieu, aura une nouvelle naissance de la libert&eacute;, et que gouvernement des personnes, par les personnes, pour le peuple, ne p&eacute;riront pas de cette terre.</p>', 
'<p>Cuatro cuentas y hace siete a&ntilde;os, nuestros padres trajeron adelante sobre este continente una nueva naci&oacute;n: concebido en libertad, y dedicado al asunto que todos los hombres son igual creado.</p><p>Ahora nos contratan a una gran guerra civil, probando si esa naci&oacute;n, o cualquier naci&oacute;n as&iacute; que concebido y dedicado tan puede aguantar de largo. Nos satisfacen en un gran campo de batalla de esa guerra.</p><p>Hemos venido dedicar una porci&oacute;n de ese campo como lugar de reclinaci&oacute;n final para los que aqu&iacute; dieron sus vidas que esta naci&oacute;n pudo vivir. Es en conjunto apropiado y apropiado que debemos hacer esto.</p><p>Pero, en un sentido m&aacute;s grande, no podemos dedicar, nosotros no podemos consecrate, nosotros no podemos santificar esta tierra. Los hombres valientes, la vida y muerto, que luch&oacute; aqu&iacute; consecrated lo, lejos sobre nuestra energ&iacute;a pobre de agregar o de detraer. La voluntad del mundo poca nota, ni recuerda de largo, qu&eacute; decimos aqu&iacute;, pero puede nunca olvidarse de lo que &eacute;l lo hizo aqu&iacute;.</p><p>Es para nosotros la vida, algo, ser dedicado aqu&iacute; al trabajo inacabado que &eacute;l que luch&oacute; aqu&iacute; hasta el momento ha avanzado tan noble. Est&aacute; algo para que aqu&iacute; seamos dedicados a la gran tarea restante antes de nosotros. that de estos muertos honrados llevamos la dedicaci&oacute;n creciente esa causa para las cuales dieron la medida completa pasada de dedicaci&oacute;n, eso que aqu&iacute; resolvemos altamente que estos muertos no habr&aacute;n muerto en in&uacute;til, que esta naci&oacute;n, debajo del dios, tendr&aacute; un nuevo nacimiento de la libertad, y que gobierno de la gente, por la gente, para la gente, no fallecer&aacute;n de esta tierra.</p>');
$caption = array('Teena And Nikki Collins played the twin daughters of Doug The Head in the motion picture "Snatch."', 'Teena et Nikki Collins ont jou&eacute; les filles jumelles de Doug La Tête dans le film cin&eacute;matographique "Snatch."', 'Teena y Nikki Collins jugaron a hijas gemelas de Doug La Cabeza en la pel&iacute;cula "Snatch."');
$goodbye = array('Goodbye!', 'Au revoir!', '&iexcl;Adios!');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!--
		Web Page Translations Via PHP
		Copyright 2007 Doug Vanderweide

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <http://www.gnu.org/licenses/>.
	-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Web Page Translations Via PHP Example 1: Arrays</title>
		<link href="../demo.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			div.langMenu, div.mainContainer {
				clear: both;
				width: 800px;
				margin-bottom: 10px;
			}
			
			div.langMenu {
				vertical-align: middle;
				text-align: right;
				border: 1px solid #000;
				padding: 5px;
			}
			
			div.imgBox {
				float: left;
				width: 236px;
				margin: 0 10px 10px 0;
				padding: 5px;
				color: #fff;
				background: #000;
			}
			
			img {
				border: 1px solid #fff;
			}
		</style>
		
		<script type="text/javascript">
			function submitForm() {
				var thelang = document.getElementById('lang').options[document.getElementById('lang').selectedIndex].value;
				window.location.href = window.location.pathname + '?lang=' + thelang;
			}
		</script>
	</head>
	<body>
		<h1>
			Web Page Translations Via PHP<br />
			Example 1: Arrays
		</h1>
		<div class="langMenu">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
				<label for="lang">Select Language:</label>
				<select id="lang" name="lang" onchange="submitForm()">
					<option value="en"<?php if($_GET['lang'] != 'fr' && $_GET['lang'] != 'sp'){ echo " selected=\"selected\"";} ?>>English</option>
					<option value="fr"<?php if($_GET['lang'] == 'fr'){ echo " selected=\"selected\"";} ?>>French</option>
					<option value="sp"<?php if($_GET['lang'] == 'sp'){ echo " selected=\"selected\"";} ?>>Spanish</option>
				</select>
				<input name="submit" type="submit" value="Translate!" />
			</form>
		</div>
		<div class="mainContainer">
			<h1><?php echo $hello[$lng]; ?></h1>
			<div class="imgBox">
				<a href="http://www.imdb.com/gallery/granitz/1458/Events/1458/NikkiColli_Ausse_491530_400.jpg"><img src="NikkiColli_Ausse_491530_400.jpg" alt="Teena and Nikki Collins" title="Teena and Nikki Collins" /></a>
				<br />
				<?php echo $caption[$lng]; ?>
			</div>
			<p><?php echo $gettysburg[$lng]; ?></p>
			<p><em><?php echo $goodbye[$lng]; ?></em></p>
		</div>
		<div class="mainContainer">
			<p><a href="db.php">Example 2: Database Back End</a></p>
			<p><a href="http://www.dougv.com/blog/2007/11/15/multilingual-web-pages-via-php-arrays-and-mysql/">Multilingual Web Pages Via PHP, Arrays And MySQL</a></p>
		</div>
	</body>
</html>
