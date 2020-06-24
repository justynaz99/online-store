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
        <h4>Twoje zamówienia:</h4>
        <div class="table-wrapper" style="width: 600px">
            {foreach $orders as $order}
                <table>
                    <tr>
                        <td><h7>{$order["id_order"]}</h7></td>
                        <td align="left"><h7>{$order["value"]}</h7></td>
                        <td align="right"><h7>{$order["date"]}</h7></td>
                    </tr>
                    {foreach $list as $row}
                        <tr>
                            <td>{$row["name"]}</td>
                            <td align="left">{$row["price_product"]}</td>
                            <td align="right">{$row["quantity"]}</td>
                        </tr>
                    {/foreach}
                </table>
            {/foreach}


        </div>
    </div>


{/block}