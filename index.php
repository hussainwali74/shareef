<?php
 include('header.php');
 include('connect.php');
 ?> 
<div id="biggg">
    <div class="row"> 
      <div class="col-lg-12 col-md-12 welcome">
        <div class="text-center col-md-offset-1 col-md-6">
          <h3>Urban Resilience Consulting Pvt.LTD</h3>
          <p>
            URC is an urban planning and engineering 
            consulting company led by a group of enthusiastic urban planners, engineers,
            GIS experts and DRR specialists.
          </p>
        </div>
      </div>
    </div>
</div>
<div class="container" id="mainn">
  <div class="row"> 
    <!-- <div class="col-lg-4 col-md-4"> 
      <p class="panel-body text-center text">

        The firm is incorporated in Pakistan by Securities and Exchange Commission
        of Pakistan (SECP) under Companies Ordinance-1984 with Reg. No. 0099191
      </p>
    </div> -->
    <div class="col-lg-6 col-md-6"> 
      <h3>About Us</h3>
      <p class="panel-body text-center text">
        We offer our services in the spheres of urban and regional planning, civil and environmental engineering, geographic information
        systems, disaster risk reduction,  natural resource 
        management and more.
      </p>
      </div>
     <div class="col-lg-6 col-md-6"> 
       <h3>Our Approach</h3>
      <p class="panel-body text-center text">
        We believe in applying technology for attaining sustainable solution
        in the most cost effective way. Our team consists of young and passionate 
        staff committed to achieve excellence in their work
      </p>
    </div>
  </div>
</div>
<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-12" style="text-align:center;">
      <h3>Our Clients</h3>
    </div>
  </div>
  <hr>
  <div class="row" id="clients">
    <?php
      $r  = mysqli_query($conn,"select * from clients");
      
      while($row = mysqli_fetch_assoc($r)){  ?> 
      <div class="col-md-4 client">
        <div class="panel">
          <div class="panel-heading">
            <img class="img" src="<?php echo $row['photo']; ?>" alt="<?php echo $row['Name']; ?>">
          </div>
          <div class="panel-body">
            <h4 class="text-center"><?php echo $row['Name']; ?></h4>
          </div>
        </div>  
      </div>
          <?php
          }
          ?>
  </div>
</div> <!---container -->
 
<?php include('footer.php'); ?> 


