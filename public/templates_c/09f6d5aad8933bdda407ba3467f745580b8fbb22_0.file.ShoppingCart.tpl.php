<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 21:12:04
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef79a0417c498_74320643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f6d5aad8933bdda407ba3467f745580b8fbb22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCart.tpl',
      1 => 1593284990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef79a0417c498_74320643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16070586065ef79a04151753_99333678', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9331248065ef79a0415f748_98850478', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9036221115ef79a04161358_09605411', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_904930205ef79a04162ad3_71874967', "menuLogOut");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17443039255ef79a041641b8_17248258', "menuOrders");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12981658835ef79a04165ad6_36901037', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_16070586065ef79a04151753_99333678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_16070586065ef79a04151753_99333678',
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
class Block_9331248065ef79a0415f748_98850478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_9331248065ef79a0415f748_98850478',
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
class Block_9036221115ef79a04161358_09605411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_9036221115ef79a04161358_09605411',
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
class Block_904930205ef79a04162ad3_71874967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_904930205ef79a04162ad3_71874967',
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
class Block_17443039255ef79a041641b8_17248258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuOrders' => 
  array (
    0 => 'Block_17443039255ef79a041641b8_17248258',
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
class Block_12981658835ef79a04165ad6_36901037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12981658835ef79a04165ad6_36901037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 20px">
        <h4>Twój koszyk:</h4>
        <div class="table-wrapper" style="width: 600px">
            <table>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <tr>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["price"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["quantity"];?>
</td>
                        <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteItem/<?php echo $_smarty_tpl->tpl_vars['row']->value["id_product"];?>
" class="button">Usuń</a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <div style="margin-bottom: 20px; margin-top: 20px">
                <h7><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 zł</h7>
            </div>

            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
order" class="button">Złóż zamówienie</a>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
