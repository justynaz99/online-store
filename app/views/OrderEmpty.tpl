{extends file="main.tpl"}

{block name="username"}
    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        <strong>{$username}</strong>
    </div>
{/block}

{block name="menuHome"}
    <li><a href="{$conf->action_root}homeUser">Strona główna</a></li>
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


{block name="content"}

    <div style="margin-top: 20px">
        <h4>Nie masz jeszcze żadnych zamówień!</h4>
    </div>


{/block}