<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'Dashboard1';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset()?>
    <meta name="viewport"
	content="width=device-width, initial-scale=1.0">
<title>
        <?= $cakeDescription ?>:
        SecureTech Survellance Dashboard
    </title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/bootstrap-reset.css" rel="stylesheet" />
    <link href="css/Site.css" rel="stylesheet" />
<!--external css-->
<link href="js/assets/font-awesome/css/font-awesome.css"
	rel="stylesheet" />

<link href="css/style.css" rel="stylesheet" />
<link href="css/style-responsive.css" rel="stylesheet" />

<!--       <script type="text/javascript" src="//www.google.com/jsapi"></script> -->

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"
	type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--    <script type="text/javascript" src="http://malsup.github.io/jquery.cycle.all.js"></script>--%> -->

<script src="css/Content/vticker-master/jquery.vticker.js"
	charset="utf-8" type="text/javascript"></script>
<script type="text/javascript">
//        //$(document).ready(function () {
//        //    $('.slid').cycle({
//        //        fx: 'turnDown'
//        //    });
//        //});

//        $(function () {
//            $('#newstick').vTicker();
//        });
    </script>

</head>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../"> <span
					class="glyphicon glyphicon-chevron-left"></span>
				</a> <a class="navbar-brand" href="./"><img src=""> SecureTech Survillance System</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="dashboard">Screen 1</a></li>
					<li><a href="dashboard/dashboard1">Screen 2</a></li>
					
					<li><a
						href="users/logout">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
<body class="economy-bg">
	<!--     <nav class="top-bar expanded" data-topbar role="navigation"> -->
	<!--         <ul class="title-area large-3 medium-4 columns"> -->
	<!--             <li class="name"> -->
	
	<a href="" style="float:right"> logout</a>
	<!--             </li> -->
	<!--         </ul> -->
	<!--         <section class="top-bar-section"> -->
	<!--             <ul class="right"> -->
	<!--                 <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li> -->
	<!--                 <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li> -->
	<!--             </ul> -->
	<!--         </section> -->
	<!--     </nav> -->
    <?= $this->Flash->render()?>
   
        <?= $this->fetch('content')?>
    
    <footer> </footer>
</body>
</html>
