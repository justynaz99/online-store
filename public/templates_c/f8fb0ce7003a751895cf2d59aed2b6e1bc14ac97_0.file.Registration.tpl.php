<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-04 10:32:57
  from 'C:\xampp\htdocs\onlineStore\app\views\Registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed8b1b99a39f1_76349554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8fb0ce7003a751895cf2d59aed2b6e1bc14ac97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Registration.tpl',
      1 => 1591258820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed8b1b99a39f1_76349554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6675670305ed8b1b9987a96_39736772', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_6675670305ed8b1b9987a96_39736772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6675670305ed8b1b9987a96_39736772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" style="width: 600px; margin-top: 3%" method="post">
        <h3>Zarejestruj się</h3>
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
" placeholder="Nazwa użytkownika" /><br>
                <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" placeholder="Hasło" /><br>
                <input type="text" name="first_name" id="first_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->first_name;?>
" placeholder="Imię" /><br>
                <input type="text" name="last_name" id="last_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->last_name;?>
" placeholder="Nazwisko" /><br>
                <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" placeholder="Adres email" /><br>
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                    <li><input type="reset" value="Resetuj" /></li>
                </ul>
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
    </form>
<?php
}
}
/* {/block "content"} */
}
