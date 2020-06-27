{extends file="main.tpl"}

{block name="username"}
    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        Witaj <strong>{$username}</strong>!
    </div>
{/block}

{block name="menuHome"}
    <li><a href="{$conf->action_root}home">Strona główna</a></li>
{/block}

{block name="menuLogOut"}
    <li><a href="{$conf->action_root}logout">Wyloguj</a></li>
{/block}


{block name="content"}

    <section id="banner" style="margin-top: -1em">
        <div class="content">

            <header>
                <h1>Sklep<br />
                    internetowy</h1>
                <p>Aenean ornare velit lacus</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
            <ul class="actions">
                <li><a href="#" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
		    <img src="images/pic10.jpg" alt="" />
		</span>
    </section>

    <section>
        <header class="major" style="float: left">
            <h2>Lista użytkowników</h2>
        </header>
{*        <a href="{$conf->action_root}homeAdminEdit/{$user["id_user"]}" class="button">Edytuj</a></td>*}
        <div style=>
            <div class="table-wrapper" style="width: 800px; clear: both">
                <table>
                    <tr>
                        <td align="center"><h4>Login</h4></td>
                        <td align="center"><h4>Hasło</h4></td>
                        <td align="center"><h4>Imię</h4></td>
                        <td align="center"><h4>Nazwisko</h4></td>
                        <td align="center"><h4>Email</h4></td>
                        <td align="center"><h4>Rola</h4></td>
                        <td align="center"><h4></h4></td>
                    </tr>
                    {foreach $users as $user}
                        <tr>
                            <td align="center">{$user["username"]}</td>
                            <td align="center">{$user["password"]}</td>
                            <td align="center">{$user["first_name"]}</td>
                            <td align="center">{$user["last_name"]}</td>
                            <td align="center">{$user["email"]}</td>
                            <td align="center">{$user["role"]}</td>
                            <td align="right"><a href="{$conf->action_root}deleteUser/{$user["id_user"]}" class="button">Usuń</a></td>
                            <td align="left"><a href="{$conf->action_root}userEdit/{$user["id_user"]}" class="button">Edytuj</a></td>
                        </tr>
                    {/foreach}
                </table>
            </div>
        </div>


    </section>
{/block}