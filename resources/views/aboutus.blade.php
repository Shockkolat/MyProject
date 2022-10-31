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
        <div class="row justify-content-around ">
          <div class="col-md-3 col-xs-12">
            <div class="single-team">
              <div class="img-area">
                <img
                  src="https://scontent.fkdt1-1.fna.fbcdn.net/v/t1.15752-9/295489617_1236036413843995_8954143911803995668_n.png?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeET4O9QMHSDxzg9wPoUsmMF_n5CaruANlj-fkJqu4A2WEvPlCFil7RVZYOUSlMt47FTVpcMhgXrUkLb5reK2z3O&_nc_ohc=sdI5pZ1EZRIAX98cm6B&tn=dEFua9pEEBlUGRAE&_nc_ht=scontent.fkdt1-1.fna&oh=03_AdT3wuNwFHb41RRa0irp0g1csFswf219srjFLM7tMxv5kA&oe=637A281C"
                  class="img-responsive"
                />
              </div>
              <div class="img-text">
                <h4>Narawit Choeychom</h4>
                <h5>Front-End Developer</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-12 ">
            <div class="single-team">
              <div class="img-area">
                <img
                  src="https://scontent.fkdt1-1.fna.fbcdn.net/v/t1.15752-9/309369381_1396354264226583_536630781834950344_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHc9PkSkvzya1646ROG5HUASLtBLGE7OzhIu0EsYTs7OO0sATxVc0C1XjAc-Ow199yCrWohQdWSPivfEARW1DSb&_nc_ohc=4ZlE3l4Gh3YAX8FoJcL&_nc_ht=scontent.fkdt1-1.fna&oh=03_AdRZ38zLI7ndSJxO_xHagMzhlD_jFFFpFjtdXLvLogUFaw&oe=63777C64"
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
    <footer class="text-center text-lg-start fixed-bottom">
      <!-- Grid container -->
      <div class="container p-4">
        {{-- <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">ที่มาและความสำคัญ</h5>

            <p>
              ปัจจุบันนี้โลกของเราได้พัฒนาในหลายๆด้าน โดยเฉพาะด้านเทคโนโลยี 
              ซึ่งมีความสำคัญในการดำเนินชีวิตของคนในยุคปัจจุบันเป็นอย่างมาก 
              จนเปรียบเสมือนปัจจัยๆหนึ่งในการดำเนินชีวิต ซึ่งทั้งหมดนั้นก็มักจะใช้แอปพลิเคชัน 
              เว็บไซต์และอินเทอร์เน็ตเพราะสามารถใช้งานได้ง่าย ดังนั้นผู้จัดทำจึงมีความคิดที่จะใช้ Web Application 
              มาสร้างระบบการจัดการเรียนการสอนแบบ E-Learning ในวิชา หลักสถิติ 1
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase ms-5">วัตถุประสงค์</h5>

            <p class="ms-5">
              1. เพื่อช่วยในการจัดการเรียนการสอนแบบออนไลน์ผ่านเว็บไซต์ <br/>
              2. เพื่อสร้างความสะดวกสบายในการเรียนตามสถานการณ์โควิด<br/>
              3. เพื่อเป็นส่วนช่วยในการเสริมความรู้และได้ทำแบบทดสอบเพื่อวัดผลทางการเรียน
            </p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row--> --}}
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