<?php 
require_once('dashboard/lib/portofolio.php');

$projects = getPortofolioes();
// print_r($projects);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Project 1 </title>
    <!-- main template css file -->
    <link rel="stylesheet" href="./frontassets/css/style.css">
    <!-- render all elements normaly -->
    <link rel="stylesheet" href="./frontassets/css/normalize.css">
    <!-- font icons -->
    <link rel="stylesheet" href="./frontassets/css/all.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
  <!-- start header -->
  <div class="header">
      <div class="container">
        <div class="logo">
            <p>Ali AbdO</p>
            <i class="fab fa-autoprefixer first"></i>
            <i class="fab fa-app-store second"></i>
        </div>
          <i id="show_list" class="fas fa-bars out"></i>
         <div class="links">
           <ul id="showed_list">
                <li><a href="#services">Services</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#skills">skills</a></li>
                <li><a href="#Contact">Contact</a></li>
          </ul>
         </div>
      </div>
  </div>
  <!-- end header -->
  <!-- start landing section -->
  <div  class="landing">
     <div class="myphoto">  
        <img class="leftSide ani-hero" src="./frontassets/photo/photo_2021-08-18_19-33-05.jpg" >
        <img class="rightSide ani-hero" src="./frontassets/photo/photo_2021-08-18_19-33-03.jpg" >
        <img class="mid-hero" src="./frontassets/photo/photo_2021-08-18_19-32-58.jpg">
      </div>
     <div class="intro">
              <h1>Hello</h1>
              <p>My Name is Ali Abdulnaby, I Work as a full stack developer <br>
                Good luck in your work and we are happy to help you implement your ideas ^_^</p>
      </div>
      <a class="seemore" href="#About"><p>See More</p> <i class="fas fa-caret-down"></i> </a>
  </div>
  <!-- end landing section -->

  <!-- start featuer -->
  <!-- <div class="featuer">
    <div class="container">
        <div class="feat">
            <i class="fab fa-android"></i>   
            <h3>header number 1</h3>
            <p>Lorem  quaerat numquam sintsint sint sint sint sint sint, vero cum debitis tempora earum iure hic eum unde. Nobis?</p>
        </div>
        <div class="feat">
        <i class="fab fa-apple"></i>
        <h3>header number 2</h3>
        <p>Lorem ipsum dolor  vitae debitis eveniet eaque, porro quisquam tenetur laboriosam, quasi similique tempore doloremque odit.</p>
        </div>
        <div class="feat">
            <i class="fab fa-app-store-ios"></i>
            <h3>header number 3</h3>
            <p>Lorem ipsum,  eveniet, fuga expedita mollitia? Totam quasi voluptate repudiandae vitae ab eligendi quod officiis! Suscipit.</p>
        </div>
    </div>
  </div> -->
  <!-- end feature -->

  <!-- start services -->
  <div class="services" id="services">
      <div class="container">
          <h2 class="sp-heading">services</h2>
          <p>DO NOT PLACE ORDER DIRECTLY BEFORE DISCUSSION</p>
          <div class="services-container">
              <div class="col">
                  <!-- start services -->
                  <div class="srv">
                   <div class="icons">
                    <i class="fas fa-palette"></i>
                   </div>
                   <div class="text">
                    <h3>UI & UX Design</h3>
                    <p>UI designs and UX designs </p>
                   </div>
                  </div>
                  <div class="srv">
                    <div class="icons">
                      <i class="fab fa-html5"></i>
                     </div>
                     <div class="text">
                      <h3>front end web developer</h3>
                      <p>design modern and responsive website</p>
                     </div>
                  </div>
                  <!-- end services -->
              </div>
              <div class="col">
                  <!-- start services -->
                  <div class="srv">
                    <div class="icons">
                      <i class="fab fa-php"></i>
                     </div>
                     <div class="text">
                      <h3>backend PHP web developer</h3>
                      <p>I will be your laravel, PHP web developer</p>
                  </div>
                  </div>
                  <div class="srv">
                    <div class="icons">
                      <i class="fas fa-code"></i>
                     </div>
                     <div class="text">
                      <h3>full stack web developer</h3>
                      <p>make your complite website</p>
                  </div>
                  </div>
                  <!-- end services -->
              </div>
              <div class="col">
                  <div class="image image-dis">
                      <img src="./frontassets/photo/load.jpg" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end services -->
  <!-- start portfolio -->
  <div class="portfolio" id="portofolio">
    <div class="container">

        <h2 class="sp-heading">portfolio</h2>
        <p>Can See My Previous Projects</p>
        <div class="portfolio-content">
          <i style="display: none;" id="closepro" class="fas fa-times"></i>
          <?php   foreach($projects as $pro):  ?>
          <div class="col">
            <img src="<?php echo"./dashboard/upload/".$pro['img'] ?>" >
            <p style="display: none;"><?php echo $pro['description'] ?></p>
            <button style="display: none;">see projecr</button>
          </div> 
          <?php endforeach; ?>        
          <!-- <div class="col ">
            <img src="./frontassets/photo/pro2.jpg" >
            <p style="display: none;"> aliabdoali421</p>
            <button style="display: none;">see projecr</button>
          </div>          -->
          <!-- <div class="col">
            <img src="../project1 - Tebplate One With El-zero/photo/pro3.jpg" >
          </div>         
          <div class="col">
            <img src="../project1 - Tebplate One With El-zero/photo/pro4.jpg" >
          </div>         
          <div class="col">
            <img src="../project1 - Tebplate One With El-zero/photo/pro5.png" >
          </div>         
          <div class="col">
            <img src="../project1 - Tebplate One With El-zero/photo/pro6.jpg" >
          </div>         
          <div class="col">
            <img src="../project1 - Tebplate One With El-zero/photo/pro7.jpg" >
          </div>         
          <div class="col">
            <img src="../project1 - Tebplate One With El-zero/photo/pro8.jpg" >
          </div>          -->

         </div>
  </div> 

             <!-- <div class="info">
            <h3>اليقين</h3>
            <p>اعلم ان الله يسمعك ويعلك ما بك وأكثر من نفسك</p>
            </div> -->
  
            <!-- end portfolio -->
  <!-- start about -->
  <div class="about" id="About">
    <div class="container">
        <h2 class="sp-heading">About Us</h2>
        <p>Some Information About The Seller</p>
        <div class="about-content">
            <div class="image">
                <img src="./frontassets/photo/photo_2021-08-18_19-32-58.jpg" alt="">
           </div>
            <div class="con">
                <p>I have extensive experience developing web projects over the last seven years. I have worked on several web project using HTML, CSS, PHP and PHP Framework (Yii, Yii2, CodeIgniter, and Laravel), MySQL and JavaScript.
                   I have the experience of managing developer team and lead the project as a team leader.
                   I am very confident in my ability to work in a team. I would be grateful to work with an organization and serve well.
                  I believe I have: <br>
                  The ability to provide the best services to the clients to meet their needs.
                  Ability to work independently as well as a team.</p>
                <hr>
                <p>Please contact me to discuss the specifics of your project.
                   I will be pleased to assist you and find the finest package to meet your requirements</p>
            </div>
        </div>
    </div>
    <a href="mailto:aliabdoali421@gmail.com" class="cv">download cv</a>
