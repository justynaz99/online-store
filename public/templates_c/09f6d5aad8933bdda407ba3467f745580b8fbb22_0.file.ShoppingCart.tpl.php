<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-04 10:38:43
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed8b313439200_07274610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f6d5aad8933bdda407ba3467f745580b8fbb22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCart.tpl',
      1 => 1591259707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed8b313439200_07274610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7559259915ed8b313416de2_11451160', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_7559259915ed8b313416de2_11451160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7559259915ed8b313416de2_11451160',
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
