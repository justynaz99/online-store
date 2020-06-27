<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 09:03:42
  from 'C:\xampp\htdocs\onlineStore\app\views\ShoppingCartEmpty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef44c4e4d5e86_22945531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22a31098c03636abc9bd4e244edd63643ec8d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\ShoppingCartEmpty.tpl',
      1 => 1593068606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef44c4e4d5e86_22945531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>








<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5811255925ef44c4e4d56b9_84500758', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "ShoppingCart.tpl");
}
/* {block "content"} */
class Block_5811255925ef44c4e4d56b9_84500758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5811255925ef44c4e4d56b9_84500758',
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
