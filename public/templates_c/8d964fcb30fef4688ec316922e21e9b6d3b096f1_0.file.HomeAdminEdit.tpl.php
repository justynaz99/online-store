<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 14:40:57
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeAdminEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee76c59a03d60_71023421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d964fcb30fef4688ec316922e21e9b6d3b096f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeAdminEdit.tpl',
      1 => 1592224856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee76c59a03d60_71023421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5564854125ee76c599cfd26_08868725', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8208135315ee76c599dc5f7_83571491', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12053214065ee76c599dfe40_53353699', "menuLogOut");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1428332985ee76c599e31c2_11486920', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_5564854125ee76c599cfd26_08868725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_5564854125ee76c599cfd26_08868725',
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
class Block_8208135315ee76c599dc5f7_83571491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_8208135315ee76c599dc5f7_83571491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeSeller">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuLogOut"} */
class Block_12053214065ee76c599dfe40_53353699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_12053214065ee76c599dfe40_53353699',
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
class Block_1428332985ee76c599e31c2_11486920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1428332985ee76c599e31c2_11486920',
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
        <header class="major" style="float:left">
            <h2>Lista użytkowników</h2>
        </header>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeAdminSave/<?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
" class="button">Zapisz</a></td>
        <div>
            <div class="table-wrapper" style="width: 1000px; clear:both">
                <table>
                    <tr>
                        <td align="center"><h4>ID</h4></td>
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
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
</td>
                            <td align="center"><input style="width: 100px" type="text" name="username" id="username" placeholder="Login" /></td>
                            <td align="center"><input style="width: 100px" type="text" name="password" id="password" placeholder="Hasło" /></td>
                            <td align="center"><input style="width: 100px" type="text" name="first_name" id="first_name" placeholder="Imię" /></td>
                            <td align="center"><input style="width: 100px" type="text" name="last_name" id="last_name" placeholder="Nazwisko" /></td>
                            <td align="center"><input style="width: 100px" type="text" name="email" id="email" placeholder="Email" /></td>
                            <td align="center"><input style="width: 100px" type="text" name="role" id="role" placeholder="Rola" /></td>
                            <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
" class="button">Usuń</a></td>
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
