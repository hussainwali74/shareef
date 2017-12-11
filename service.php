<?php
    include('header.php'); 
    include('connect.php'); 
    $category = "";
  ?> 
<br>
<br>
<br>
<div class="container ">
  <h3 class="text-center">Our Experience</h3>
  <hr>
  <div class="row" id="services">
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

<br>
<br>
<br>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php'); ?> 


