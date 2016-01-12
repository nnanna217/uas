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



    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap/bootstrap.min.css','Site.css']) ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<<<<<<< HEAD
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Secure Tech Surveillance</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li ><?= $this->Html->link(__('Dashboard'), ['controller'=>'dashboard','action' => 'dashboard']) ?></li>
        <li ><?= $this->Html->link(__('New Feed'), ['controller'=>'feeds','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Drones'), ['controller'=>'feeds','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Add Users'), ['controller'=>'users','action' => 'add']) ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
<body class="secure_bg">
        <?= $this->fetch('content') ?>

    <footer>
        <?= $this->Html->script(['jquery.js','bootstrap/bootstrap.js', 'dashboard.js']); ?>
    </footer>
</body>
</html>
