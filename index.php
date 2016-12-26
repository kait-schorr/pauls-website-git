<?php $page_title = "Alumages by Paul Tenner"; 
$folder_name = "images/index"; ?>
<?php include("header.php"); ?>
<div class="container" id="wrapper">
  <!-- Image Grid -->
  <div id="home-page" style="display:none;">
    <?php include("gallery-script.php") ?>
  </div>



  <!-- Gallery Grid -->
  <div class="container">

    <div class="row" id="gallery-icons">

      <div class="col-lg-12">
        <h1 class="text-center">Galleries</h1>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="architecture.php">
          <img class="img-responsive" src="images/architecture/PAT_5059 15 x 15 San Fernando Cathedral.jpg" alt="">
          <div class="caption text-center">Architecture</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="new-mexico-landscapes.php">
          <img class="img-responsive" src="images/new-mexico-landscapes/_AT_7929.jpg" alt="">
          <div class="caption text-center">Landscapes - New Mexico</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="central-texas-landscapes.php">
          <img class="img-responsive" src="images/central-texas-landscapes/PAT_6285.jpg" alt="">
          <div class="caption text-center">Landscapes - Central Texas</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="san-antonio-landscapes.php">
          <img class="img-responsive" src="images/san-antonio-landscapes/PAT_6078.jpg" alt="">
          <div class="caption text-center">Landscapes - San Antonio</div>
        </a>
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2 class="text-center">About Paul Tenner</h2>
        <p>I have called San Antonio, TX home for the last twenty years.  I grew up in El Paso, TX and I became enamored with the State of New Mexico during my youth.  I was attracted to New Mexico’s culture, architecture, and geography...  </p>
        <p><a class="btn btn-primary btn-lg pull-right" href="about.php" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
  </div>

  <script type="text/javascript">

    jQuery(document).ready(function(){

      jQuery("#home-page").unitegallery({
        gallery_theme: "tilesgrid",
        grid_space_between_cols:10,
        grid_space_between_rows:10,
        tile_enable_border:false,
        tile_enable_shadow:false,
        grid_padding:0,
        tile_width:250,
        tile_height:250,
        tile_enable_textpanel:true,
        tile_textpanel_title_text_align: "center",
        theme_navigation_type:"arrows",
        lightbox_type: "compact",
      });

    });

  </script>
  <?php include("footer.php") ?>

</body>
</html>
