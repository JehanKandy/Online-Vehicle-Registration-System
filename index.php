<?php include "lib/layouts/header_index.php";?>
<?php include "lib/layouts/nav_index.php";?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/user1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <p>User Registration System</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/car1.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <p>Vehicle Registration System</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/fuel.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <p>fuel Registration System</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="system-infor">
    <div class="grid">
        <div class="grid-item1">
            <div class="title">
                User Registration
            </div>
            <div class="body">
                <i class="far fa-check-circle" style="color: green;"></i> &nbsp; 
            </div>
        </div>
        <div class="grid-item2">
            <div class="title">
                Vehicle Registration
            </div>
            <div class="body">
                hi
            </div>
        </div>
        <div class="grid-item3">
            <div class="title">
                Fuel Registration
            </div>
            <div class="body">
                hi
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="contact-content">
        Find Us..!
    </div>	
    <div class="contact-body">
        <div class="row">
            <div class="col-auto"><i class="fab fa-facebook-square" style="font-size:40px;"></i></div>
            <div class="col-auto"><i class="fab fa-whatsapp-square" style="font-size:40px;"></i></div>
            <div class="col-auto"><i class="fab fa-linkedin" style="font-size:40px;"></i></div>
            <div class="col-auto"><i class="fab fa-instagram" style="font-size:40px;"></i></div>
        </div>
    </div>
</div>


<div class="partners">
    <div class="partners-content">
        Partnership
    </div>
    <div class="grid">
        <div class="partner-item1"></div>
        <div class="partner-item2"></div>
        <div class="partner-item3"></div>
        <div class="partner-item4"></div>
        <div class="partner-item5"></div>
        <div class="partner-item6"></div>
    </div>
</div>


<?php include "lib/layouts/footer.php";?>
