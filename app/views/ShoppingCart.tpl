{extends file="main.tpl"}

{block name="content"}

    <h4>Your shopping cart</h4>
    <div class="table-wrapper" style="width: 800px">
        <table>
            {foreach $list as $row}
                <tr>
                    <td>{$row["name_product"]}</td>
                    <td>{$row["price_product"]}</td>
                </tr>
            {/foreach}
        </table>
    </div>



{/block}