{extends file="main.tpl"}

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