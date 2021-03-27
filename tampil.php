<?php
include 'koneksii.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #2d98da;
            font-size: 16px;
            margin: auto;
        }
        .jumbotron{
          background-color: #2d98da;
        }
        .galery{
          background-color: #2d98da;
        }
        .footer{
          background-color: #2d98da;
        }

    </style>

    <title>landingpage</title>
  </head>
  <body>
      <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dea Nurfita</a>
          <button class="navbar-toggler ps-5"type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">About</a>
              <a class="nav-link" href="#">Gallerry</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">contact</a>
            </div>
          </div>
        </div>
      </nav>
    </section>

      <!--jumbotron-->
      <section>
      <div class="jumbotron text-center">
          <img src="gunung.jpg" class="rounded-circle mx-auto d-block" alt="gambarsaya">
          <div class="jumbotron jumbotron-fluid">
            <div class="jumbotron" style="margin-bottom: 5%"> 
                <h1 class="display-4">Dea Nurfita Sari</h1>
                <p class="lead">XI RPL 3</p>
                </div>
            </div>
        </div>
    </section>
    <div style="margin-top:-5%;"> </div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2d98da" fill-opacity="1" d="M0,288L15,256C30,224,60,160,90,144C120,128,150,160,180,165.3C210,171,240,149,270,138.7C300,128,330,128,360,138.7C390,149,420,171,450,192C480,213,510,235,540,213.3C570,192,600,128,630,112C660,96,690,128,720,165.3C750,203,780,245,810,240C840,235,870,181,900,165.3C930,149,960,171,990,165.3C1020,160,1050,128,1080,117.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,202.7C1290,213,1320,203,1350,176C1380,149,1410,107,1425,85.3L1440,64L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path></svg></div>

    <!--about me-->
    <section id="about">

      <div class="about">
      <div class="container">
        <div class="row text-center">
          <h2>About Me</h2>
        </div>
      </div>
          <div class="row justify-content-evenly mt-3">
          <div class="col-5">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti beatae fuga, maxime impedit eos vero quisquam dolore aspernatur, repudiandae numquam ea. Molestias beatae earum suscipit dolores itaque cum tenetur minima neque quam, ratione repellendus vitae!
          </div>
          <div class="col-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere qui doloremque dolorem cumque sequi harum odit, aliquam dolores nisi at id labore ipsa itaque est ab veniam iste autem ex non dolor? Iure, distinctio. Provident.
          </div>
        </div>
      </div> 
    </div>
    </section>

     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2d98da" fill-opacity="1" d="M0,32L12.6,37.3C25.3,43,51,53,76,64C101.1,75,126,85,152,106.7C176.8,128,202,160,227,160C252.6,160,278,128,303,149.3C328.4,171,354,245,379,245.3C404.2,245,429,171,455,138.7C480,107,505,117,531,128C555.8,139,581,149,606,149.3C631.6,149,657,139,682,144C707.4,149,733,171,758,197.3C783.2,224,808,256,834,256C858.9,256,884,224,909,202.7C934.7,181,960,171,985,160C1010.5,149,1036,139,1061,144C1086.3,149,1112,171,1137,165.3C1162.1,160,1187,128,1213,101.3C1237.9,75,1263,53,1288,58.7C1313.7,64,1339,96,1364,90.7C1389.5,85,1415,43,1427,21.3L1440,0L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg>

    <!--Gallery-->
    <section id="galery">
      <div class="galery">
      <div class="container"></div>
        <div class="row text-center m-3 p-3">
          <div class="cool">
            <h2>galery</h2>
          </div>
        </div>
 
        <div class="row text-center m-3 p-3 justify-content-around">
          <div class="col-md-4 1h-base p-3">
          <div class="card">
            <img src="kotu12.jpg" class="card-img-top" alt="gambarsaya">
             <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 1h-base p-3">
            <div class="card">
              <img src="kotu12.jpg" class="card-img-top" alt="gambarsaya">
               <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 1h-base p-3">
              <div class="card">
                <img src="kotu12.jpg" class="card-img-top" alt="gambarsaya">
                 <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="contact">
          <div class="container">
            <div class="class text-center">
              <div class="cool">
                <h2>contact me</h2>
              </div>
            </div>
            <form>
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Your Comment</label>
                <input type="text" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">submit</button>
            </form>
          </div>
        </section>

        <footer>
          <div class="footer mt-5">
          <div class="card-body text-center">
            <p>Dea Nurfita Sari :)</p>
          </div>
        </div>
      </footer>
 
  </body>
</html>