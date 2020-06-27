<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 11:31:38
  from 'C:\xampp\htdocs\onlineStore\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef46efa6e3526_66974793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99302dcccd8051ff4ac4964864cf3d1c501d9c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Login.tpl',
      1 => 1593077391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef46efa6e3526_66974793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11162068855ef46efa6daa31_20698175', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15627613835ef46efa6e14e0_03085987', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11104716735ef46efa6e2160_94143422', "menuRegistration");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18479034065ef46efa6e2bd5_52948871', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_11162068855ef46efa6daa31_20698175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_11162068855ef46efa6daa31_20698175',
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
class Block_15627613835ef46efa6e14e0_03085987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_15627613835ef46efa6e14e0_03085987',
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
class Block_11104716735ef46efa6e2160_94143422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_11104716735ef46efa6e2160_94143422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow">Zarejestruj</a></li>
<?php
}
}
/* {/block "menuRegistration"} */
/* {block 'content'} */
class Block_18479034065ef46efa6e2bd5_52948871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18479034065ef46efa6e2bd5_52948871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row gtr-200">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" style="width: 400px; margin-top: 3%" method="post">
            <h3>Zaloguj się</h3>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="username" id="username" value="" placeholder="Nazwa użytkownika" /><br>
                <input type="password" name="password" id="password" value="" placeholder="Hasło" />
            </div>
            <br>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zaloguj" class="primary" /></li>
                    <li><input type="reset" value="Resetuj" /></li>
                </ul>
            </div>
        </form>
    </div>


<?php
}
}
/* {/block 'content'} */
}
