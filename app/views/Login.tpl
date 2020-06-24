{extends file="main.tpl"}

{block name="menuHome"}
    <li><a href="{$conf->action_root}home">Strona główna</a></li>
{/block}

{block name="menuLogIn"}
    <li><a href="{$conf->action_root}loginShow">Zaloguj</a></li>
{/block}

{block name="menuRegistration"}
    <li><a href="{$conf->action_root}registration">Zarejestruj</a></li>
{/block}



{block name=content}

    <div class="row gtr-200">
        <form action="{$conf->action_root}login" method="post" style="width: 400px; margin-top: 3%" method="post">
            <h3>Zaloguj się</h3>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="" placeholder="Nazwa użytkownika" /><br>
                <input type="password" name="password" id="password" value="" placeholder="Hasło" />
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zaloguj" class="primary" /></li>
                    <li><input type="reset" value="Resetuj" /></li>
                </ul>
            </div>
        </form>
    </div>


{/block}