<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 17:37:02
  from 'C:\xampp\htdocs\onlineStore\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed6721e461e67_66081555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99302dcccd8051ff4ac4964864cf3d1c501d9c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Login.tpl',
      1 => 1591112197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6721e461e67_66081555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20562309735ed6721e45d776_13591003', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_20562309735ed6721e45d776_13591003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20562309735ed6721e45d776_13591003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" style="width: 600px; margin-top: 5%" method="post">
    <h3>Sign in</h3>
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="username" id="username" value="" placeholder="Username" />
        </div>
        <br>
        <div class="col-6 col-12-xsmall">
            <input type="password" name="password" id="password" value="" placeholder="Password" />
        </div>

        <div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Sign in" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </div>
    </div>

</form>
<?php
}
}
/* {/block 'content'} */
}
