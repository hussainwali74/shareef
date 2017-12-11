<?php
    include('header.php'); 
    include('connect.php'); 
    $category = "";
  ?> 
 
<div class="container " id="services">
  <h4 class="text-center">Our Services</h4>
  <hr>
  <div class="row" >
    <div class="col-md-4 ">
      <div class="panelx panelx-info ">
      <?php 
        $id = 1;
        $r  = mysqli_query($conn,"select DISTINCT(category) as cat from service");
        while($row = mysqli_fetch_assoc($r)){
          ?>
           <div  class="panelx-heading exp">
            <h4 class="category" ><?php echo $row['cat']; ?></h4>
          </div>
      <?php }?>
      </div>
    </div>
    <div class="col-md-8 ">
      <div class="panelx panelx-info">
          <h3 style="margin-top:-4px;"></h3>
            <div class="panelx-body">
              <h5></h5> 
            </div>
      </div>
    </div>
  </div>
</div> 

<?php include('footer.php'); ?> 


