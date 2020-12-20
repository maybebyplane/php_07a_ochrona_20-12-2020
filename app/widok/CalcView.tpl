{extends file="main.tpl"}

{block name=content}
    
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}calcCompute" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu [PLN]</label>
			<input id="kwota" type="number" placeholder="Kwota kredytu [PLN]" name="kwota" value="{$form->kwota}">
					
			<label for="lat">Kredyt na [lat]</label>
			<input id="lat" type="number" placeholder="Kredyt na [lat]" name="lat" value="{$form->lat}">

            <label for="oprocentowanie">Oprocentowanie [%]</label>
			<input id="op" type="number" placeholder="Oprocentowanie [%]" name="op" value="{$form->op}">
                        
			<button type="submit" class="pure-button">Wylicz</button>
		</fieldset>
	</form>
</div>
</div>


{include file='messages.tpl'}

{if isset($res->result)}
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
        zł miesięcznie
	</p>
</div>

{/if}

{/block}