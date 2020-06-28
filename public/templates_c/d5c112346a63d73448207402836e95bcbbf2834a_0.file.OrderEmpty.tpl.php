<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 10:48:16
  from 'C:\xampp\htdocs\onlineStore\app\views\OrderEmpty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef707d0ce3212_26197577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c112346a63d73448207402836e95bcbbf2834a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\OrderEmpty.tpl',
      1 => 1593069388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef707d0ce3212_26197577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6113526765ef707d0ce2996_78304421', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Order.tpl");
}
/* {block "content"} */
class Block_6113526765ef707d0ce2996_78304421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6113526765ef707d0ce2996_78304421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="margin-top: 20px">
        <h4>Nie masz jeszcze żadnych zamówień!</h4>
    </div>


<?php
}
}
/* {/block "content"} */
}
