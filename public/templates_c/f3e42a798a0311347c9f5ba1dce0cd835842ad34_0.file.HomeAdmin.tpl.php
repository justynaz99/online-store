<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:37:23
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eddf8c3706c02_89552464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e42a798a0311347c9f5ba1dce0cd835842ad34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeAdmin.tpl',
      1 => 1591605397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eddf8c3706c02_89552464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10143149655eddf8c36f0f18_73331907', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14161241945eddf8c36f5f23_31558942', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4608462215eddf8c36f70d2_87283796', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15855954775eddf8c36f7fb8_40969632', "menuLogOut");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19007129855eddf8c36f8fa6_18410581', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_10143149655eddf8c36f0f18_73331907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_10143149655eddf8c36f0f18_73331907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 30px; margin-right: 50px; text-align: right">
        <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
    </div>
<?php
}
}
/* {/block "username"} */
/* {block "menuHome"} */
class Block_14161241945eddf8c36f5f23_31558942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_14161241945eddf8c36f5f23_31558942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeAdmin">Strona główna</a></li>
<?php
}
}
/* {/block "menuHome"} */
/* {block "menuShoppingCart"} */
class Block_4608462215eddf8c36f70d2_87283796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_4608462215eddf8c36f70d2_87283796',
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
class Block_15855954775eddf8c36f7fb8_40969632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_15855954775eddf8c36f7fb8_40969632',
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
class Block_19007129855eddf8c36f8fa6_18410581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19007129855eddf8c36f8fa6_18410581',
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

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addToList" style="width: 600px; margin-top: 1em" method="post">
            <h3>Dodaj produkt do listy</h3>
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="name_product" id="name_product" value="" placeholder="Nazwa produktu" />
                </div>
                <br>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="price_product" id="price_product" value="" placeholder="Cena produktu" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Dodaj" class="button" /></li>
                        <li><input type="reset" value="Resetuj" /></li>
                    </ul>
                </div>
            </div>
        </form>


        <div class="posts" style="margin-top: 1em">
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
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteFromList/<?php echo $_smarty_tpl->tpl_vars['p']->value["id_product"];?>
" class="button">Usuń produkt z listy</a></li>
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
