<?php
	include dirname(__FILE__)."/_app/config.php";
?><html>
<head>
	<title>Local apps</title>
	<link href="./_app/style_apps.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="./_app/folder.png" />
</head>
<body>
	<div class="folder_list">
		<h3>
			Other apps
		</h3>
		<ul class="apps">
		<?php
			$files1 = scandir( $folder );
			
				foreach($files1 as $file){
				switch($file){
				case '.':
				case '..':
				case 'desktop.ini':
				case 'style_apps.css':
				case 'index.php':
				case '_app':
					$file = '';
					break;
				}
				if(! $file){
					continue;
				}
			?>
			<li>
				<a href="./<?=$file;?>/"><?=$file;?></a>
			</li>
			<?php } ?>
		</ul>
		
	</div>

	<hr />

	<br />
	<br />
	<br />

	<div class="footer">
		<h4>Local apps v0.1</h4>
		<p>
		This app will enumerate all subdirectory folders in the same folder.
		<br />
		The objective of this app is to make an easy browseable listing of folders.
		<br />
		Free of clutter, Bigger font so its easier to click and navigate to.
		</p>
	</div>
</body>
</html>