<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 17:11:01
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed66c055647d3_70068620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f6d5aad8933bdda407ba3467f745580b8fbb22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCart.tpl',
      1 => 1591110639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed66c055647d3_70068620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764829995ed66c05557108_66652320', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1764829995ed66c05557108_66652320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1764829995ed66c05557108_66652320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4>Your shopping cart</h4>
    <div class="table-wrapper" style="width: 800px">
        <table>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value["name_product"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value["price_product"];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>



<?php
}
}
/* {/block "content"} */
}
