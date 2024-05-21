<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale">
    <title>Project.01-HTML (Home Page)</title>
    <link rel="stylesheet" href="styles\styles.css">
 
   <!--Navigation bar-->
   <nav>
    <div class="nav__content">
      <div class="logo"><a href="#W1">wans</a></div>
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check" />
      <ul>
        <li><a href="#W1">Home</a></li>
        <li><a href="#W2">Blog</a></li>
        <li><a href="#W3">Gallery</a></li>
        <li><a href="#W4">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- Navigation bar -->

  <!-- About me -->
  <section class="section reveal" id="W1">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">HI!</p>
        <h1 class="title">
          I'm <span>Wanda<br />a</span> Student at Sam Ratulangi University 
        </h1>
        <p class="description">
          你好!.
            我目前就读于 University Sam Ratulangi Manado 
            我参加了一个学习计划 S1-Informatics Engineering.
            나는 현재 4학기에 다니고 있다. 
          </p>
        </div>
        <div class="image"><img src="images\homeimg2.jpg" alt="profile" />
        </div>
      </div>
      <p class="home-text">
        Psalm 118:13  <br><br>
        <span>I have been hard pushed by you, so that i might have fall: but the Lord was my helper</span>
    </section>
    <!-- About me -->

    <br><br><br><br>

    <!-- Blog -->
    <section class="blog reveal">
      <div class="blog-heading">
        <h1 id="W2">Blog</h1>
      </div>

    <br><br>

<div class="blog-container reveal">
<?php include 'blog_artikel.php'; ?>
</div>
</section>

  <!-- Gallery -->
  <section class="gallery reveal" id="W3">
    <div class="gallery-heading">
        <h2>Gallery</h2>
    </div>

    <br><br>

    <div class="responsive">
        <div class="gallery">
            <img src="images/IMG1.jpg" alt="pretty sky with worst memories">
                <div class="desc">
                    <div class="text">pretty sky with worst memories</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG2.jpg" alt="getting matching cute bracelets with my sisters">
                <div class="desc">
                    <div class="text">getting matching cute bracelets with my sister and her friend</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG3.jpg" alt="beautiful view at Airport">
                <div class="desc">
                    <div class="text">beautiful view at Airport</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG4.jpg" alt="college life">
                <div class="desc">
                    <div class="text">college pills</div>
                </div>
        </div>
        <br>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG5.jpg" alt="MCR ZONE class="blog-title"!">
                <div class="desc">
                    <div class="text">MCR ZONE!</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG6.jpg" alt="God's painting">
                <div class="desc">
                    <div class="text">God's painting</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG7.jpg" alt="current favorite song">
                <div class="desc">
                    <div class="text">current favorite song</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG8.jpg" alt="another God's painting">
                <div class="desc">
                    <div class="text">another God's painting</div>
                </div>
        </div>
        <br>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG9.jpg" alt="will always be my favorite things">
                <div class="desc">
                    <div class="text">will always be my favorite things</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG10.jpg" alt=":D">
                <div class="desc">
                    <div class="text">:D</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG11.jpg" alt="beautiful sky w/ beautiful person">
                <div class="desc">
                    <div class="text">beautiful sky w/ beautiful person</div>
                </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <img src="images/IMG12.jpg" alt="greatest memories">
                <div class="desc">
                    <div class="text">greatest memories</div>
                </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <!-- Gallery -->

  <!-- Contact -->
  <section class="contact reveal" id="W4">
    <div class="contact-heading">
        <h2>Contact Me!</h2>
    </div>

    <br><br>
    
    <p class="contact-text">
        If you have any questions or would like to get in touch with me, 
        please feel free to contact me using the information below. <br><br>
        <span>here!</span>
    </p>

    <br>
    <div class="contact-info">
        <div class="card">
            <div class="contact-icon">
                <img src="images/Email.jpg" alt="Email" width="50" height="50">
            </div>
            <p>wandapantouw@gmail.com</p>
        </div>

        <div class="card">
            <div class="contact-icon">
                <img src="images/Instagram.jpg" alt="Instagram" width="50" height="50">
            </div>
            <p>@wndangella</p>
        </div>

        <div class="card">
            <div class="contact-icon">
                <img src="images/Address.jpg" alt="Address" width="50" height="50">
            </div>
            <p>Minahasa Utara, Sulawesi Utara, Indonesia</p>
        </div>
    </div>
  <!-- Contact -->
</body>
<script src="script/script.js"></script>
</html>