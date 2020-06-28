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
        </div>
        <span class="image object">
		    <img src="images/pic10.jpg" alt="" />
		</span>
    </section>

    <section>
        <header class="major">
            <h2>Lista produktów</h2>
        </header>

        <form action="{$conf->action_root}addToList" style="width: 600px; margin-top: 1em" method="post">
            <h3>Dodaj produkt do listy</h3>
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="name_product" id="name_product" value="" placeholder="Nazwa produktu" />
                </div>
                <br>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="price_product" id="price_product" value="" placeholder="Cena produktu" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Dodaj" class="button" /></li>
                        <li><input type="reset" value="Resetuj" /></li>
                    </ul>
                </div>
            </div>
        </form>


        <div class="posts" style="margin-top: 1em">
            {foreach $products as $p}
                <article>
                    <a href="#" class="image"><img src="images/pic{$p["id_product"]}.jpg" alt="" /></a>
                    <h3>{$p["name"]}</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <p>{$p["price"]} zł</p>
{*                    <ul class="actions">*}
{*                        <li><a href="{$conf->action_root}deleteFromList/{$p["id_product"]}" class="button">Usuń produkt z listy</a></li>*}
{*                    </ul>*}
                </article>
            {/foreach}
        </div>

        <br>
        <ul class="pagination">
            {if {$page} == 1}
                <li><span class="button disabled">Previous page</span></li>
            {else}
                <li><a href="{$conf->action_root}home/{$page - 1}" class="button">Previous page</a></li>
            {/if}
            {if {$page} == {$lastPage}}
                <li><span class="button disabled">Previous page</span></li>
            {else}
                <li><a href="{$conf->action_root}home/{$page + 1}" class="button">Next page</a></li>
            {/if}
        </ul>
    </section>
{/block}