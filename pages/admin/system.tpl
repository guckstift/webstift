{extends "admin/base.tpl"}

{block "heading"}Systemeinstellungen{/block}

{block "content" append}
	<a href="{$rootUrl}/admin/system?action=installdb">Installiere Datenbank</a>
{/block}
