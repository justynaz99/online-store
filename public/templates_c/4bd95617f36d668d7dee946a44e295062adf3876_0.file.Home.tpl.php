<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 08:27:37
  from 'C:\xampp\htdocs\onlineStore\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed5f159054391_16317206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd95617f36d668d7dee946a44e295062adf3876' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\Home.tpl',
      1 => 1591079255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed5f159054391_16317206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20607283835ed5f1590339f9_80974637', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_20607283835ed5f1590339f9_80974637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20607283835ed5f1590339f9_80974637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <section id="banner">
        <div class="content">

            <header>
                <h1>Online<br />
                    store</h1>
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
        <div class="posts">
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
</p>
                    <ul class="actions">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addItem/<?php echo $_smarty_tpl->tpl_vars['p']->value["id_product"];?>
" class="button">Add to shopping cart</a></li>
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
