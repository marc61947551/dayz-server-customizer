<!DOCTYPE html>
<html>
<head>
	<title>DSSC - Dayz standalone server customizer</title>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="favicon.png" />
	<script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
	<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" async defer>
	<link rel="stylesheet" type="text/css" href="css/dssc.css" async defer>
	<script src="build/upload.js"></script>
</head>
<body>
<?PHP
	require_once('loader.php');

	$files = scan_dir('uploads/');

	$users = count(glob("uploads/*", GLOB_ONLYDIR));
	$filecount = $files['total_files'] - $users;

	$version = fopen("version", "r");
	$versionNumber = fread($version,filesize("version"));
	fclose($version);
?>	
<section class="header">
	<div class="container">
		<p class="h1 text-center">Dayz Standalone Server Customizer</p>
		<p class="text-center"><?PHP echo '<mark>' . $users . '</mark> users have generated <mark>'. $filecount . '</mark> files with this tool.'; ?><br/>
			Made by <strong><a target="_blank" href="https://www.reddit.com/u/nixonhenrixon">/u/nixonhenrixon</a></strong> & <strong><a target="_blank" href="https://github.com/iJigg">git/iJigg</a></strong><br>
		<span class="cookies">This site uses cookies to store some useless values</span>
		</p>
	</div>
</section>

<section class="footer">
		<p><code><a href="https://github.com/niklashenrixon/dayz-server-customizer/releases" target="_blank">[release <?PHP echo $versionNumber ?>]</a> ~ <a href="https://www.reddit.com/r/dayz/comments/a7fsvt/dayz_standalone_server_customizer_httpsdayzskyn1se/" target="_blank">Report suggestions or problems here plis 🐒🐒🐒🐒</a></code></p>
		<p><code><a href="http://buymeacoff.ee/tHoAcuy" target="_blank">Buy us a coffee 🍺</a></code></p>
</section>