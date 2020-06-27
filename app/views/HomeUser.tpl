{extends file="main.tpl"}

{block name="username"}
    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        Witaj <strong>{$username}</strong>!
    </div>
{/block}

{block name="menuHome"}
    <li><a href="{$conf->action_root}home">Strona główna</a></li>
{/block}

{block name="menuShoppingCart"}
    <li><a href="{$conf->action_root}shoppingCartShow">Koszyk</a></li>
{/block}

{block name="menuLogOut"}
    <li><a href="{$conf->action_root}logout">Wyloguj</a></li>
{/block}

{block name="menuOrders"}
    <li><a href="{$conf->action_root}orderShow">Zamówienia</a></li>
{/block}

{block name="header"}
    <div style="padding-bottom: 3em">
        <header id="header" style="padding-top: 20px">
            <a href="#" class="logo"><strong>Sklep</strong> internetowy</a>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
            </ul>
        </header>
    </div>
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
        <header class="major">
            <h2>Lista produktów</h2>
        </header>
        <h3>Wyszukaj</h3>
        <div class="row gtr-200">
            <form action="{$conf->action_root}searchShow" method="post" style="width: 400px">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="name" id="name" value="{$productForm->name}" placeholder="Nazwa produktu" /><br>
                    <input type="submit" value="Szukaj" class="primary" />
                </div>
            </form>
        </div>

        <div class="posts" style="margin-top: -1em">
            {foreach $products as $p}
                <article>
                    <a href="#" class="image"><img src="images/pic{$p["id_product"]}.jpg" alt="" /></a>
                    <h3>{$p["name"]}</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <p>{$p["price"]} zł</p>
                    <ul class="actions">
                        <li><a href="{$conf->action_root}addItem/{$p["id_product"]}" class="button">Dodaj do koszyka</a></li>
                    </ul>
                </article>
            {/foreach}
        </div>

        {block name=backToList}

        {/block}
    </section>
{/block}