<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title> Confirmation Details</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <header id="header">
                <a href="index.html" class="logo"><strong>Business Of Mindfulness</strong> by Southern New Hampshire
                    University</a>
                <ul class="icons">
                    <li><span id="demo1"></span></li>
                    <li><span id="demo2"></span></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                </ul>
            </header>
            <section>
                <div id="printpart">
                    <section>
                        <header class="main">
                            <h3><?php echo $_GET['text']?></h3>
                            <h4> Registration No:&nbsp&nbsp<?php echo $_GET ['confirmationno'] ?></h4>
                            <h4> First Naame:&nbsp&nbsp<?php echo $_GET ['fname'] ?></h4>
                            <h4> Last Name:&nbsp&nbsp<?php echo $_GET ['lname'] ?></h4>
                            <h4> Phone Number:&nbsp&nbsp<?php echo $_GET ['phonenumber'] ?></h4>
                            <h4> Email Id:&nbsp&nbsp<?php echo $_GET ['email'] ?></h4>
                        </header>
                    </section>

                    <!-- Table -->

                    <div class="row gtr-200">
                        <div class="col-6 col-12-medium">
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                    Thursday
                                    </thead>
                                    <tr>
                                        <td> Session1:&nbsp&nbsp <?php echo @$_GET[radio1] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Session2:&nbsp&nbsp <?php echo @$_GET[radio2] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Session3:&nbsp&nbsp <?php echo @$_GET[radio3] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Keynote:&nbsp&nbsp <?php echo @$_GET[radio4] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Mindful Lunch:&nbsp&nbsp <?php echo @$_GET[radio5] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6 col-12-medium">
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                    Friday
                                    </thead>
                                    <tr>
                                        <td> Session1:&nbsp&nbsp <?php echo @$_GET[radio6] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Session2:&nbsp&nbsp <?php echo @$_GET[radio7] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Session3:&nbsp&nbsp <?php echo @$_GET[radio8] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Keynote:&nbsp&nbsp <?php echo @$_GET[radio9] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Mindful Lunch:&nbsp&nbsp <?php echo @$_GET[radio10] ?></td>
                                    </tr>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="myFunction('printpart')">Print this page</button>
            </section>
        </div>
    </div>


    <!-- Sidebar -->
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
            <section id="search" class="alt">
                <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search"/>
                </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="index.html">Homepage</a></li>
                    <li><a href="details.html">Details</a></li>
                    <li>
                        <span class="opener">Mindfulness Team</span>
                        <ul>
                            <li><a href="#">Keynote Speakers </a></li>
                            <li><a href="#">Other Speakers</a></li>
                        </ul>
                    </li>
                    <li><a href="registration.html">Registration</a></li>

                </ul>
            </nav>

            <!-- Section -->

            <section>
                <header class="major">
                    <h2>Get in touch</h2>
                </header>
                <p>Contact us to know more about the event and why you should register</p>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">information@mindfulness.com</a></li>
                    <li class="icon solid fa-phone">(603)4503-345</li>
                    <li class="icon solid fa-home">2500 N River Rd,<br/>
                        Hooksett, NH 03106
                    </li>
                </ul>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; Untitled. All rights reserved, Developer: Shova Niraula </p>
            </footer>

        </div>
    </div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/datetime.js"></script>
<script src="assets/js/printconfirmation.js"></script>

</body>
</html>