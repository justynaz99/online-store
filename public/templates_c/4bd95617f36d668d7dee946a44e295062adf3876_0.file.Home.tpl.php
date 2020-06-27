<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 10:33:55
  from 'C:\xampp\htdocs\onlineStore\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef7047302caf1_40702059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd95617f36d668d7dee946a44e295062adf3876' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Home.tpl',
      1 => 1593246823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7047302caf1_40702059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4941217565ef70473017d30_05955856', "menuHome");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17092918375ef7047301eed9_83758642', "menuLogIn");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3030809545ef704730200e5_72062643', "menuRegistration");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3451380365ef704730210d3_58447582', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "menuHome"} */
class Block_4941217565ef70473017d30_05955856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_4941217565ef70473017d30_05955856',
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
class Block_17092918375ef7047301eed9_83758642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_17092918375ef7047301eed9_83758642',
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
class Block_3030809545ef704730200e5_72062643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_3030809545ef704730200e5_72062643',
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
/* {block 'backToList'} */
class Block_13895550755ef7047302c141_89046941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block 'backToList'} */
/* {block "content"} */
class Block_3451380365ef704730210d3_58447582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3451380365ef704730210d3_58447582',
  ),
  'backToList' => 
  array (
    0 => 'Block_13895550755ef7047302c141_89046941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="banner" style="margin-top: -1em">
        <div class="content">

            <header>
                <h1>Sklep<br/>
                    internetowy</h1>
                <p>Aenean ornare velit lacus</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue.
                Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus
                nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor
                sit nullam.</p>
            <ul class="actions">
                <li><a href="#" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
		    <img src="images/pic10.jpg" alt=""/>
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
" placeholder="Nazwa produktu"/><br>
                    <input type="submit" value="Szukaj" class="primary"/><br>
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
.jpg" alt=""/></a>
                    <h3><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
 zł</p>

                </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13895550755ef7047302c141_89046941', 'backToList', $this->tplIndex);
?>


    </section>
<?php
}
}
/* {/block "content"} */
}
