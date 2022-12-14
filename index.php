<?php
require "system/init.system.php";
?>
<?php if (isset($_SESSION['logged_user'])) : ?>
  <?php
  include 'system/page/index.main.php';
  ?>
<?php else : ?>
  <?php
  include "system/sys.login.php"
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>ВКанаве</title>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ВКанаве</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ВКанаве</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Регистрация</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Вход</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">ВКанаве</h1>
          <p class="col-lg-10 fs-4">Ваш твиттер бьется в конвульсиях, по сравнению с нами.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form method="POST" action="/" class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
              <input type="login" name="login" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" name="do_login" type="submit">Вход</button>
            <hr class="my-4">
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
            <script type="text/javascript">
              VK.init({
                apiId: 8016642
              });
            </script>

            <!-- VK Widget -->
            <div id="vk_auth"></div>
            <script type="text/javascript">
              VK.Widgets.Auth("vk_auth", {
                "authUrl": "/login/vk"
              });
            </script>
            <small class="text-muted">У вас нету аккаунта? <a href="./reg">Давайте создадим</a>.</small>
          </form>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php endif; ?>