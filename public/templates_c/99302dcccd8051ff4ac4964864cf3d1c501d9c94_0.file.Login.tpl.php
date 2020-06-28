<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 22:04:13
  from 'C:\xampp\htdocs\onlineStore\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef7a63d933b56_94239603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99302dcccd8051ff4ac4964864cf3d1c501d9c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Login.tpl',
      1 => 1593288252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7a63d933b56_94239603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16495483755ef7a63d92cbd5_48916871', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9951098645ef7a63d931774_15837884', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11956046015ef7a63d932520_98874766', "menuRegistration");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7011283215ef7a63d933102_22651556', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_16495483755ef7a63d92cbd5_48916871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_16495483755ef7a63d92cbd5_48916871',
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
class Block_9951098645ef7a63d931774_15837884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_9951098645ef7a63d931774_15837884',
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
class Block_11956046015ef7a63d932520_98874766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_11956046015ef7a63d932520_98874766',
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
class Block_7011283215ef7a63d933102_22651556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7011283215ef7a63d933102_22651556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row gtr-200">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" style="width: 400px; margin-top: 1%" method="post">
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
