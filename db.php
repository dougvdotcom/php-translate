<?php
$link = mysql_connect('localhost', 'mysqluser', 'dbpass') or die('cannot connect to db server');
mysql_select_db('database') or die('cannot select database');

if(!preg_match('/^(fr)|(en)|(sp)$/', $_GET['lang'])) {
	$lng = 'en';
}
else {
	$lng = $_GET['lang'];
}

$trans = array();
$rs = mysql_query("SELECT trans_section, trans_text FROM php_translate WHERE trans_lang = '$lng'") or die('cannot select language from database');
while($row = mysql_fetch_array($rs)) {
	$trans[$row['trans_section']] = $row['trans_text'];
}
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
		<title>Web Page Translations Via PHP Example 2: Database Back End</title>
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
				margin-right: 10px;
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
			Example 2: Database Back End
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
			<h1><?php echo $trans['hello']; ?></h1>
			<div class="imgBox">
				<a href="http://www.imdb.com/gallery/granitz/1458/Events/1458/NikkiColli_Ausse_491530_400.jpg"><img src="NikkiColli_Ausse_491530_400.jpg" alt="Teena and Nikki Collins" title="Teena and Nikki Collins" /></a>
				<br />
				<?php echo $trans['caption']; ?>
			</div>
			<p><?php echo $trans['gettysburg']; ?></p>
			<p><em><?php echo $trans['goodbye']; ?></em></p>
		</div>
		<div class="mainContainer">
			<p><a href="index.php">Example 1: Arrays</a></p>
			<p><a href="http://www.dougv.com/blog/2007/11/15/multilingual-web-pages-via-php-arrays-and-mysql/">Multilingual Web Pages Via PHP, Arrays And MySQL</a></p>
		</div>
	</body>
</html>
