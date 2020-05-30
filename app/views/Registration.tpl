{extends file="main.tpl"}

{block name="content"}
    <form action="{$conf->action_root}registration" style="width: 600px; margin-top: 5%" method="post">
        <h3>Sign up</h3>
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="{$form->username}" placeholder="Username" /><br>
                <input type="password" name="password" id="password" value="{$form->password}" placeholder="Password" /><br>
                <input type="text" name="first_name" id="first_name" value="{$form->first_name}" placeholder="First name" /><br>
                <input type="text" name="last_name" id="last_name" value="{$form->last_name}" placeholder="Last name" /><br>
                <input type="text" name="email" id="email" value="{$form->email}" placeholder="Address email" /><br>
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Sign up" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
            <input type="hidden" name="id" value="{$form->id}">
    </form>
{/block}