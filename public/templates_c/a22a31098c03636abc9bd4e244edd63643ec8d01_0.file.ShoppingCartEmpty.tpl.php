<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 10:44:47
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCartEmpty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef706ff1607c9_67262796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22a31098c03636abc9bd4e244edd63643ec8d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCartEmpty.tpl',
      1 => 1593069388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef706ff1607c9_67262796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19385724905ef706ff15f448_34978572', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "ShoppingCart.tpl");
}
/* {block "content"} */
class Block_19385724905ef706ff15f448_34978572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19385724905ef706ff15f448_34978572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 20px">
        <h4>Twój koszyk jest pusty!</h4>
    </div>

<?php
}
}
/* {/block "content"} */
}
