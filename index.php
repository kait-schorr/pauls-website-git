<?php $page_title = "Alumages by Paul Tenner"; ?>
<?php include("header.php"); ?>
<div class="container" id="wrapper">
  <!-- Carousel for displaying main pictures -->

  <div id="carousel-photo" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-photo" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-photo" data-slide-to="1"></li>
      <li data-target="#carousel-photo" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/test-large/_AT_8547-2.jpg" alt="Example photo">
        <div class="carousel-caption">
          Photograph 1
        </div>
      </div>
      <div class="item">
        <img src="images/test-large/_AT_8653-2.jpg" alt="...">
        <div class="carousel-caption">
          Photograph 2
        </div>
      </div>
      <div class="item">
        <img src="images/test-large/_AT_9599-2.jpg" alt="...">
        <div class="carousel-caption">
          Photograph 3
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-photo" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-photo" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>          
  </div>

  <!-- Gallery Grid -->
  <div class="container">

    <div class="row" id="gallery">

      <div class="col-lg-12">
        <h1 class="text-center">Galleries</h1>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="#">
          <img class="img-responsive" src="images/architecture/PAT_5059 15 x 15 San Fernando Cathedral.jpg" alt="">
          <div class="caption text-center">Architecture</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="#">
          <img class="img-responsive" src="http://placehold.it/400x300" alt="">
          <div class="caption text-center">Landscapes - New Mexico</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="#">
          <img class="img-responsive" src="http://placehold.it/400x300" alt="">
          <div class="caption text-center">Landscapes - Central Texas</div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
        <a class="thumbnail" href="#">
          <img class="img-responsive" src="http://placehold.it/400x300" alt="">
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

<?php include("footer.php") ?>

</body>
</html>
