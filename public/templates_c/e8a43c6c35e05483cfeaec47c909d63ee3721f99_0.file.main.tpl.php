<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-04 10:36:32
  from 'C:\xampp\htdocs\onlineStore\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed8b2909ed1f0_36710153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a43c6c35e05483cfeaec47c909d63ee3721f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\onlineStore\\app\\views\\templates\\main.tpl',
      1 => 1591259791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed8b2909ed1f0_36710153 (Smarty_Internal_Template $_smarty_tpl) {
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
<div style="margin-top: 30px; margin-right: 50px; text-align: right">
    <strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
</div>

<!-- Wrapper -->
<div id="wrapper">
    <!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3471378185ed8b2909c7ed4_68694496', 'messages');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404331445ed8b2909e5182_68564727', 'content');
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
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Strona główna</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow">Zarejestruj</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shoppingCartShow">Koszyk</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
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
/* {block 'messages'} */
class Block_3471378185ed8b2909c7ed4_68694496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_3471378185ed8b2909c7ed4_68694496',
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
class Block_1404331445ed8b2909e5182_68564727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1404331445ed8b2909e5182_68564727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php
}
}
/* {/block 'content'} */
}
