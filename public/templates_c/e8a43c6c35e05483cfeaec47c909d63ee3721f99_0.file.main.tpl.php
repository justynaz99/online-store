<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:39:30
  from 'C:\xampp\htdocs\onlineStore\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eddf94230e761_49184404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a43c6c35e05483cfeaec47c909d63ee3721f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\templates\\main.tpl',
      1 => 1591605567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eddf94230e761_49184404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Sklep</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css"/>
</head>


<body class="is-preload">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11492408265eddf9422fadd6_44701812', 'username');
?>


<!-- Wrapper -->
<div id="wrapper">
    <!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            <div style="padding-bottom: 3em">
                <header id="header" style="padding-top: 60px">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9595313435eddf9422fbb18_88825465', 'messages');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7030439735eddf94230a706_40018563', 'content');
?>


            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Search -->
                    <section id="search" class="alt">
                        <form method="post" action="#">
                            <input type="text" name="query" id="query" placeholder="Szukaj" />
                        </form>
                    </section>

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>Menu</h2>
                        </header>
                        <ul>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7787834215eddf94230ae31_86612013', 'menuHome');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11182776395eddf94230b469_02269188', 'menuLogIn');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21425156425eddf94230ba83_87667152', 'menuRegistration');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6206834255eddf94230c083_38424241', 'menuShoppingCart');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3638005715eddf94230c676_55738237', 'menuLogOut');
?>

                        </ul>
                    </nav>

                    <!-- Section -->

                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Kontakt</h2>
                        </header>
                        <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="contact">
                            <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                            <li class="icon solid fa-phone">(000) 000-0000</li>
                            <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                                Nashville, TN 00000-0000</li>
                        </ul>
                    </section>

                    <!-- Footer -->
                    <footer id="footer">
                        <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                    </footer>

                </div>

                    <!-- Scripts -->
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>
            </div>

        </div>


    </div>

</div>


</body>
</html><?php }
/* {block 'username'} */
class Block_11492408265eddf9422fadd6_44701812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'username' => 
  array (
    0 => 'Block_11492408265eddf9422fadd6_44701812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'username'} */
/* {block 'messages'} */
class Block_9595313435eddf9422fbb18_88825465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_9595313435eddf9422fbb18_88825465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                    <div class="messages">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                                <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>" ><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_7030439735eddf94230a706_40018563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7030439735eddf94230a706_40018563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php
}
}
/* {/block 'content'} */
/* {block 'menuHome'} */
class Block_7787834215eddf94230ae31_86612013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuHome' => 
  array (
    0 => 'Block_7787834215eddf94230ae31_86612013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuHome'} */
/* {block 'menuLogIn'} */
class Block_11182776395eddf94230b469_02269188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogIn' => 
  array (
    0 => 'Block_11182776395eddf94230b469_02269188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuLogIn'} */
/* {block 'menuRegistration'} */
class Block_21425156425eddf94230ba83_87667152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuRegistration' => 
  array (
    0 => 'Block_21425156425eddf94230ba83_87667152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuRegistration'} */
/* {block 'menuShoppingCart'} */
class Block_6206834255eddf94230c083_38424241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuShoppingCart' => 
  array (
    0 => 'Block_6206834255eddf94230c083_38424241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuShoppingCart'} */
/* {block 'menuLogOut'} */
class Block_3638005715eddf94230c676_55738237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLogOut' => 
  array (
    0 => 'Block_3638005715eddf94230c676_55738237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuLogOut'} */
}
