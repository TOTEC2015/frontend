
<?php

 // Controller

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>商品: It000000のページ</title>
    <link href='/css/item.css' rel='stylesheet'>
  </head>
  <body>
    <div class="app">

      <!-- Navbar content -->
      <nav class="navbar navbar-light logo" style="background-color: #e3f2fd;">
        Amezon.com
      </nav>

      <!-- breadcrumb -->
      <ol class="breadcrumb" style="background-color: rgba(1, 1, 1, .05);">
        <li><a href="#">Home</a></li>
        <li><a href="#">Items</a></li>
        <li class="active"><?= $item.itemId ?></li>
      </ol>

      <!-- container -->
      <div class="container">

        <!-- User Info -->
        <div class="row p-a">
          <div class="text-center col-xs-6">
            <img src="/img/item/<?= $item.itemId ?>.png" class="img-rounded" width="100" height="100" alt="商品It000000のサムネイル画像">
          </div>
          <div class="col-xs-6">
            <p><?= $item.itemId ?></p>
            <p class="m-b-0"><?= $item.itemSupplier ?></p>
            <p class="m-b-0">売上個数: <?= $item.itemSoldQuantity ?></p>
            <p><?= item.itemSalePrice /*TODO: Numberformat */ ?>円</p>
            <p>
              <?php foreach (item.itemTags as $tag) ?>
                <span class="label label-pill label-warning"><?= $tags?></span>
              <?php endforeach ?>
            </p>
          </div>
        </div>
        <div class="m-b-md">
          <button type="button" class="btn btn-success btn-lg btn-block">この商品を購入する</button>
        </div>
      </div>

      <!-- Users -->
      <div class="users">
        <h5 class="p-a">この商品をおすすめしているユーザー</h5>
        <div class="row p-l p-r m-r-0">
          <?php foreach (item.searchUsers as $user) ?>
          <div class="col-xs-3 p-a-0 p-b text-center">
            <img src="/img/user/<?= $user.userId ?>.png" alt="商品Us000001のサムネイル画像" class="img-circle" width="48" height="48">
          </div>
          <?php endforeach ?>
        </div>
      </div>

      <!-- Recent Posts -->
      <div class="posts">
        <h5 class="p-a">最近投稿されたレビュー</h5>
        <div class="row p-l p-r">
          <?php foreach (item.searchPosts as $post) ?>
          <div class="col-xs-3 p-a-0 p-b text-center">
          <img src="/img/item/<?= $post.post.itemId ?>.png" alt="商品It000000のサムネイル画像" class="img-rounded" width="48" height="48">
          </div>
          <?php endforeach ?>
        </div>
      </div>

      <nav class="navbar navbar-light bg-inverse">
        &copy; 2015 Amezon.com
      </nav>

    </div>

  </body>
</html>
