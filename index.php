<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        
            <a class="navbar-brand" href="#"><h1>rentit</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Search your Location
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Alappuzha</a>
                    <a class="dropdown-item" href="#">Kottayam</a>
                    <a class="dropdown-item" href="#">thiruvanathapuram</a>
                    <a class="dropdown-item" href="#">Alappuzha</a>
                    <a class="dropdown-item" href="#">Patrhanamthitta</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Search anf find tour location</a>
                  </div>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button><br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Add</button>

              </form>
            </div>
          </nav>
      
    <section id="slider">
    
        <div id="headerslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#headerslider" data-slide-to="0" class="active"></li>
              <li data-target="#headerslider" data-slide-to="1"></li>
              <li data-target="#headerslider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/bg (1).png" class="d-block w-100" alt=".." >
                <div class="carousel-caption">
                    <h5> Find rent homes</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/bg (1).png" class="d-block w-100" >
                <div class="carousel-caption">
                    <h5> Find land for lease</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/bg (1).png" class="d-block w-100" >
                <div class="carousel-caption">
                    <h5> Find shops for rent</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!---------------middle portio-->
    <section id="middle">
        <div class="sidenav">
            <h2> Categories</h2>
            <div class="cat">
             <a href="#"><i class="fas fa-home home"></i> Home</a>
             <a href="#"><i class="fas fa-landmark"></i> Land</a>
             <a href="#"><i class="fas fa-store-alt"></i> Shop</a>
              
            </div>
    </div>
    </section>
</section>
    <!---------------footer-->
    <nav class="navbar navbar-dark bg-dark">
    <section id="footer">
        <div class="footer-container">
            <div class="left-col">
              <a href="index.html"><h1>rentit</h1></a>
              <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <p class="rights-text">© 2020 Created By DarkCode All Rights Reserved.</p>
            </div>
    </section>
    </nav>
  </body>
</html>