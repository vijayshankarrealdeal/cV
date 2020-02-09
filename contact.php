<html>
    <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Allura|Bad+Script|Baskervville|Caveat|Cinzel|Cookie|Courgette|Damion|Dancing+Script|Great+Vibes|Ibarra+Real+Nova|Kalam|Kaushan+Script|Nunito|Open+Sans|Open+Sans+Condensed:300|PT+Sans+Narrow|Parisienne|Satisfy|Shadows+Into+Light|Tangerine&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/contactstyles.css">   
</head>
    <title>Contact Us</title>
    <body>
    <div class="myTitle">
        <p><h1>My Portfolio</h1></p>
   </div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="contactus.php">Contact-Me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="photographs.php">Photographs</a>
      </ul>
      <p class="intro"> <a href="index.php">Home</a></p>
  </div>
</nav>
<form action="database.php" method="post">
    <div class="container">
        <div class="rows">
            <div class="col-md-6 offset-md-3"> 
                   <div class="form-group">
                   <br><br><br><br>
                       <input type="text"1  name="name" class="form-control form-control-lg" placeholder="Enter Name" requird>
                   </div> 
                   <div class="form-group">
                       <input type="email" name="email" class="form-control form-control-lg"  placeholder="Email" requird>
                   </div> 
                   <div class="form-group">
                       <br><label>Message :)</label><br><br>
                       <textarea name="message" class="form-control form-control-lg" placeholder="Enter The Message Here"></textarea>
                   </div>
                   <div class="form-group">
                       <button type="submit" class="btn btn-success btn-block btn-lg" name="signup-btn" >Click Here</button>
                   </div>
            </div>
        </div>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>