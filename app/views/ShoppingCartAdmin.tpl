{extends file="main.tpl"}

{block name="username"}
    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        <strong>{$username}</strong>
    </div>
{/block}

{block name="menuHome"}
    <li><a href="{$conf->action_root}homeAdmin">Strona główna</a></li>
{/block}

{block name="menuShoppingCart"}
    <li><a href="{$conf->action_root}shoppingCartShow">Koszyk</a></li>
{/block}

{block name="menuLogOut"}
    <li><a href="{$conf->action_root}logout">Wyloguj</a></li>
{/block}

{block name="content"}

    <div style="margin-top: 20px">
        <h4>Twój koszyk:</h4>
        <div class="table-wrapper" style="width: 600px">
            <table>
                {foreach $list as $row}
                    <tr>
                        <td>{$row["name_product"]}</td>
                        <td align="center">{$row["price_product"]}</td>
                        <td align="right"><a href="{$conf->action_root}deleteItem/{$row["id_product"]}" class="button">Usuń</a></td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </div>


{/block}