<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-28 22:53:13
  from 'C:\xampp\htdocs\onlineStore\app\views\Order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef90339224814_51404041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea1109510d7ffc01c03e5b79cc1dd448be42a49c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Order.tpl',
      1 => 1593377591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef90339224814_51404041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4750463135ef9033920d878_31998483', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2202427925ef90339213633_33873271', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17639473905ef90339214709_07560918', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16768277475ef903392154e2_96744665', "menuLogOut");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7436478845ef90339216236_22675373', "menuOrders");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13296259715ef90339216f93_93915634', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_4750463135ef9033920d878_31998483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_4750463135ef9033920d878_31998483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
    </div>
<?php
}
}
/* {/block "username"} */
/* {block "menuHome"} */
class Block_2202427925ef90339213633_33873271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_2202427925ef90339213633_33873271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuShoppingCart"} */
class Block_17639473905ef90339214709_07560918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_17639473905ef90339214709_07560918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shoppingCartShow">Koszyk</a></li>
<?php
}
}
/* {/block "menuShoppingCart"} */
/* {block "menuLogOut"} */
class Block_16768277475ef903392154e2_96744665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_16768277475ef903392154e2_96744665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
<?php
}
}
/* {/block "menuLogOut"} */
/* {block "menuOrders"} */
class Block_7436478845ef90339216236_22675373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuOrders' => 
  array (
    0 => 'Block_7436478845ef90339216236_22675373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orderShow">Zamówienia</a></li>
<?php
}
}
/* {/block "menuOrders"} */
/* {block "content"} */
class Block_13296259715ef90339216f93_93915634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13296259715ef90339216f93_93915634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 20px">
        <h4>Twoje zamówienia:</h4><br>
        <div class="table-wrapper" style="width: 600px">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                <table>
                    <tr style="border-color: #f56a6a; border-width: 2px">
                        <td align="center">
                            <h7></h7>
                        </td>
                        <td align="center">
                            <h7>ZAMÓWIENIE nr <?php echo $_smarty_tpl->tpl_vars['order']->value["id_order"];?>
</h7>
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
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['order']->value["value"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['order']->value["date"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['order']->value["name"];?>
</td>
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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value["id_order"] == $_smarty_tpl->tpl_vars['order']->value["id_order"]) {?>
                    <tr>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["price_product"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["quantity"];?>
</td>
                    </tr>
                    <?php }?>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
