{extends "admin/base.tpl"}

{block "heading"}Albenverwaltung{/block}

{block "content" append}
	<!--
	<script>
		$(function () {
		});
	</script>
	<form enctype="multipart/form-data" action="{$rootUrl}/admin/albums" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000">
		<input type="file">
		<button type="submit">
			Upload
		</button>
	</form>
	-->
	{foreach $albums as $album}
		<a href="{$rootUrl}/admin/album?id={$album->id}" class="album"
			{if $album->images|@count > 0}
				style="background-image: url('{$album->images[0]->url}')"
			{/if}
		>
			{if $album->images|@count === 0}
				<i class="fa fa-folder-o fa-5x albumicon"></i>
			{/if}
			<span class="albumlabel">
				<span class="albumlabeltext">
					{$album->name}
				</span>
			</span>
		</a>
	{/foreach}
{/block}
