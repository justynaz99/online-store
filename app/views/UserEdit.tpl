{extends file="main.tpl"}

{block name=content}

    <div class="row gtr-200">
        <form action="{$conf->action_root}userEditSave" method="post" style="width: 400px; margin-top: 3%" method="post">
            <h3>Edytuj użytkownika</h3>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="{$form->username}" placeholder="Login" /><br>
                <input type="password" name="password" id="password" value="{$form->password}" placeholder="Hasło" /><br>
                <input type="text" name="first_name" id="first_name" value="{$form->first_name}" placeholder="Imię" /><br>
                <input type="text" name="last_name" id="last_name" value="{$form->last_name}" placeholder="Nazwisko" /><br>
                <input type="text" name="email" id="email" value="{$form->email}" placeholder="Adres email" /><br>
                <input type="text" name="role" id="role" value="{$form->role}" placeholder="Rola" /><br>
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zapisz" class="primary" /></li>
                    <li><input type="reset" value="Resetuj" /></li>
                </ul>
            </div>
            <input type="hidden" name="id_user" value="{$form->id_user}">
        </form>
    </div>

{/block}