<footer class="footer footer-a">
      <div id="company" class="company">
        <div class="company-container">
          <div class="footer-menu">
            <ul class="footer-list">
              <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>#greeting">ご挨拶</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>#works">私たちのこだわり</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>#dishes">季節の逸品</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/menu/">お品書き</a></li>
              <li><a href="/">お問い合わせ</a></li>
              <li><a href="/">Instagram</a></li>
              <li><a href="https://maps.app.goo.gl/fXGpp7JJYVcbPRPPA" target="_blank">Google Map</a></li>
            </ul>
            <ul class="footer-list-en">
              <li><a href="/">Home</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>#greeting">Greeting</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>#works">works</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>#dishes">Seasonable Menu</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/menu/">Menu</a></li>
              <li><a href="/">Reservation</a></li>
              <li><a href="/">Instagram</a></li>
              <li><a href="https://maps.app.goo.gl/fXGpp7JJYVcbPRPPA" target="_blank">Google Map</a></li>
            </ul> 
          </div>
          
          <div class="company-info">
            <h2 class="heading">店舗のご案内<span class="en-heading">Company</span></h2>
            <div class="company-info-inner">
              <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo3.png" alt="桜寿司" width="40" height="135">
              <table class="table-jp">
                <thead>
                  <tr>
                    <th>郵便番号</th>
                    <th>住所</th>
                    <th>電話番号</th>
                    <th>営業時間</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>五五五―五五五五</td>
                    <td>東京都千代田区丸の内一丁目</td>
                    <td>五五五―五五五五―五五五五</td>
                    <td>日曜・月曜定休</td>
                    <td>昼　十一時から</td>
                    <td>夜　十七時 土曜日は十五時から</td>
                  </tr>
                </tbody>
              </table>      
            </div>
            <table class="table-en">
              <tr>
                <th>Post Number</th>
                <td>555-555</td>
              </tr>
              <tr>
                <th>Address</th>
                <td>1 Marunouchi, Chiyoda-ku, Tokyo</td>
              </tr>
              <tr>
                <th>Tel</th>
                <td>555-5555-5555</td>
              </tr>
              <tr>
                <th>Business Hours</th>
                <td>Closed on Sundays and Mondays</td>
              </tr>
              <tr>
                <th></th>
                <td>Lunch: Open from 11:00 AM</td>
              </tr>
              <tr>
                <th></th>
                <td>Dinner: Open from 5:00 PM (from 3:00 PM on Saturdays)</td>
              </tr>
            </table>  
            
          </div>
        </div>
      <p class="copy-right">&copy; 桜寿司 All Rights Reserved</p>
    </div>
    </footer>
  <?php wp_footer(); ?>
  </body>
</html>