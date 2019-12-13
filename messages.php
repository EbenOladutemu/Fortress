<?php require 'db.php';
$fecth = mysqli_query($db, "SELECT * FROM messages WHERE status = 'publish' ORDER BY id DESC LIMIT 0, 3");
$fecth2 = mysqli_query($db, "SELECT * FROM messages WHERE status = 'publish' ORDER BY id DESC LIMIT 3, 100");
?>
<title>The Fortress International Church - Messages</title>
<?php include 'includes/head.php';?>
<?php include 'includes/nav-messages.php';?>

<style>
  .card-body{
    padding-bottom: 0rem;
    padding-top: 0rem;
  }
  .block-11 .owl-stage {
     padding-top: 0px; 
     /*padding-bottom: 0px; */
  }
  .owl-stage-outer {
      height: 385px!important;
  }
  .owl-stage{
    padding-left: 0px!important;
  }
  .owl-nav{
    bottom: -75px!important;
  }
</style>

<div class="block-31" style="position: relative;">
  <div id="sync" class="owl-carousel loop-block-31 block-30 item" data-stellar-background-ratio="0.5">
    <div class="block-30 overlay-header item" style="background-image: url('img/Random/20190609113336__MG_9563.jpg');">
      <section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">Get Our Messages</h2>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <h2>Audio Messages</h2>
      </div>
    </div>
    <div class="row">
            <?php
                while ($row2=mysqli_fetch_array($fecth)) {
                  $id = $row2['id'];
                  $b = $row2['msg_title'];
                  $c = $row2['msg_pics'];
                  $d = $row2['msg_name'];
            ?>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="post-entry">
          <img src="admin/pages/messages_pics/<?php echo $c?>" alt="<?php echo $c?>" class="img-fluid">
          <a href="<?php echo $d?>" class="mb-3 img-wrap"><span class="date border-tl-download"><i class="fa fa-download"></i></span></a>
          <h3><?php echo $b;?></h3>
          <!-- <p>Description</p> -->
        </div>
      </div>
      <?php
    }
    ?>
    </div>
  </div>

  <!-- Messages for each month can placed in this section. Just copy and edit as appropriate. Check the More Messages code as an example -->
  <!-- <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>December Messages</h2>
        </div>
      </div>
      <div class="col-md-12 block-11">
        <div class="nonloop-block-11 owl-carousel">

          Copy this div as many times as needed and edit (Comment this)
          <div class="card fundraise-item">
            <div class="post-entry">
              <img src="img/messages/4 IMPORTANT VIRTUES.jpg" alt="4 IMPORTANT VIRTUES" class="img-fluid">
              <a href="" class="mb-3 img-wrap"><span class="date border-tl-download"><i class="fa fa-download"></i></span></a>
            </div>
            <div class="card-body">
              <h5 class="text-center">4 IMPORTANT VIRTUES</h5>
            </div>
          </div>
          End of div (Comment this too)

        </div>
      </div>
    </div>
  </div> -->
  <!-- End of Messages for the month -->
    
  <!-- More Messages -->
  <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>More Messages</h2>
        </div>
      </div>
      <div class="col-md-12 block-11">
        <div class="nonloop-block-11 owl-carousel">
          <!-- <div class="card fundraise-item">
            <div class="post-entry">
              <img src="img/messages/4 IMPORTANT VIRTUES.jpg" alt="4 IMPORTANT VIRTUES" class="img-fluid">
              <a href="#" class="mb-3 img-wrap"><span class="date border-tl-download"><i class="fa fa-download"></i></span></a>
            </div>
            <div class="card-body">
              <h5 class="text-center">4 IMPORTANT VIRTUES</h5>
            </div>
          </div> -->
           <?php
            while ($row2=mysqli_fetch_array($fecth2)) {
              $id = $row2['id'];
              $b2 = $row2['msg_title'];
              $c2 = $row2['msg_pics'];
              $d2 = $row2['msg_name'];
            ?>
          <div class="card fundraise-item">
            <div class="post-entry">
                <img src="admin/pages/messages_pics/<?php echo $c2?>" alt="<?php echo $c?>" class="img-fluid">
              <a href="<?php echo $d2?>" class="mb-3 img-wrap"><span class="date border-tl-download"><i class="fa fa-download"></i></span></a>
            </div>
            <div class="card-body">
              <h5 class="text-center"><?php echo $b2;?></h5>
            </div>
          </div>
          <?php
        }
          ?>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php';?>