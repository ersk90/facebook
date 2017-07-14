<div id="friendbox">
  <?php  foreach ($all as $value) {
  foreach ($value as $key) { ?>
    <div class="row" style="margin-top: 10px;">
    <div class="col-md-2">
      <span><?php echo $this->Html->image('fblogo.png') ?></span>
    </div>
    <div class="col-md-10">
      <span><h5><?php echo $key['firstname'] ?></h5></span>
      <div class="row">
        <div class="col-md-5">
          <?php echo $this->Form->create(null,['url'=>['action'=>'confirm']]); ?>
          <?php echo $this->Form->input('sid',['type'=>'hidden','value'=>$key['uid']]); ?>
          <?php echo $this->Form->button('Confirm',['class'=>'btn btn-sm']); ?>
          <?php echo $this->Form->end(); ?>
        </div>
        <div class="col-md-5">
          <?php echo $this->Form->create(null,['url'=>['action'=>'cancel']]); ?>
          <?php echo $this->Form->input('sid',['type'=>'hidden','value'=>$key['uid']]); ?>
          <?php echo $this->Form->button('cancel',['class'=>'btn btn-sm']); ?>
          <?php echo $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
 <?php  } } ?>
  
</div>
<div class="container-fluid" style="margin-top: 70px;">
    <div class="col-md-1">
    </div>
    <div class="col-md-2" style="position: fixed;left: 160px; ">
      <p><?php echo $this->Html->image('fblogo.png',['id'=>'propic']) ?><span>User name</span></p>
      <ul class="" id="mylist">
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
        <li><i class="fa fa-user"></i>&nbspNews Feed</li>
      </ul>
    </div>
    <div class="col-md-5" style="position: relative; margin-left: 14%;">
      <div class="row"  style="background: lightgray">
        <ul id="post">
          <li><a href="#">create a post</a></li>
          <li><a href="#">Photo/ Vedio album</a></li>
          <li><a href="#">Live vedio</a></li>
        </ul>
      </div>
      <div class="row">
        <form>
          <input type="text" name="" placeholder="Share and update">
        <input type="submit" name="" value="post">
          </form>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="" style="height: 400px; width: 100%; background: white ">
          <p><?php echo $this->Html->image('fblogo.png',['id'=>'propic']) ?> <a href="">Ravi Kumar</a> with <a href="">Deepak Kinger</a> and <a href="">9 others.</a>
Yesterday at 22:24 · </p>
          <p>
            <?php echo $this->Html->image('fblogo.png') ?>
          </p>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="" style="height: 400px; width: 100%; background: white ">
          <p><?php echo $this->Html->image('fblogo.png',['id'=>'propic']) ?> <a href="">Ravi Kumar</a> with <a href="">Deepak Kinger</a> and <a href="">9 others.</a>
Yesterday at 22:24 · </p>
          <p>
            <?php echo $this->Html->image('fblogo.png') ?>
          </p>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="" style="height: 400px; width: 100%; background: white ">
          <p><?php echo $this->Html->image('fblogo.png',['id'=>'propic']) ?> <a href="">Ravi Kumar</a> with <a href="">Deepak Kinger</a> and <a href="">9 others.</a>
Yesterday at 22:24 · </p>
          <p>
            <?php echo $this->Html->image('fblogo.png') ?>
          </p>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="" style="height: 400px; width: 100%; background: white ">
          <p><?php echo $this->Html->image('fblogo.png',['id'=>'propic']) ?> <a href="">Ravi Kumar</a> with <a href="">Deepak Kinger</a> and <a href="">9 others.</a>
Yesterday at 22:24 · </p>
          <p>
            <?php echo $this->Html->image('fblogo.png') ?>
          </p>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="" style="height: 400px; width: 100%; background: white ">
          <p><?php echo $this->Html->image('fblogo.png',['id'=>'propic']) ?> <a href="">Ravi Kumar</a> with <a href="">Deepak Kinger</a> and <a href="">9 others.</a>
Yesterday at 22:24 · </p>
          <p>
            <?php echo $this->Html->image('fblogo.png') ?>
          </p>
        </div>
      </div>

    </div>
    <div class="col-md-2">aa</div>
    <div class="col-md-2">
      <!-- div style="height: 400px; width:300px; display: none; top:48%; left: 75%; background: blue; position: fixed; z-index: 6;" id="msgbox">
          <div class="row" style="background: lightgray; padding: 1%;"><h4>Username</h4></div>
          <div class="container-fluid" style="height: 70%; background: white;" id="msgdisp">
            <h6 style="float:right; margin-right: 20px; background: red; display: inline-block; padding: 5px; border-radius: 5px;" >hii how are you</h6>
          </div>
          <div class="container-fluid">
            <textarea style="height:300px" id="msgtext"></textarea>
          </div>
      </div> -->
    </div>
</div>
