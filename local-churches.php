<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <title>St. Peter's Anglican Church</title>
</head>
 <body>
   <!-- Header -->
   <div id="topHeader" class="container-fluid">
     <div class="row">
       <a class="col-md-6 btn btn-danger btn-square btn-customFont" href="https://live.stpetesok.church" target="_blank">Watch our Livestream</a>
       <a class="col-md-6 btn btn-warning btn-square btn-customFont" href="https://vimeo.com/stpetesok" target="_blank">Watch our past messages</a>
     </div>
   </div>
   <div id="header">
     <nav class="navbar navbar-expand-lg navbar-custom">
       <a class="navbar-brand" href="/"><img class="logo" src="images/stporetinalogo1.png" /></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
       </button>

       <div class="collapse navbar-collapse align-items-stretch" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="/">Home</a>
           </li>
           <li class="nav-item active dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Resources
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Sermons</a>
               <a class="dropdown-item" href="#">Prayer</a>
               <a class="dropdown-item" href="#">Lectionary</a>
               <a class="dropdown-item active" href="local-churches">Local Churches</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Information
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="about-us">About Us</a>
               <a class="dropdown-item" href="#">Privacy</a>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Give</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="calendar">Calendar</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="contact">Contact</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="hello">Hello</a>
           </li>
           <li class="nav-item">
             <a class="nav-link pastoralLetter" data-toggle="modal" data-target="#pastoralLetter" href="#"><i class="fa fa-info-circle"></i></a>
           </li>
         </ul>
       </div>
     </nav>
   </div>
   <!-- End Header -->



<!-- Map Area -->
<div class="churchMapHeaderArea">
  <h3>Find a local church in Okotoks</h3>
  <p>Click on one of the map markers for more information.</p>
</div>
<div class="churchMapContainer">
    <iframe class="churchMap" src="https://www.google.com/maps/d/embed?mid=1EHx1nl13uXnnuv-ygJM3FNcAxCRSoPtZ" ></iframe>
</div>

<!-- Address Area -->

<!-- Footer Section -->
<div class="footer">
  <p class="footerText">&copy; <?php echo date('Y'); ?> St. Peter's Anglican Church. Website created and managed by <a href="https://4uweb.design">4U WebDesign</a></p>
</div>
<!-- Modals Section -->
<!-- Pastoral Letter Modal -->
<div class="modal fade" id="pastoralLetter" tabindex="-1" aria-labelledby="localChurchesText" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scroll" style="width: auto !important; max-width: 1000px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">A Letter for the members of St. Peter's</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="pdfContainer" class="modal-body">
        <embed src="/documents/2020-11-Stewardship-Letterhead.pdf" type="application/pdf" width="100%" height="900" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Pastoral Letter Modal -->
<!-- End Modals Section -->


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9831339778.js" crossorigin="anonymous"></script>
  <script src="js/index.js" type="text/javascript"></script>
  <script src="https://github.com/pipwerks/PDFObject/blob/master/pdfobject.min.js"></script>
 </body>
</html>
