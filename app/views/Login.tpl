{extends file="main.tpl"}

{block name=content}

<form action="{$conf->action_root}login" style="width: 600px; margin-top: 3%" method="post">
    <h3>Zaloguj się</h3>
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="username" id="username" value="" placeholder="Nazwa użytkownika" />
        </div>
        <br>
        <div class="col-6 col-12-xsmall">
            <input type="password" name="password" id="password" value="" placeholder="Hasło" />
        </div>

        <div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Zaloguj" class="primary" /></li>
                <li><input type="reset" value="Resetuj" /></li>
            </ul>
        </div>
    </div>

</form>
{/block}