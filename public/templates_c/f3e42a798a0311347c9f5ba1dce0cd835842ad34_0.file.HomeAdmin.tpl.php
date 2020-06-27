<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 12:40:23
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5d097ca4776_62654784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e42a798a0311347c9f5ba1dce0cd835842ad34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeAdmin.tpl',
      1 => 1593168019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5d097ca4776_62654784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20644417425ef5d097c94995_35818793', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9502571665ef5d097c98b85_93270071', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5280967415ef5d097c99910_41748191', "menuLogOut");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10042742585ef5d097c9a443_69513306', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_20644417425ef5d097c94995_35818793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_20644417425ef5d097c94995_35818793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        Witaj <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>!
    </div>
<?php
}
}
/* {/block "username"} */
/* {block "menuHome"} */
class Block_9502571665ef5d097c98b85_93270071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_9502571665ef5d097c98b85_93270071',
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
/* {block "menuLogOut"} */
class Block_5280967415ef5d097c99910_41748191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_5280967415ef5d097c99910_41748191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
<?php
}
}
/* {/block "menuLogOut"} */
/* {block "content"} */
class Block_10042742585ef5d097c9a443_69513306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10042742585ef5d097c9a443_69513306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="banner" style="margin-top: -1em">
        <div class="content">

            <header>
                <h1>Sklep<br />
                    internetowy</h1>
                <p>Aenean ornare velit lacus</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
            <ul class="actions">
                <li><a href="#" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
		    <img src="images/pic10.jpg" alt="" />
		</span>
    </section>

    <section>
        <header class="major" style="float: left">
            <h2>Lista użytkowników</h2>
        </header>
        <div style=>
            <div class="table-wrapper" style="width: 800px; clear: both">
                <table>
                    <tr>
                        <td align="center"><h4>Login</h4></td>
                        <td align="center"><h4>Hasło</h4></td>
                        <td align="center"><h4>Imię</h4></td>
                        <td align="center"><h4>Nazwisko</h4></td>
                        <td align="center"><h4>Email</h4></td>
                        <td align="center"><h4>Rola</h4></td>
                        <td align="center"><h4></h4></td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["username"];?>
</td>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["password"];?>
</td>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["first_name"];?>
</td>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["last_name"];?>
</td>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
</td>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["role"];?>
</td>
                            <td align="right"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
" class="button">Usuń</a></td>
                            <td align="left"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userEdit/<?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
" class="button">Edytuj</a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </div>


    </section>
<?php
}
}
/* {/block "content"} */
}
