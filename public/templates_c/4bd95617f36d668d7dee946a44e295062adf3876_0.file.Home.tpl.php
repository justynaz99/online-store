<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:36:43
  from 'C:\xampp\htdocs\onlineStore\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eddf89b271049_38872214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd95617f36d668d7dee946a44e295062adf3876' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Home.tpl',
      1 => 1591605397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eddf89b271049_38872214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6966954645eddf89b259f37_26224424', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16407942685eddf89b261a53_04096909', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4386857705eddf89b263015_90037165', "menuRegistration");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226066475eddf89b2643e5_59011463', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_6966954645eddf89b259f37_26224424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_6966954645eddf89b259f37_26224424',
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
class Block_16407942685eddf89b261a53_04096909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_16407942685eddf89b261a53_04096909',
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
class Block_4386857705eddf89b263015_90037165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_4386857705eddf89b263015_90037165',
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
class Block_226066475eddf89b2643e5_59011463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_226066475eddf89b2643e5_59011463',
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
