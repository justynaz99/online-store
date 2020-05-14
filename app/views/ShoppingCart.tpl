{extends file="main.tpl"}

{block name="content"}
    <br><br>

    <h4>Your shopping cart</h4>
    <div class="table-wrapper" style="width: 800px">
        <table>
            {foreach $list as $row}
                <tr>
                    <td>{$row["name"]}</td>
                    <td>{$row["price"]}</td>
                </tr>
            {/foreach}
        </table>
    </div>



{/block}