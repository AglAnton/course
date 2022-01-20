<div class="nav d-flex align-items-md-center">
  <!-- <div class="col-md-1 col-3 offset-lg-1 offset-0"><img src="img/logo.png" alt="logo" class="logo"></div> -->
  <div class="col-md-1 col-3 offset-lg-1 offset-0"></div>
  <div class="col-lg-8 col-md-10 col-6 offset-0 d-flex justify-content-center">
    <ul class="nav-list d-none d-md-flex" id="main-nav">
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#about-project">О проекте</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#courses">Видеокурсы</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#coach">Онлайн-тренеры</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php"><img src="/img/logo.png" alt="logo" class="logo mx-2"></a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#our-mission">Наша миссия</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#info">Наши задачи</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#reviews">Отзывы</a></li>
      <!-- <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#lesson">Видеоуроки</a></li> -->
    </ul>
    <div class="nav-button d-block d-md-none">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="col-md-1 col-3 offset-0 d-flex justify-content-center">
    <a href="https://vk.com/tbptrain" class="text-decoration-none" target="_blank">
      <div class="circle-btn">
        <i class="icon-vkontakte"></i>
      </div>
    </a>
    <a href="/lk/" class="text-decoration-none">
      <div class="circle-btn ms-2">
        <?php if (!empty($_COOKIE['user_id'])) { ?>
          <i class="icon-adult"></i>
        <?php } else { ?>
          <i class="icon-login"></i>
        <?php } ?>
      </div>
    </a>
  </div>
</div>

<div class="nav-mini">
  <ul class="nav-mini-list" id="mini-nav">
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#about-project">О проекте</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#courses">Видеокурсы</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#coach">Онлайн-тренеры</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#our-mission">Наша миссия</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#info">Наши задачи</a></li>
      <li class="nav-list_item d-flex align-items-center"><a href="/index.php#reviews">Отзывы</a></li>
    <!-- <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#lesson">Видеоуроки</a></li> -->
  </ul>
</div>