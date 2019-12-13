<title>The Fortress International Church - Articles & e-Books</title>
<?php include 'includes/head.php';?>
<?php include 'includes/nav-articles.php';
require 'db.php';
$fecth3 = mysqli_query($db, "SELECT * FROM ebook WHERE status = 'publish' ORDER BY id DESC ");
?>
<div class="block-31 overl" style="position: relative;">
  <div id="sync" class="owl-carousel loop-block-31 block-30 item" data-stellar-background-ratio="0.5">
    <div class="block-30 overlay-header item" style="background-image: url('img/Pst-Kelvin/20190602105457__MG_9144.jpg');">
      <section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading font-adj">Articles & e-Books</h2>
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
        <h2>Articles</h2>
      </div>
    </div>

    <div class="row">
      <?php
          while ($row2=mysqli_fetch_array($fecth3)) {
            $id = $row2['id'];
            $b = $row2['ebook_name'];
            $c = $row2['ebook_pics'];
            $d = $row2['ebook'];
            ?>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="post-entry">
          <a href="../admin/pages/ebook/<?php echo $d?>" class="mb-3 img-wrap">
            <img src="../admin/pages/ebook_pics/<?php echo $c?>" alt="Image placeholder" class="img-fluid">
            <span class="date border-tr-download">Download</span>
          </a>
          <h3><a href="#"><?php echo $b?></a></h3>
          <p>Learn about <?php echo $b?>.</p>
          <!-- <p><a href="#">Read More</a></p> -->
        </div>
      </div>
      <?php
        }
        ?>
    </div>
  </div>
</div>

<!-- <div class="site-section fund-raisers">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2>Messages</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Jean Smith</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$1,150</div>
            </div>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_2.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Christine Charles</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$150</div>
            </div>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_3.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Albert Sluyter</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$534</div>
            </div>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_4.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Andrew Holloway</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$2,500</div>
            </div>
          </div>
        </div>    
      </div>

      
      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_3.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Albert Sluyter</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$534</div>
            </div>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_4.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Andrew Holloway</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$2,500</div>
            </div>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Jean Smith</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$1,150</div>
            </div>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 mb-5">
        <div class="person-donate text-center bg-light pt-4">
          <img src="images/person_2.jpg" alt="Image placeholder" class="img-fluid">
          <div class="donate-info">
            <h2>Christine Charles</h2>
            <span class="time d-block mb-3">Donated 3 hours ago</span>

            <div class="donate-amount d-flex">
              <div class="label">Donated</div>
              <div class="amount">$150</div>
            </div>
          </div>
        </div>    
      </div>

      
    </div>
  </div>
</div> --> <!-- .section -->

<?php include 'includes/footer.php';?>