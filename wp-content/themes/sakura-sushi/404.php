<?php get_header(); ?>
    <main class="err-page-main">
      <h2 class="page-title">ページが見つかりません<span class="en-heading">Not Found</span></h2>
      <div class="inner">
        <div class="box is-page404">
          <div class="page404-text-box">
            <p>お探しのページは、削除されたか、名前が変更された可能性があります。<br>
            直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。</p>
            <p>ブラウザの再読込みを行ってもこのページが表示される場合は、<a class="home-link" href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>から目的のページをお探しください。</p>
          </div>
          <div class="page404-text-box-en">
            <p>The page you are looking for may have been deleted or its name might have been changed.<br>
            If you entered the address directly, please check to ensure it is correct.</p>
            <p>If reloading the browser does not resolve the issue, please try finding the desired page from the <a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" >homepage</a>.</p>
          </div>
        </div>
        <div class="language">
          <p id="language" >Language</p>
          <button type="button" id="jp-btn" class="switch-btn">Jp</button>
          <span> / </span>
          <button type="button" id="en-btn" class="switch-btn">En</button>
        </div>
      </div>
    </main>
    <?php get_footer('subordinate'); ?>