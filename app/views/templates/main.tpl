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
    <link rel="stylesheet" href="{$conf->app_url}/css/main.css"/>
</head>


<body class="is-preload">

{block name=username}{/block}

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

            {block name=messages}
                {if $msgs->isMessage()}
                    <div class="messages">
                        <ul>
                            {foreach $msgs->getMessages() as $msg}
                                {strip}
                                    <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}" >{$msg->text}</li>
                                {/strip}
                            {/foreach}
                        </ul>
                    </div>
                {/if}
            {/block}

            {block name=content}

            {/block}

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
                            {block name=menuHome}{/block}
                            {block name=menuLogIn}{/block}
                            {block name=menuRegistration}{/block}
                            {block name=menuShoppingCart}{/block}
                            {block name=menuLogOut}{/block}
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
                    <script src="{$conf->app_url}/js/jquery.min.js"></script>
                    <script src="{$conf->app_url}/js/browser.min.js"></script>
                    <script src="{$conf->app_url}/js/breakpoints.min.js"></script>
                    <script src="{$conf->app_url}/js/util.js"></script>
                    <script src="{$conf->app_url}/js/main.js"></script>
            </div>

        </div>


    </div>

</div>


</body>
</html>