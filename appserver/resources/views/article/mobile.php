<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$article['title']?></title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <style media="screen">
        .page-header {
            text-align: center;
        }
        img {
            width: 100%;
            height: auto;
        }
    </style>

  </head>
  <body>
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h2><?=$article['title']?></h2>
        <p><?=date('Y-m-d H:i:s', $article['add_time'])?></p>
      </div>
      <p class="lead"><?=$article['content']?></p>
    </div>
  </body>
</html>
