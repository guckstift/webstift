<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{block "title"}guckstift{/block}</title>
	<link rel="stylesheet" href="{$rootUrl}/sys/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{$rootUrl}/styles/base.css">
	<link rel="stylesheet" href="{$rootUrl}/styles/stiftbox.css">
	<script src="{$rootUrl}/sys/libs/jquery.js"></script>
	<script src="{$rootUrl}/sys/scripts/stiftbox.js"></script>
</head>
<body>
	<div class="navbar">
		<div class="column">
			<div class="nav">
				<div class="left">
					<a href="{$rootUrl}">
						<img src="{$rootUrl}/media/be-a-mau-2.png" alt="Mau Logo" class="navlogo">
					</a>
				</div>
				<a href="#" onclick="$('.mainmenu').toggleClass('hover');return false;">
					<i class="hamburger fa fa-bars fa-4x"></i>
				</a>
				<div class="right">
					<ul class="mainmenu">
						<li>
							<a href="{$rootUrl}">Webstift</a>
						</li>
						<li>
							<a href="{$rootUrl}/projects">Projekte</a>
						</li>
						<li>
							<a href="{$rootUrl}/contact">Kontakt</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	{block "outer"}
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
	{/block}
	<div class="footer">
		<div class="column">
			<div class="foot">
				<ul class="footmenu">
					<li>
						<a href="https://github.com/guckstift/" target="_blank">
							<i class="fa fa-github fa-4x"></i>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCPR_i8SZp1thKgj2FKLABLA"
							target="_blank">
							<i class="fa fa-youtube fa-4x"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
