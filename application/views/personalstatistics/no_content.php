<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Welcome <?php echo ucfirst($this->session->username)." <small>(".ucfirst($this->session->server).")</small>"; ?> </h3>
        </div>
        <div class="panel-body">
          <div class="col-md-4"> <img src="<?php echo IMG_path; ?>aurelion-sol-wallpaper.png" alt="Welcome Summoner" class="golden_border img-responsive center-block"> </div>
          <div class="col-md-8">
              
            <h3>You see this page because<br />
              we didn't store any data from your ARAM match history at this point.</h3>
            <p> If you just registered, make sure you have <span class="text-primary">at least one of ARAM</span> type game in your last 10 games.<br />
              You can synchronize your data whenever you want by hit the
              <?php
$username = $_SESSION["username"];
                    $server = $_SESSION["server"];
echo "<a href=\"/sync/$username/$server\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-refresh\"></span>Sync my Data</a>";?>
              at the top nav.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
