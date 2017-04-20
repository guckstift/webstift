<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>guckstift</title>
	<link rel="stylesheet" href="{$rootUrl}/sys/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{$rootUrl}/styles/adminbase.css">
	<link rel="stylesheet" href="{$rootUrl}/styles/stiftbox.css">
	<script src="{$rootUrl}/sys/libs/jquery.js"></script>
	<script src="{$rootUrl}/sys/scripts/stiftbox.js"></script>
</head>
<body>
	<div class="navbar">
		<div class="nav">
			<div class="left">
				<a href="{$rootUrl}/admin">
					<img src="{$rootUrl}/media/gear.png" alt="Mau Logo" class="navlogo">
				</a>
			</div>
			<a href="#" onclick="$('.mainmenu').toggleClass('hover');return false;">
				<i class="hamburger fa fa-bars fa-2x"></i>
			</a>
			<div class="right">
				<ul class="mainmenu">
					{if $logged}
						<li>
							<a href="{$rootUrl}/admin/system">System</a>
						</li>
						<li>
							<a href="{$rootUrl}/admin/blog">News-Blog</a>
						</li>
						<li>
							<a href="{$rootUrl}/admin/albums">Alben</a>
						</li>
					{/if}
					<li>
						<a href="{$rootUrl}/" class="fa fa-home icon" target="_blank"></a>
					</li>
					{if $logged}
						<li>
							<a href="{$rootUrl}/admin/logout" class="fa fa-sign-out icon"></a>
						</li>
					{/if}
				</ul>
			</div>
		</div>
	</div>
	<div class="column">
		{block "inner"}
		<div class="main">
			{block "content"}
				<div class="panel">
					<h1>
						{block "heading"}This is the Heading Panel{/block}
					</h1>
				</div>
			{/block}
		</div>
		{/block}
	</div>
</body>
</html>
