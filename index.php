<?php include_once 'info.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Server & File Info</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center p-4">File Info and Client Info</h1>
      <?php if($servers): ?>
        <ul class="list-group">
          <?php foreach ($servers as $server => $value): ?>
            <li class="list-group-item">
              <strong><?php echo $server; ?>: </strong>
              <?php echo $value; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </body>
</html>