</div>
  <!-- end about -->
  <!--start skills -->
  <div class="our-skill" id="skills">
    <h2 class="sp-heading">skills</h2>
    <p>DO NOT PLACE ORDER DIRECTLY BEFORE DISCUSSION</p>
    <div class="container">
        <div class="skill">
          <div class="prog-bos">
            <h3>photoshop</h3>
            <div class="brog">
              <span style="width: 90%"  data-progress="90%"> </span>
            </div>
          </div>
          <div class="prog-bos">
            <h3>HTML</h3>
            <div class="brog">
              <span style="width: 99%"  data-progress="99%"> </span>
            </div>
          </div>
          <div class="prog-bos">
            <h3>css</h3>
            <div class="brog">
              <span style="width: 90%"  data-progress="90%"> </span>
            </div>
          </div>
          <div class="prog-bos">
            <h3>Java Script</h3>
            <div class="brog">
              <span style="width: 85%"  data-progress="85%"> </span>
            </div>
          </div>
        </div>
        <div class="skill">
          <div class="prog-bos">
            <h3>Bootstrap</h3>
            <div class="brog">
              <span style="width: 94%"  data-progress="94%"> </span>
            </div>
          </div>
          <div class="prog-bos">
            <h3>PHP</h3>
            <div class="brog">
              <span style="width: 80%"  data-progress="80%"> </span>
            </div>
          </div>
          <div class="prog-bos">
            <h3>MYSQL</h3>
            <div class="brog">
              <span style="width: 60%"  data-progress="60%"> </span>
            </div>
          </div>
          <div class="prog-bos">
            <h3>Laravel4</h3>
            <div class="brog">
              <span style="width: 50%"  data-progress="50%"> </span>
            </div>
          </div>
        </div>
</div>
</div>
  <!--end skills -->
  <!-- start contact  -->
  <div class="contact" id="Contact">
      <div class="container">
        <h2 class="sp-heading">contact</h2>
        <p>contact us</p>
        <div class="form">
            <input type="text" placeholder="Enter Your Name">
            <input type="email" placeholder="Enter Your Email">
            <input type="text" placeholder="Enter The Massage">
            <input type="submit" >
        </div>
  </div> 
  <!-- end contact  -->
  <!-- start footer -->
  <footer>
     <div class="adress">
       <h3>location</h3>
      <p>Eskaross St., Shibin El Koum - Menoufia - Egypt</p>
     </div>
     <div class="social">
       <h3>find us in social network</h3>
       <i class="fab fa-facebook-f"></i>
       <i class="fab fa-whatsapp"></i>
       <i class="fab fa-twitter"></i>
       <i class="fab fa-instagram"></i>
     </div>
     <div class="me">
       <img src="./frontassets/photo/photo_2021-08-18_19-32-58.jpg" alt="">
      <p>Ali Abdulnaby Ali Zarad</p>
     </div>
  </footer>
  <!-- end footer -->


  <script src="./frontassets/js/action.js"></script>
</body>
</html>