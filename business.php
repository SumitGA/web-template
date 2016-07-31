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
          <div class="main_content floatleft">
          	<div class="left_coloum floatleft">
              <div class="single_left_coloum_wrapper">
                <h2 class="title">Business News</h2>
                <a class="more">more</a>
                <div class="single_left_coloum floatleft">
                  <img src="images/single_featured.png" alt=""/>
                  <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                  <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.</p>
                  <a class="readmore">read more</a>
                </div>
                <div class="single_left_coloum floatleft">
                  <img src="images/single_featured.png" alt=""/>
                  <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                  <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.</p>
                  <a class="readmore">read more</a>
                </div>
                <div class="single_left_coloum floatleft">
                  <img src="images/single_featured.png" alt=""/>
                  <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                  <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.</p>
                  <a class="readmore">read more</a>
                </div>
              </div>
              
              
              
            </div>
           
            <div class="right_coloum floatright">
              <?php include('righttopcontent.php'); ?>
              <?php include('rightbottomcontent.php'); ?>
            </div>
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
