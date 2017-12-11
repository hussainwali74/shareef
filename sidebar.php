<?php
 include('header.php');
 include('connect.php');
 ?> 

 <div id="wrapper">
     <!-- sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li><a href="#"></a>Home</li>
            <li><a href="#"></a>Home</li>
            <li><a href="#"></a>Home</li>
        </ul>
    </div>

     <!-- page content  -->
     <div id="page-content-wrapper">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12">
                     <a href="#" class="btn btn-success" id="menu-toggle">Menu</a>
                     <h1>sidebar</h1>
                     <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, 
                         eos quos. Illo tenetur veritatis molestiae unde soluta a non facere, 
                         fugiat voluptate, necessitatibus recusandae exercitationem nihil natus nostrum? Eaque, beatae? 
                          </p>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- menu toggle script -->
 <script>
  $("#menu-toggle").click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("menuDisplayed");
  });
 </script>