<?php include('header.php'); ?>

  <body>
    
    <div class="body_wrapper">
      <div class="center">
        <div class="header_area">
          <div class="logo floatleft">
            <a href="#"> <img src="images/logo.png" alt="logo" /> </a>
          </div>
      <?php include('topnav.php'); ?>
        <div class="main_menu_area">
      <?php include('mainmenu.php'); ?>  
        </div>
        <div class="slider_area">
          <div class="slider"> 
       <?php include('slider.php'); ?>
          </div>
        </div>
        <div class="content_area">
          <?php include('maincontent.php'); ?>
          </div>
          <div class="sidebar floatright">
            <?php include('rightcontent.php'); ?>
        </div>
        <div class="footer_top_area">
          <?php include('footertop.php'); ?>
        </div>
        <div class="footer_bottom_area">
         <?php include('footermain.php'); ?>
    </div>
    
    <script type="text/javascript" src="js/selectnav.min.js"></script>
    <script type="text/javascript">
      selectnav('nav', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
      });
      
      selectnav('f_menu', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
      });     
    </script>   
    <script src="js/jquery-min.js"></script>  
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
      $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true
      });
    </script>
    <script src="js/bootstrap.min.js"></script>   
  </body>
</html>
