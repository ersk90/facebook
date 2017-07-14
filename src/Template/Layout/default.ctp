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

$cakeDescription = 'Facebook Demo: log in or sign up';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('reset.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('my.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->script('https://code.jquery.com/jquery-3.2.1.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') ?>
    <!-- <?php echo $this->Html->script('jquery_lib.js') ?> -->
    <!-- <?php echo $this->Html->script('bootstrap.js') ?> -->
    <?= $this->Html->script('fbjs.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script type="text/javascript">
      $(document).ready(function(){

      });
    </script>

</head>
<body style="background: #D7DCEA">
    <nav class="navbar navbar-inverse navbar-fixed-top" id="homeMenu">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Facebook demo</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search facebook" style="width:300px; height: 30px;">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">User <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#" id="userBtn"><i class="fa fa-user"></i><i class="badge"><?php echo $this->request->session()->read('info'); ?></i></a></li>
        <li><a href="#" id="msgicon"><i class="fa fa-comments"></i></a></li>
        <li><a href=""><i class="fa fa-firefox"></i></a></li>
        <li><?php echo $this->Html->link('Online user',['action'=>'checkonline']) ?></li>
        <li><?php echo $this->Html->link('Log out',['action'=>'logout']) ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ss<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>

          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $this->Url->build(['action'=>'alluser']) ?>">All person</a></li>
      </ul>
    </div>
  </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container-fluid">
        <?= $this->fetch('content') ?>
    </div>
    <div style="height: 400px; width:300px; display: none; top:48%; left: 75%; background: blue; position: fixed; z-index: 6;" id="msgbox">
          <div class="row" style="background: lightgray; padding: 1%;"><h4>Username</h4></div>
          <div class="container-fluid" style="height: 70%; background: white;" id="msgdisp">
            <h6 style="float:right; margin-right: 20px; background: red; display: inline-block; padding: 5px; border-radius: 5px;" >hii how are you</h6>
          </div>
          <div class="container-fluid">
            <textarea style="height:300px" id="msgtext"></textarea>
          </div>
      </div>
    <footer>
 
    </footer>
</body>
</html>
