<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ВКанаве</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer/">



  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="sticky-footer.css" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ВКанаве</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/notes/create">Создать заметку</a>
        <a class="nav-link" href="/notes/all">Все заметки</a>
        <?php
        if ($_SESSION['logged_user']->admin === true) {
          echo '<a class="nav-link" href="/admin">Панель администратора</a>';
        }
        ?>
        <a class="nav-link" href="/logout">Выйти</a>
      </div>
    </div>
  </div>
</nav>

<body class="d-flex flex-column h-100">

  <!-- Begin page content -->
  <main class="flex-shrink-0" style="padding-top: 5%;">
    <div class="container">
      <form enctype="multipart/form-data" class="original-up" action="/notes/create/go" method="POST">
        <div class="form-group">
          <div class="input-group">
            <h1>
              Написать пост
            </h1>
          </div>

          <textarea type="text" name="publ" class="form-control center" id="exampleFormControlTextarea1" rows="5"></textarea>
          </br>

          <!--Images upload-->
          <div class="mb-3">
            <label for="formFile" class="form-label">Вы можете прикрепить изображение, которое будет сопровождаться вашим постом</label>
            <input class="form-control" type="file" name="userfile">
          </div>
          <div align="right">
            <button type="submit" name="do_publish" class="btn btn-primary">Опубликовать</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">pnsrc. 2021</span>
    </div>
  </footer>



</body>

</html>