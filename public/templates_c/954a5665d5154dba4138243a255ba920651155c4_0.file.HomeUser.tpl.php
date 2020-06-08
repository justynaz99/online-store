<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:39:56
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eddf95c8c0189_20969571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954a5665d5154dba4138243a255ba920651155c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeUser.tpl',
      1 => 1591605595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eddf95c8c0189_20969571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13522224395eddf95c8ac3d4_96694982', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1373116265eddf95c8b22e0_93448768', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18664747075eddf95c8b3416_92212339', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10551975025eddf95c8b43a1_55208669', "menuLogOut");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8306797965eddf95c8b5521_09953556', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3820668625eddf95c8b5c06_87670078', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_13522224395eddf95c8ac3d4_96694982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_13522224395eddf95c8ac3d4_96694982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 30px; margin-bottom: -50px; margin-right: 50px; text-align: right">
        <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
    </div>
<?php
}
}
/* {/block "username"} */
/* {block "menuHome"} */
class Block_1373116265eddf95c8b22e0_93448768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_1373116265eddf95c8b22e0_93448768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeUser">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuShoppingCart"} */
class Block_18664747075eddf95c8b3416_92212339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_18664747075eddf95c8b3416_92212339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shoppingCartShow">Koszyk</a></li>
<?php
}
}
/* {/block "menuShoppingCart"} */
/* {block "menuLogOut"} */
class Block_10551975025eddf95c8b43a1_55208669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_10551975025eddf95c8b43a1_55208669',
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
/* {block "header"} */
class Block_8306797965eddf95c8b5521_09953556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_8306797965eddf95c8b5521_09953556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="padding-bottom: 3em">
        <header id="header" style="padding-top: 20px">
            <a href="#" class="logo"><strong>Sklep</strong> internetowy</a>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
            </ul>
        </header>
    </div>
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_3820668625eddf95c8b5c06_87670078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3820668625eddf95c8b5c06_87670078',
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
        <header class="major">
            <h2>Ipsum sed dolor</h2>
        </header>
        <div class="posts" style="margin-top: -1em">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <article>
                    <a href="#" class="image"><img src="images/pic<?php echo $_smarty_tpl->tpl_vars['p']->value["id_product"];?>
.jpg" alt="" /></a>
                    <h3><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
 zł</p>
                    <ul class="actions">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addItem/<?php echo $_smarty_tpl->tpl_vars['p']->value["id_product"];?>
" class="button">Dodaj do koszyka</a></li>
                    </ul>
                </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
