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
      <h2>Freedompop usage for <?php $user ?></h2>
      <p>
        Days Left:
        <?php
          $details->days_left;
        ?>
      </p>
      <p>
        Data Used:
        <?php
          $details->data_used;
        ?>
      </p>
      <p>
        Total Data Available:
        <?php
          $details->total_data;
        ?>
      </p>
    </div>
    <?php
      }
    ?>
  </body>
</html>
