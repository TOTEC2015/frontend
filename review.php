<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>レビュー: 商品<?= post.item.itemId ?> レビューワー<?= post.user.userId ?> のページ</title>
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
        <li><a href="#">Reviews</a></li>
        <li class="active"><?= post.postId ?></li>
      </ol>

      <!-- container -->
      <div class="container">

        <!-- User Info -->
        <div class="row p-a">
          <div class="text-center col-xs-6">
          <img src="<?= post.item.itemId ?>" class="img-rounded" width="100" height="100" alt="商品<?=  post.item.itemImage ?>のサムネイル画像">
          </div>
          <div class="col-xs-6">
            <p><?= post.item.itemId ?></p>
            <p class="m-b-0"><?= post.item.itemSupplier ?></p>
            <p class="m-b-0">売上個数: <?= post.item.SoldQuantity ?></p>
            <p><?= post.item.SalePrice /*TODO: NUMBER FORMAT*/?>円</p>
            <p>
              <?php foreach (post.postTags as $tag) ?>
              <span class="label label-pill label-warning"><?= tag?></span>
              <?php endforeach ?>
            </p>
          </div>
        </div>
      </div>

      <!-- user review -->
      <div class="userReview p-t">
        <blockquote class="blockquote">
          <p>この商品、いい感じ。</p> <? /* NOTES: 固定のコメント */>
          <footer>by <img src="<?= post.item.user.userImage ?>" class="img-circle" width="24" height="24" style="vertical-align: bottom;"> <?= post.item.user.userNo ?></cite></footer>
        </blockquote>
        <!-- review info -->
        <div class="reviewInfo text-muted p-l p-r p-b" style="font-size: 0.8rem;">
          <p class="m-b-0">投稿日時: <?= post.postDateTime ?></p><? /*TODO:Date fomat 2015年7月12日 19:38 */ ?>
          <p class="m-b-0">商品の評価点数: <?= post.postItemScore ?></p>
          <p class="m-b-0">商品に対するアクションステータス: <?= post.postItemState ?></p>
        </div>
      </div>

      <!-- liked users -->
      <div class="likedUsers">
        <h5 class="p-a">いいねしたユーザー <span class="label label-pill label-default">4</span></h5>
        <div class="list-group">

          <?php foreach (post.postLikeUsers as $userId) ?>
          <button type="button" class="list-group-item">
            <a href="#" style="color: #333;">
            <img src="/img/user/<?= userId ?>.jpg" class="img-circle m-r" width="24" height="24"><?= userId?>
            </a>
          </button>
          <?php endforeach ?>
          <?php if (count(post.postLikeUsers) > 3: ?>
          <button type="button" class="list-group-item">
            <div class="text-right">
              <a href="#">もっと見る</a>
            </div>
          </button>
          <?php endif ?>
        </div>
      </div>

      <!-- Users -->
      <div class="users">
        <h5 class="p-a">この商品をおすすめしているユーザー</h5>
        <div class="row p-l p-r m-r-0">
          <?php foreach (searchItems as $user) ?>
          <div class="col-xs-3 p-a-0 p-b text-center">
            <img src="/img/user/<?= user.id ?>.jpg" alt="商品Us000001のサムネイル画像" class="img-circle" width="48" height="48">
          </div>
          <?php endforeach ?>
        </div>
      </div>

      <!-- Reccomended Items -->
      <div class="items">
        <h5 class="p-a">最近投稿されたレビュー</h5>
        <div class="row p-l p-r">

          <?php foreach (searchPost as $post) ?>
          <div class="col-xs-3 p-a-0 p-b text-center">
            <img src="/img/item/<?= post.item.itemImage ?>.png" alt="商品It000000のサムネイル画像" class="img-rounded" width="48" height="48">
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
