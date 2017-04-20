{extends "admin/base.tpl"}

{block "heading"}Album: {$album->name}{/block}

{block "content" append}
	<script src="{$rootUrl}/sys/scripts/imgup.js"></script>
	<a class="album" href="{$rootUrl}/admin/albums">
		<i class="fa fa-arrow-left fa-5x albumicon"></i>
		<span class="albumlabel">
			<span class="albumlabeltext">
				Zurück
			</span>
		</span>
	</a>
	{foreach $images as $image}
		<div class="album stiftbox-img" style="background-image: url('{$image->url}')"
		data-src="{$image->url}">
			<span class="albumlabel">
				<span class="albumlabeltext">
					{$image->name}
				</span>
			</span>
		</div>
	{/foreach}
	<a class="album" href="#"
	onclick="imgup('{$rootUrl}/admin/album?id={$album->id}&action=imgup')">
		<i class="fa fa-plus fa-5x albumicon"></i>
		<span class="albumlabel">
			<span class="albumlabeltext">
				Bild hochladen
			</span>
		</span>
	</a>
{/block}
