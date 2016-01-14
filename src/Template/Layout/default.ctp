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
        NSA Surveillance
    </title>



    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap/bootstrap.min.css','Site.css','metisMenu/dist/metisMenu.min.css',
        'timeline.css','sb-admin-2.css','morrisjs/morris.css']) ?>
    <!-- MetisMenu CSS -->
    <!--     <link href="../css/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Timeline CSS -->
    <!--     <link href="../css/timeline.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <!--     <link href="../css/sb-admin-2.css" rel="stylesheet"> -->

    <!-- Morris Charts CSS -->
    <!--     <link href="../css/morrisjs/morris.css" rel="stylesheet"> -->

    <?= $this->Html->script(['jquery/jquery.min.js']);?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="huge"><a style="" class="navbar-brand" href="/"><b> NSA DASHBOARD</b></a></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li ><?= $this->Html->link(__('Sentiment Analysis'), ['controller'=>'dashboard','action' => 'dashboard2']) ?></li>
                <li ><?= $this->Html->link(__('Revenue Assurance'), ['controller'=>'dashboard','action' => 'revenue']) ?></li>
                <li ><?= $this->Html->link(__('Money Laundering'), ['controller'=>'dashboard','action' => 'money']) ?></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li ><?= $this->Html->link(__('New Feed'), ['controller'=>'feeds','action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('All Drones'), ['controller'=>'feeds','action' => 'index']) ?></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?= $this->Flash->render() ?>
<section class="container-fluid">
    <body class="secure_bg">
    <?= $this->fetch('content') ?>

    <footer>
        <?= $this->Html->script(['bootstrap/bootstrap.js', 'dashboard.js']); ?>
    </footer>
    </body>
</html>
