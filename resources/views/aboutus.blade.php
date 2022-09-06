<!DOCTYPE html>
<html lang="en">
  <!--divinectorweb.com-->
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>StatLearning 📚</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/css/about.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href={{ ('/') }}><span>Stat</span>Learning</a>
        <button
          class="navbar-toggler"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          data-bs-target="#navbarSupportedContent"
          data-bs-toggle="collapse"
          type="button"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb- mb-lg-0">
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/aboutus') }}">About us</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="content">
      <div class="thing">
        <h2>StatLearning</h2>
        <p>
          เป็นคนไม่ค่อยฝัน เพราะว่าฉันไม่ค่อยนอน จะไม่มีคำว่าสาย ถ้าเราตื่นบ่าย
        </p>
      </div>
    </div>
    <div class="team-area">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-3 col-xs-12">
            <div class="single-team">
              <div class="img-area">
                <img
                  src="https://scontent.fkdt1-1.fna.fbcdn.net/v/t1.6435-9/112215397_3248173875250435_6025172610890925479_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=174925&_nc_ohc=Kz3Jpkw3tiYAX-Z2m8f&_nc_ht=scontent.fkdt1-1.fna&oh=00_AT-o53huzCTKQ6ZNL837XxFOYdDDnd6iEkNJD6tvXPOLbA&oe=63368428"
                  class="img-responsive"
                />
              </div>
              <div class="img-text">
                <h4>Narawit Choeychom</h4>
                <h5>Front-End Developer</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="single-team">
              <div class="img-area">
                <img
                  src="https://scontent.fkdt1-1.fna.fbcdn.net/v/t39.30808-6/299227022_2969341786703286_8346152022769037610_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeH1v3aSxGox78kg9Z8x_u-wj4f28S1EzCiPh_bxLUTMKBcu73BEfrgp4W56cUj2mEt2_eOO6MgBNxE-xPZ1IsPV&_nc_ohc=xoc_TeTQ67AAX-PkF5M&_nc_ht=scontent.fkdt1-1.fna&oh=00_AT9eBtW_aqcuQHpHD0EDlz2MAig-QDVS0Y5V7aZdR_folQ&oe=631C2F85"
                  class="img-responsive"
                />
              </div>
              <div class="img-text">
                <h4>Parada Sarawong</h4>
                <h5>Back-End Developer</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -->
    <footer class="bg-light text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Footer text</h5>

            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              atque ea quis molestias. Fugiat pariatur maxime quis culpa
              corporis vitae repudiandae aliquam voluptatem veniam, est atque
              cumque eum delectus sint!
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Footer text</h5>

            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              atque ea quis molestias. Fugiat pariatur maxime quis culpa
              corporis vitae repudiandae aliquam voluptatem veniam, est atque
              cumque eum delectus sint!
            </p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-4 bg-dark text-lg-start">
        <div class="text-center text-light">
          @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
        </div>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>