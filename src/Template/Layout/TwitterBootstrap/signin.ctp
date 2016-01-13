<?php
$this->Html->css(['BootstrapUI.signin','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'], ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', array($this->request->controller, $this->request->action)) . '" ');
$this->start('tb_body_start');
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
?>

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
<body <?= $this->fetch('tb_body_attrs') ?>>
    <div class="container">
<?php
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->start('tb_footer');
echo ' ';
$this->end();

$this->append('content', '</div>');
echo $this->fetch('content');
