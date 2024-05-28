<?php get_header(); ?>
    <main>
      <div id="mv" class="mv">
        <div class="slick">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel1.jpg" alt="" width="1400" height="760">
          </div>
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel2.jpg" alt="" width="1400" height="760">
          </div>
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel3.jpg" alt="" width="1400" height="760">
          </div>
        </div>
        <div class="img-box">
          <img class="mv-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo4.png" alt="<?php bloginfo('name'); ?>" width="115" height="415">
          <img class="mv-text" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-text.svg" alt="鮮度・米・技術" width="64" height="365">
        </div>
        <a href="">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a class="btn contact" href="/">ご予約はこちら</a>
        <div class="language">
          <p id="language" >Language</p>
          <button type="button" id="jp-btn" class="switch-btn">Jp</button>
          <span> / </span>
          <button type="button" id="en-btn" class="switch-btn">En</button>
        </div>
      </div><!-- mv -->
      <section id="greeting" class="greeting">
        <div class="greeting-container">
          <div class="greeting-content">
            <h2 class="heading fadeIn">ご挨拶<span class="en-heading fadeIn">Greeting</span></h2>
            <p class="greeting-text fadeIn">
              <span>毎朝、日本各地から直送される</span>
              <span>とびきり新鮮な旬の魚を使用しております</span>
              <span>ネタの質が高く</span>
              <span>美味しい寿司をお召し上がりいただけます</span>
              <span>お客様により良いものを</span>
              <span>より美味しく召し上がっていただきたい</span>
              <span>その志の元、日々精進を重ねていきます</span>
              <span>皆様のお越しを心よりお待ちしております</span>
            </p>
          </div>
          <div class="greeting-content-en">
            <h2 class="heading fadeIn">ご挨拶<span class="en-heading fadeIn">Greeting</span></h2>
            <p class="greeting-text-en fadeIn">
              Every morning, we use the freshest seasonal fish delivered directly from various regions across Japan.<br> As a result, the quality of our ingredients is exceptionally high, allowing us to serve delicious sushi.<br>
              We strive daily to provide our customers with the best possible sushi experience, driven by our commitment to offer better and tastier sushi.<br>
              We sincerely look forward to your visit."
            </p>
          </div>
          <img class="fadeFromLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img17-1.png" alt="" width="1075" height="535">
        </div>
      </section>
      <section id="works" class="works">
        <div class="works-header">
          <h2 class="heading fadeIn">私たちのこだわり<span class="en-heading fadeIn">Our Commitment to Quality</span></h2>
          <video src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie.mp4" autoplay controls muted loop></video>
        </div>
        <div class="works-container">
          <div class="works-item">
            <h3 class="sub-heading fadeIn">鮮度</h3>
            <h3 class="sub-heading-en fadeIn">Freshness</h3>
            <p class="greeting-text fadeIn">
              <span>桜寿司では、</span>
              <span>日本各地から直送される新鮮な食材を使用し</span>
              <span>一貫一貫に心を込めてお作りしています</span>
              <span>毎朝、市場にて実際に目で見て手に触れ</span>
              <span>一番のものだけを目利き、仕入れております</span>
              <span>品質と鮮度に妥協はありません</span>
            </p>
            <p class="works-text-en fadeIn">
              At Sakura Sushi, we use fresh ingredients delivered directly from various regions across Japan, <br>crafting each piece with heartfelt care. <br>
              Every morning, we personally visit the market,<br> selecting only the best ingredients with our own eyes and hands. <br>
              We compromise neither on quality nor on freshness.
            </p>
            <img class="fadeFromLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/img/works1.jpg" alt="" width="664" height="443">
          </div>
          <div class="works-item">
            <h3 class="sub-heading fadeIn">米</h3>
            <h3 class="sub-heading-en fadeIn">Sushi Rice</h3>
            <p class="greeting-text fadeIn">
              <span>ネタの良さを引き出す米</span>
              <span>寿司ネタに合うよう</span>
              <span>選び抜いた国産米を使用しております</span>
            </p>
            <p class="works-text-en fadeIn">
              We also use carefully selected domestic rice that perfectly complements our sushi ingredients,<br>
              bringing out the best in each piece.
            </p>
            <img class="fadeFromRight" src="<?php echo get_stylesheet_directory_uri(); ?>/img/works2.jpg" alt="" width="923" height="425">
          </div>
          <div class="works-item">
            <h3 class="sub-heading fadeIn">技術</h3>
            <h3 class="sub-heading-en fadeIn">Technique</h3>
            <p class="greeting-text fadeIn">
              <span>私たち寿司職人は</span>
              <span>素材を最大限に活かすため</span>
              <span>握り方にもこだわっています</span>
            </p>
            <p class="works-text-en fadeIn">
              Our sushi chefs are dedicated to maximizing the potential of each ingredient, <br>
              paying meticulous attention to the way each piece is crafted.
            </p>
            <img class="fadeFromLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/img/works3.jpg" alt="" width="859" height="572">
          </div>
        </div>
        
      </section>
      <section id="dishes" class="dishes">
        <div class="dishes-container">
          <h3 class="sub-horizontal-heading">季節の色どり、海の恵みをご堪能ください</h3>
          <h3 class="sub-horizontal-heading-en">Enjoy the seasonal colors and the blessings of the sea.</h3>
          <h2 class="heading horizontal">季節のメニュー</h2>
          <h2 class="heading-horizontal-en">Seasonal Menu</h2>
          <div class="menu-list scrollWrapper">
            <div class="fadeInOrder">
              <h4 class="menu-item-heading">貝のお造り</h4>
              <h4 class="menu-item-heading-en">Shelfish Sashimi</h4>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-1.jpg" alt="" width="1920" height="1280">
            </div>
            <div class="fadeInOrder">
              <h4 class="menu-item-heading">季節のアラカルト</h4>
              <h4 class="menu-item-heading-en">Seasonable A La Carte</h4>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-2.jpg" alt="" width="1920" height="1280">
            </div>
            <div class="fadeInOrder">
              <h4 class="menu-item-heading">季節のお椀</h4>
              <h4 class="menu-item-heading-en">Seasonable Soup</h4>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-3.jpg" alt="" width="1920" height="1280">
            </div>
            <div class="fadeInOrder">
              <h4 class="menu-item-heading">手鞠寿司</h4>
              <h4 class="menu-item-heading-en">Temari Sushi</h4>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-4.jpg" alt="" width="1920" height="1280">
            </div>
          </div>
        </div>
        <div class="btn-section">
          <a href="<?php echo esc_url(home_url('/')); ?>menu/">
            <button class="btn menu"></button>
            <span class="menu-btn-text">お品書き / Menu</span>
          </a>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>