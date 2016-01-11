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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    
    <title>Layouts &raquo; Quarter Grid</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/keen/keen-dashboards.css" />

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
				</a> <a class="navbar-brand" href="./">SecureTech Survillance System</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="dashboard">Screen 1</a></li>
					<li><a href="dashboard/dashboard1">Screen 2</a></li>
					
					<li><a
						href="../users/logout">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	
<body>
<!--     <nav class="top-bar expanded" data-topbar role="navigation"> -->
<!--         <ul class="title-area large-3 medium-4 columns"> -->
<!--             <li class="name"> -->
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
<!--             </li> -->
<!--         </ul> -->
<!--         <section class="top-bar-section"> -->
<!--             <ul class="right"> -->
<!--                 <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li> -->
<!--                 <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li> -->
<!--             </ul> -->
<!--         </section> -->
<!--     </nav> -->
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
    </footer>
</body>
</html>
