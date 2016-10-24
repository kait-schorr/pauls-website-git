<?php include("header.php") ?>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <h1 class="text-center">Contact Paul</h1>
    <hr>
    <div class="col-md-5 text-center">
      <h2>Send a Message</h2>
      <form method="post" action="mailto:kaitlynschorr@gmail.com" enctype="text/plain">
        <div class="form-group row">
          <input type="text" class="form-control" id="name_input" aria-describedby="nameHelp" placeholder="First & Last Name">
        </div>
        <div class="form-group row">
          <input type="email" class="form-control" id="email_input" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group row">
          <textarea class="form-control" id="message_input" placeholder="Send a message!" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>      
      </form>
    </div>
    <div class="col-md-2 text-center" >
 <!--      <h1 style="display: table-cell, vertical-align: middle;">OR</h1>
    </div> -->
    <div class="col-md-5 text-center">
      <h2>Email Me</h2>
      <div class="well" id="contact-email">        
        <p><a href="mailto:ptenner56@gmail.com">ptenner56@gmail.com</a></p>
        <a href="mailto:ptenner56@gmail.com" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php") ?>
</body>
</html>