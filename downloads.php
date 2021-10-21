<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/Style/stylesheet.css">
		<link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="/Images/favicon.ico">
		
		<title>Downloads</title>
	</head>

  <body>
	<div class="background"></div>
	<div class="menuBar">
		<div class="menuBarItem">
			<a>
				<div class="menuBarIcon"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div class="menuBarTitle">Menu</div>
			</a>
		</div>
		<div class="menuBarItem">
			<a href="/index.html">
				<div class="menuBarIcon"><i class="fa fa-home" aria-hidden="true"></i></div>
				<div class="menuBarTitle">Home</div>
			</a>
		</div>
		<div class="menuBarItem">
			<a>
				<div class="menuBarIcon"><i class="fa fa-lock" aria-hidden="true"></i></div>
				<div class="menuBarTitle">Password Generator</div>
			</a>
			<div class="menuBarSubMenu">
				<a href="/passwordGenerator.html">
					<div class="menuBarIcon"><i class="fa fa-info" aria-hidden="true"></i></div>
					<div class="menuBarTitle">Informations</div>
				</a><br>
				<a href="/generator.html">
					<div class="menuBarIcon"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div>
					<div class="menuBarTitle">Web app</div>
				</a>
			</div>
		</div>
		<div class="menuBarItem">
			<a href="/downloads.php">
				<div class="menuBarIcon"><i class="fa fa-download" aria-hidden="true"></i></div>
				<div class="menuBarTitle">Downloads</div>
			</a>
		</div>
		<div class="menuBarItem">
			<a href="/legals.html">
				<div class="menuBarIcon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
				<div class="menuBarTitle">Legals</div>
			</a>
		</div>
		<div class="menuBarItem">
			<a href="javascript:history.back()">
				<div class="menuBarIcon"><i class="fa fa-step-backward" aria-hidden="true"></i></div>
				<div class="menuBarTitle">Back</div>
			</a>
		</div>
	</div>
	<div class="contentContainer">
		<div class="content">
			<h1><i class="fa fa-download" aria-hidden="true"></i> Downloads</h1>
			<div class="line"></div>
			<br>
			<h2><i class="fa fa-lock" aria-hidden="true"></i> Password Generator</h2>
			<div class="line"></div>
			<span>
				This is my HTML/JavaScript implementation of a password generator i described on this site.
				You can download and use it for basically everything you would like to use it for.
			</span><br><br>
			<?php
				printFile('Ressources','PasswordGenerator.zip');
			
				function printFile($path, $file) {
					echo $lineStart . '<table class="tableBorder"><tr><th width="150px" style="text-align: center" class="table">';
					echo formatSizeUnits(filesize($path . "/" . $file));
					echo '</th><th style="text-align: center" class="table"><a href="/';
					echo htmlspecialchars($path . "/" . $file, ENT_QUOTES);
					echo '" target="_blank">';
					echo htmlspecialchars($file, ENT_QUOTES);
					echo '</a></th></tr><tr><td style="text-align: center" class="table">SHA-512</td><td class="monospace table" style="text-align: center">';
					echo chunk_split(strtoupper(hash_file('sha512', $path . '/' . $file)), 32,'<br>');
					echo '</td></tr><tr><td style="text-align: center" class="table">MD5</td><td class="monospace table" style="text-align: center">';
					echo strtoupper(hash_file('md5', $path . '/' . $file));
					echo "</tr></td></table>";
				}
				
				function formatSizeUnits($bytes) {
					if ($bytes >= 1073741824) {
						$bytes = number_format($bytes / 1073741824, 2) . ' GiB';
					} elseif ($bytes >= 1048576) {
						$bytes = number_format($bytes / 1048576, 2) . ' MiB';
					} elseif ($bytes >= 1024) {
						$bytes = number_format($bytes / 1024, 2) . ' KiB';
					} elseif ($bytes > 1) {
						$bytes = $bytes . ' bytes';
					} elseif ($bytes == 1) {
						$bytes = $bytes . ' byte';
					} else {
						$bytes = '0 bytes';
					}
					return $bytes;
				}
			?>
		</div>
	</div>
  </body>
</html>