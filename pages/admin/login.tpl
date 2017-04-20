{extends "admin/base.tpl"}

{block "content"}
	<div class="login-panel">
		<form action="{$rootUrl}/admin/login" method="post">
			<input type="text" placeholder="Benutzername" class="textbox" id="user" name="user">
			<input type="password" placeholder="Passwort" class="textbox" id="pass" name="pass">
			<button type="submit" class="btn">Anmelden</button>
		</form>
	</div>
{/block}
