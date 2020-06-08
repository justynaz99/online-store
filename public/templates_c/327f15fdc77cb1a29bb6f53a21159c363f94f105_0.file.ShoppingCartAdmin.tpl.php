<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:31:11
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCartAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eddf74f64cd57_49355457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327f15fdc77cb1a29bb6f53a21159c363f94f105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCartAdmin.tpl',
      1 => 1591605063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eddf74f64cd57_49355457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14714345345eddf74f622792_63183954', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19507344595eddf74f62f2c4_55078300', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8173812825eddf74f631c49_60621903', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18235688815eddf74f633f95_09244305', "menuLogOut");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20131061775eddf74f6361e8_22607550', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_14714345345eddf74f622792_63183954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_14714345345eddf74f622792_63183954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 30px; margin-right: 50px; text-align: right">
        <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
    </div>
<?php
}
}
/* {/block "username"} */
/* {block "menuHome"} */
class Block_19507344595eddf74f62f2c4_55078300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_19507344595eddf74f62f2c4_55078300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeAdmin">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuShoppingCart"} */
class Block_8173812825eddf74f631c49_60621903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_8173812825eddf74f631c49_60621903',
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
class Block_18235688815eddf74f633f95_09244305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_18235688815eddf74f633f95_09244305',
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
/* {block "content"} */
class Block_20131061775eddf74f6361e8_22607550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20131061775eddf74f6361e8_22607550',
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
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value["name_product"];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value["price_product"];?>
</td>
                        <td align="right"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteItem/<?php echo $_smarty_tpl->tpl_vars['row']->value["id_product"];?>
" class="button">Usuń</a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
