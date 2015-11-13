
<?php

 // Controller

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>ユーザー: <?= $user.userId ?>のページ</title>
    <link href='/css/user.css' rel='stylesheet'>
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
        <li><a href="#">Users</a></li>
        <li class="active"><?= $user.userId ?></li>
      </ol>

      <!-- container -->
      <div class="container">

        <!-- User Info -->
        <div class="row p-a-md">
          <div class="text-center col-xs-6">
            <img src="/img/user/<?= $user.userId ?>.png" class="img-circle" width="100" height="100" alt="Us000000のサムネイル画像">
          </div>
          <div class="col-xs-6">
            <p><?= $user.userId?></p>
            <p>スコア: <?= $user.userPublicScore ?></p>
          </div>
        </div>
        <div class="m-b-md">
          <button type="button" class="btn btn-primary-outline btn-lg btn-block">フレンド申請する</button>
        </div>
      </div>

      <!-- Friends -->
      <div class="friends">
        <h5 class="p-a">フレンド <span class="label label-pill label-default">4</span></h5>
        <div class="list-group">
foreach
          <?php foreach (user.userFriends as $user) ?>
          <button type="button" class="list-group-item">
            <a href="#" style="color: #333;">
              <img src="/img/user/<?= $user.userId?>.png" alt="Us000001のサムネイル画像" class="img-circle m-r" width="24" height="24"><?= $user.userId?>
            </a>
          </button>
          <?php endforeach ?>

          <?php if (count(user.userFriends) > 3: ?>
          <button type="button" class="list-group-item">
            <div class="text-right">
              <a href="#">もっと見る</a>
            </div>
          </button>
          <?php endif ?>
        </div>
      </div>

      <!-- Reccomended Items -->
      <div class="items">
        <h5 class="p-a">このユーザーのおすすめ商品</h5>
        <div class="row p-l p-r m-r-0">
          <?php foreach (user.searchItems as $item) ?>
          <div class="col-xs-3 p-a-0 p-b text-center">
          <img src="/img/item/<?= $item.itemId ?>.jpg" alt="商品It000000のサムネイル画像" class="img-rounded" width="48" height="48">
          </div>
          <?php endforeach ?>
        </div>
      </div>

      <!-- Recent Posts -->
      <div class="posts">
        <h5 class="p-a">最近投稿されたレビュー</h5>
        <div class="row p-l p-r">
          <?php foreach (user.searchPosts as $post) ?>
          <div class="col-xs-3 p-a-0 p-b text-center">
            <img src="/img/item/<?= $post.postId?>.jpg" alt="商品It000000のサムネイル画像" class="img-rounded" width="48" height="48">
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
