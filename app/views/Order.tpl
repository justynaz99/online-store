{extends file="main.tpl"}

{block name="username"}
    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        <strong>{$username}</strong>
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


{block name="content"}
    <div style="margin-top: 20px">
        <h4>Twoje zamówienia:</h4><br>
        <div class="table-wrapper" style="width: 600px">
            {foreach $orders as $order}
                <table>
                    <tr style="border-color: #f56a6a; border-width: 2px">
                        <td align="center">
                            <h7></h7>
                        </td>
                        <td align="center">
                            <h7>ZAMÓWIENIE nr {$order["id_order"]}</h7>
                        </td>
                        <td align="center">
                            <h7></h7>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <h7>wartość</h7>
                        </td>
                        <td align="center">
                            <h7>data</h7>
                        </td>
                        <td align="center">
                            <h7>status</h7>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td align="center">{$order["value"]}</td>
                        <td align="center">{$order["date"]}</td>
                        <td align="center">{$order["name"]}</td>
                    </tr>
                    </tr>
                    <tr>
                        <td align="center">
                            <h7></h7>
                        </td>
                        <td align="center">
                            <h7>POZYCJE</h7>
                        </td>
                        <td align="center">
                            <h7></h7>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <h7>nazwa</h7>
                        </td>
                        <td align="center">
                            <h7>cena</h7>
                        </td>
                        <td align="center">
                            <h7>ilość</h7>
                        </td>
                    </tr>
                    <tr>
                        {foreach $list as $row}
                        {if $row["id_order"] == $order["id_order"]}
                    <tr>
                        <td align="center">{$row["name"]}</td>
                        <td align="center">{$row["price_product"]}</td>
                        <td align="center">{$row["quantity"]}</td>
                    </tr>
                    {/if}
                    </tr>
                    {/foreach}
                </table>
                <br>
            {/foreach}


        </div>
    </div>
{/block}