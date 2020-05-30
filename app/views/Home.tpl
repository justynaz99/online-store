{extends file="main.tpl"}


{block name="content"}

    <section id="banner">
        <div class="content">
            <header>
                <h1>Online<br />
                    store</h1>
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
            <h2>Ipsum sed dolor</h2>
        </header>
        <div class="posts">
            {foreach $products as $p}
                <article>
                    <a href="#" class="image"><img src="images/pic{$p["id_product"]}.jpg" alt="" /></a>
                    <h3>{$p["name"]}</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <p>{$p["price"]}</p>
                    <ul class="actions">
                        <li><a href="{$conf->action_root}addItem/{$p["id_product"]}" class="button">Add to shopping cart</a></li>
                    </ul>
                </article>
            {/foreach}
        </div>
    </section>
{/block}