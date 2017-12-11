<?php
    include('header.php'); 
    include('connect.php'); 
  ?> 
<div class="container " id="experience">
  <h4 class="text-center">Our Experience</h4>
  <hr>
  <div class="row" >
    <div class="col-md-offset-1 col-md-4 col-sm-offset-2 col-sm-8 ">
      <div class="panelxx panelx-info">
        <div class="panelxx-heading">
          <h4 style="color:#fff;">Completed Work:</h4>
        </div>
        <?php 
        $id = 1;
        $r  = mysqli_query($conn,"select * from experience where status ='Completed'");
        while($row = mysqli_fetch_assoc($r)){
          ?>
            <div class="panelxx-body">
              <h5><?php echo $id.". ". $row['title']; ?></h5> 
            </div>
              <?php
              $id++;
            }
            ?>
      </div>
    </div>
    <div class="col-md-offset-1 col-md-4 col-sm-offset-2 col-sm-8 ">
      <div class="panelxx panelx-info">
        <div class="panelxx-heading">
          <h4 style="color:#fff;">Ongoing Work:</h4>
        </div>
        <?php 
        $id = 1;
        $r  = mysqli_query($conn,"select * from experience where status ='Ongoing'");
        while($row = mysqli_fetch_assoc($r)){
          ?>
            <div class="panelxx-body">
              <h5><?php echo $id.". ". $row['title']; ?></h5> 
            </div>
              <?php
              $id++;
            }
            ?>
      </div>
    </div>
 
  </div>
</div>

<div class="gallery" >
  <div class="container text-center ">
    <h4 class="panelx-heading">Work We Have Done</h4>
    <hr>
    <div class="col-md-4">
      <div class="thumbnail">
        <img class="img-responsive" src="img/new/edited/bahriatown.jpg" alt="Bahria Town" >
        <div class="title">
          <h5>Bahria Town RawalPindi, Phase-8</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img class="img-responsive" src="img/new/edited/karachi.jpg" alt="Bahria Town" >
        <div class="title">
          <h5>Karachi Malir</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img class="img-responsive" src="img/new/edited/karachiwest.jpg" alt="Bahria Town" >
        <div class="title">
          <h5>S.I.T.E Town Karachi, West</h5>
        </div>
      </div>
    </div>
 
    <div class="col-md-4" >
      <div class="thumbnail">
        <img class="img-responsive" src="img/new/edited/snap.jpg" alt="Bahria Town" >
                <div class="title">
          <h5>Mappings</h5>
        </div>
      </div>
    </div>
  </div>
</div>
 
<?php include('footer.php'); ?> 


