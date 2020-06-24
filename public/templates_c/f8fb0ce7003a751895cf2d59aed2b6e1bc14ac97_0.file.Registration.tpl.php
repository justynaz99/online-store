<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 22:47:40
  from 'C:\xampp\htdocs\onlineStore\app\views\Registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3bbec0c99a6_51854126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8fb0ce7003a751895cf2d59aed2b6e1bc14ac97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Registration.tpl',
      1 => 1593031658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3bbec0c99a6_51854126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12087416165ef3bbec0b4505_59819431', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10031346485ef3bbec0c0405_61535031', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13178098975ef3bbec0c2231_74517720', "menuRegistration");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6860639505ef3bbec0c3de3_43987476', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_12087416165ef3bbec0b4505_59819431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_12087416165ef3bbec0b4505_59819431',
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
/* {block "menuLogIn"} */
class Block_10031346485ef3bbec0c0405_61535031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_10031346485ef3bbec0c0405_61535031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a></li>
<?php
}
}
/* {/block "menuLogIn"} */
/* {block "menuRegistration"} */
class Block_13178098975ef3bbec0c2231_74517720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_13178098975ef3bbec0c2231_74517720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration">Zarejestruj</a></li>
<?php
}
}
/* {/block "menuRegistration"} */
/* {block "content"} */
class Block_6860639505ef3bbec0c3de3_43987476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6860639505ef3bbec0c3de3_43987476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row gtr-200">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" style="width: 400px; margin-top: 3%" method="post">
            <h3>Zarejestruj się</h3>
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
    </div>
<?php
}
}
/* {/block "content"} */
}
