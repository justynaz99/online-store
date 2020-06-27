<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 11:08:20
  from 'C:\xampp\htdocs\onlineStore\app\views\UserEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef46984d34df5_91009891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb66650769b74bb829fca94e1c09513acc521635' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\UserEdit.tpl',
      1 => 1593076099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef46984d34df5_91009891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18210223525ef46984d2f163_61483086', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_18210223525ef46984d2f163_61483086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18210223525ef46984d2f163_61483086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row gtr-200">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userEditSave" method="post" style="width: 400px; margin-top: 3%" method="post">
            <h3>Edytuj użytkownika</h3>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
" placeholder="Login" /><br>
                <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" placeholder="Hasło" /><br>
                <input type="text" name="first_name" id="first_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->first_name;?>
" placeholder="Imię" /><br>
                <input type="text" name="last_name" id="last_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->last_name;?>
" placeholder="Nazwisko" /><br>
                <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" placeholder="Adres email" /><br>
                <input type="text" name="role" id="role" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->role;?>
" placeholder="Rola" /><br>
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zapisz" class="primary" /></li>
                    <li><input type="reset" value="Resetuj" /></li>
                </ul>
            </div>
            <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
">
        </form>
    </div>

<?php
}
}
/* {/block 'content'} */
}
