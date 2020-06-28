<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-28 22:37:37
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeSeller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef8ff9102d2e6_90414752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55efe13cf3ecd37fe8188bce75fc30986a1177c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeSeller.tpl',
      1 => 1593376128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef8ff9102d2e6_90414752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11200962595ef8ff9101a6a4_51063535', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7721248265ef8ff9101f1d1_16326670', "menuHome");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2735477735ef8ff91020213_66607289', "menuLogOut");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_433742985ef8ff91021067_01044959', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_11200962595ef8ff9101a6a4_51063535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_11200962595ef8ff9101a6a4_51063535',
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
class Block_7721248265ef8ff9101f1d1_16326670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_7721248265ef8ff9101f1d1_16326670',
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
class Block_2735477735ef8ff91020213_66607289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_2735477735ef8ff91020213_66607289',
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
class Block_433742985ef8ff91021067_01044959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_433742985ef8ff91021067_01044959',
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
        </div>
        <span class="image object">
		    <img src="images/pic10.jpg" alt="" />
		</span>
    </section>

    <section>
        <header class="major">
            <h2>Lista produktów</h2>
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
                </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <br>
        <ul class="pagination">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                <li><span class="button disabled">Previous page</span></li>
            <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="button">Previous page</a></li>
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable2 == $_prefixVariable3) {?>
                <li><span class="button disabled">Previous page</span></li>
            <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="button">Next page</a></li>
            <?php }?>
        </ul>
    </section>
<?php
}
}
/* {/block "content"} */
}
