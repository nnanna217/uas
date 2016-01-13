<?php

use Cake\Core\Configure;

/**
 * Default `html` block.
 */
if (!$this->fetch('html')) {
    $this->start('html');
    printf('<html lang="%s" class="no-js">', Configure::read('App.language'));
    $this->end();
}

/**
 * Default `title` block.
 */
if (!$this->fetch('title')) {
    $this->start('title');
    echo Configure::read('App.title');
    $this->end();
}

/**
 * Default `footer` block.
 */
if (!$this->fetch('tb_footer')) {
    $this->start('tb_footer');
    printf('&copy;%s %s', date('Y'), Configure::read('App.title'));
    $this->end();
}

/**
 * Default `body` block.
 */
$this->prepend('tb_body_attrs', ' class="' . implode(' ', array($this->request->controller, $this->request->action)) . '" ');
if (!$this->fetch('tb_body_start')) {
    $this->start('tb_body_start');
    echo '<body' . $this->fetch('tb_body_attrs') . '>';
    $this->end();
}
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
if (!$this->fetch('tb_body_end')) {
    $this->start('tb_body_end');
    echo '</body>';
    $this->end();
}

/**
 * Prepend `meta` block with `author` and `favicon`.
 */
$this->prepend('meta', $this->Html->meta('author', null, array('name' => 'author', 'content' => Configure::read('App.author'))));
$this->prepend('meta', $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon')));

/**
 * Prepend `css` block with TwitterBootstrap and Bootflat stylesheets and append
 * the `$html5Shim`.
 */
$html5Shim =
<<<HTML
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
HTML;
$this->prepend('css', $this->Html->css(['bootstrap/bootstrap','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css']));
$this->append('css', $html5Shim);

$this->prepend('script', $this->Html->script(['jquery/jquery', 'bootstrap/bootstrap']));

?>
<!DOCTYPE html>

<?= $this->fetch('html') ?>

    <head>
    
    <style>
<!--
.form-bg{
    background-color:#fff;
    height: 400px;
}
.header{
    padding: 1em;

    background-color:#2EA7EB;
    /*border-bottom-left-radius:100%;
     border-bottom-right-radius:100%;*/
   
  
}
.form-x{
  /*padding-left:20px;*/
   padding:2em 4em;
}

 .icon-user{
    display:block;
   margin: 0 0 0 40%;
   text-align:center;
    width: 70px;
    height:70px;
    line-height:70px;
    vertical-align:middle;   
    font-size:50px;
}
 .set-icon{
    border-radius:50px;
}
 .set-icon:hover{
     border-radius:1%;
 }
 .bg-color-grey{
    background-color:#cccccc;
    color:#fff;
}

-->
</style>

        <?= $this->Html->charset() ?>

        <title><?= $this->fetch('title') ?></title>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

    </head>

    <?php
    echo $this->fetch('tb_body_start');
    echo $this->fetch('tb_flash');
    echo $this->fetch('content');
    echo $this->fetch('tb_footer');
    echo $this->fetch('script');
    echo $this->fetch('tb_body_end');
    ?>

</html>
