<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:36:39
  from 'C:\xampp\htdocs\onlineStore\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eddf897298f59_59715832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99302dcccd8051ff4ac4964864cf3d1c501d9c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Login.tpl',
      1 => 1591605397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eddf897298f59_59715832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14694638565eddf897292177_79496165', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7813900845eddf8972970b7_76445154', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13857912025eddf897297c41_96197978', "menuRegistration");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5834278555eddf897298646_92102679', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_14694638565eddf897292177_79496165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_14694638565eddf897292177_79496165',
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
class Block_7813900845eddf8972970b7_76445154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_7813900845eddf8972970b7_76445154',
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
class Block_13857912025eddf897297c41_96197978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_13857912025eddf897297c41_96197978',
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
/* {block 'content'} */
class Block_5834278555eddf897298646_92102679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5834278555eddf897298646_92102679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" style="width: 600px; margin-top: 3%" method="post">
    <h3>Zaloguj się</h3>
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="username" id="username" value="" placeholder="Nazwa użytkownika" />
        </div>
        <br>
        <div class="col-6 col-12-xsmall">
            <input type="password" name="password" id="password" value="" placeholder="Hasło" />
        </div>

        <div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Zaloguj" class="primary" /></li>
                <li><input type="reset" value="Resetuj" /></li>
            </ul>
        </div>
    </div>

</form>
<?php
}
}
/* {/block 'content'} */
}
