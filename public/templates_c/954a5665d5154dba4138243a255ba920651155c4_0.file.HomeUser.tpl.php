<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-28 22:38:00
  from 'C:\xampp\htdocs\onlineStore\app\views\HomeUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef8ffa86a2337_36893010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954a5665d5154dba4138243a255ba920651155c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\HomeUser.tpl',
      1 => 1593376128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef8ffa86a2337_36893010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13387759175ef8ffa8680048_76772664', "username");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18084208505ef8ffa86884d8_35237706', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6870515525ef8ffa8689b54_13344003', "menuShoppingCart");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4000432395ef8ffa868ae07_36124604', "menuLogOut");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9240024985ef8ffa868c059_82565054', "menuOrders");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1972715075ef8ffa868d2a5_20166363', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18569760145ef8ffa868dd91_27402373', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "username"} */
class Block_13387759175ef8ffa8680048_76772664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_13387759175ef8ffa8680048_76772664',
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
class Block_18084208505ef8ffa86884d8_35237706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_18084208505ef8ffa86884d8_35237706',
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
/* {block "menuShoppingCart"} */
class Block_6870515525ef8ffa8689b54_13344003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_6870515525ef8ffa8689b54_13344003',
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
class Block_4000432395ef8ffa868ae07_36124604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_4000432395ef8ffa868ae07_36124604',
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
/* {block "menuOrders"} */
class Block_9240024985ef8ffa868c059_82565054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuOrders' => 
  array (
    0 => 'Block_9240024985ef8ffa868c059_82565054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orderShow">Zamówienia</a></li>
<?php
}
}
/* {/block "menuOrders"} */
/* {block "header"} */
class Block_1972715075ef8ffa868d2a5_20166363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1972715075ef8ffa868d2a5_20166363',
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
/* {block 'backToList'} */
class Block_2674722225ef8ffa86a1714_11347279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block 'backToList'} */
/* {block "content"} */
class Block_18569760145ef8ffa868dd91_27402373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18569760145ef8ffa868dd91_27402373',
  ),
  'backToList' => 
  array (
    0 => 'Block_2674722225ef8ffa86a1714_11347279',
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
        <div class="row gtr-200">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchShow" method="post" style="width: 400px">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['productForm']->value->name;?>
" placeholder="Nazwa produktu" /><br>
                    <input type="submit" value="Szukaj" class="primary" />
                </div>
            </form>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home" method="post" style="width: 400px">
                <div class="col-6 col-12-xsmall">
                    <select name="option" id="option">
                        <option value="">- Filtruj -</option>
                        <option value="1">Po cenie</option>
                        <option value="2">Alfabetycznie</option>
                    </select><br>
                    <input type="submit" value="Filtruj" class="primary"/><br>
                </div>
            </form>
        </div>

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

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2674722225ef8ffa86a1714_11347279', 'backToList', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block "content"} */
}
