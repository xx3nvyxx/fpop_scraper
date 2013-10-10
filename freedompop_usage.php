<!DOCTYPE html>
<html>
  <head>
    <title>
      Freedompop Usage Stats
    </title>
  </head>

  <body>
<?php
  // Account info
  require('./config.php');

  //class
  require('./FpopDetails.php');
  
  
  foreach ($accounts as $account)
  {
    $user = $account["user"];
    $details = new FpopDetails($account["email"], $account["password"]);
?>
    <div>
      <h2>Freedompop usage for <?=$user ?></h2>
      <p>
        Days Left: <?=$details->days_left ?>
      </p>
      <p>
        Data Used: <?=$details->data_usage ?>
      </p>
      <p>
        Total Data Available: <?=$details->total_data ?>
      </p>
    </div>
<?php
  }
?>
  </body>
</html>
