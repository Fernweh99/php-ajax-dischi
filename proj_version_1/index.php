<?php
  include 'data/dischi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- STYLE -->
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<header>
    <div class="container h-100 d-flex align-items-center justify-content-between">
      <div class="logo text-white">Logo</div>
    </div>
  </header>
  <main>
    <section class="cd-card-">
      <div class="container">
        <div class="row g-5 row-cols-5">
          <?php foreach ($discs as $disc) : ?>
            <div class="col">
              <div class="cd-card h-100">
                <img class="img-fluid" src="<?= $disc['poster'] ?>" alt="">
                <div class="cd-info text-center">
                  <h4 class="cd-title"><?= $disc['title'] ?></h4>
                  <span class="cd-moreinfo">
                    <?= $disc['author'] ?><br/>
                    <?= $disc['year'] ?>
                  </span>
                </div>
              </div>  
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
</body>
</html>