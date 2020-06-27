<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 12:46:45
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeSearchUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5d2158be8d1_51794736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dc08b970b9fd7f4785ff08d7597b9a4be041fc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeSearchUser.tpl',
      1 => 1593168019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5d2158be8d1_51794736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17401270915ef5d2158b95f3_24275735', "backToList");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "HomeUser.tpl");
}
/* {block "backToList"} */
class Block_17401270915ef5d2158b95f3_24275735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'backToList' => 
  array (
    0 => 'Block_17401270915ef5d2158b95f3_24275735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row gtr-200">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home" method="post">
            <div class="col-6 col-12-xsmall">
                <input type="submit" value="Wróć do listy produktów" class="primary" />
            </div>
        </form>
    </div>

<?php
}
}
/* {/block "backToList"} */
}
