<?php include ('partial/_header.php');?>
      <div class="hero">
        <img src="./images/hero_left.png" alt="heroimg left" class="hero__left">
        <div class="hero__slider" id="slider">
          <img src="./images/hero_right1.png" alt="heroimg right" class="slider-img">
          <img src="./images/hero_right2.jpg" alt="heroimg right" class="slider-img">
          <img src="./images/hero_right3.jpg" alt="heroimg right" class="slider-img">
        </div>
      </div>
      <header class="header">
        <div class="header__box">
          <a href="index.php"><img src="./images/logo.png" class="header__box__logo" alt="logo"></a>
          <span class="header__box__text">o</span>
          <span class="header__box__text">g</span>
          <span class="header__box__text white">a</span>
          <span class="header__box__text white">h</span>
          <span class="header__box__text white">&nbsp;</span>
          <span class="header__box__text">p</span>
          <span class="header__box__text">t</span>
          <span class="header__box__text">r</span>
          <h1>edwoed forrest<br><span>photographer</span></h1>
          <span class="header__box__text">h</span>
          <span class="header__box__text">o</span>
          <img src="./images/mouse.png" class="icon_mouse" alt="">
          <span class="header__box__text white">p</span>
          <span class="header__box__text white">e</span>
          <span class="header__box__text white">r</span>
        </div>
      </header>
    </div>
    <main class="outer">
      <section class="contents">
        <div class="slider">
          <div class="slider__contact">
            <a href="contact.php">contact</a>
          </div>
          <div class="slider__area" id="slideHandle">
          <a href="portrait.php" class="chenge_link pc">
            <span class="change_text">portrait</span>
            <img src="./images/top_portrate.jpg" alt="" class="chenge_image">
          </a>
          <a href="portrait.php" class="chenge_link sp">
            <span class="change_text move">portrait</span>
            <img src="./images/top_portrate.jpg" alt="" class="chenge_image">
          </a>
          <a href="wedding.php" class="chenge_link sp">
            <span class="change_text move">wedding</span>
            <img src="./images/top_wedding.jpg" alt="" class="chenge_image">
          </a>
          <a href="family.php" class="chenge_link sp ">
            <span class="change_text move">family</span>
            <img src="./images/top_family.jpg" alt="" class="chenge_image">
          </a>
          <a href="rates.php" class="chenge_link sp ">
            <span class="change_text move">rates</span>
            <img src="./images/top_rates.jpg" alt="" class="chenge_image">
          </a>
          <a href="biography.php" class="chenge_link sp ">
            <span class="change_text move">biography</span>
            <img src="./images/top_bio.jpg" alt="" class="chenge_image">
          </a>
          </div>
          <div class="slider__nav">
            <ul>
              <li><a href="portrait.php" class="change_btn01">portrait</a></li>
              <li><a href="wedding.php" class="change_btn02">wedding</a></li>
              <li><a href="family.php" class="change_btn03">couples &amp; families</a></li>
              <li><a href="rates.php" class="change_btn04">rates</a></li>
              <li><a href="biography.php" class="change_btn05">biography</a></li>
            </ul>
          </div>
        </div>
      </section>
    </main>
<?php include ('partial/_footer.php');?>
