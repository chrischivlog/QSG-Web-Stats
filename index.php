<?php
include 'config.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $Tabname;?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="header.css" >
<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.ico">


<span style="color: white">
      			<br>
      			<br>
      			<br>
<center><a href="<?php echo $logo_link;?>"><img src="<?php echo $logo;?>" width="280" height="50" ></a></img>
      <br>
      	<br>
      		<br>
				
  <h2>Top 10 Spieler</h2>
  <p>Hier Siehts du alle aktuellen Statistiken des Plugins,
  	 <a href="https://www.spigotmc.org/resources/minigame-quick-survivalgames-bungeecord.14983/">
   QSG</a> von CoredTV</p>

<?php
$pdo = new PDO("mysql:host=$servername;dbname=$Database", $username, $password);

$sql = "SELECT UUID, NAME, WIN, LOSE, KILLS, DEATHS FROM qsg  ORDER BY WIN DESC LIMIT 10";
foreach ($pdo->query($sql) as $row) {

}

?>


<br>
				<?php
		foreach ( $pdo->query ( $sql ) as $row ) {
			?>

<div class="container">

  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
       <img title="TOP Spieler: <?php echo $row ["NAME"];?>"
        src="https://crafatar.com/avatars/<?php echo $row ["UUID"];?>?size=25">
        Name:<strong> <?php echo $row ["NAME"];?></strong></div>
      <div class="panel-body"> <span style="color: Black">
      Gewonnene Spiele: <?php echo $row ["WIN"];?>
      Verlorene Spiele: <?php echo $row ["LOSE"];?>
      Spieler Getötet: <?php echo $row ["KILLS"];?>
      Gestorben: <?php echo $row ["DEATHS"];?>
      </div><span>
    </div>
  </div>
</div>

				
  					
  					<?php
		}
		?>



<strong><a href="<?php echo $impressum;?>">Impressum </strong></a>

      			<br>
      			<br>
  <p>Stats System: <strong>Quick-Survivalgames (BungeeCord) by CoredTV</strong>, Webseite Entwickelt von <strong><a href="https://twitter.com/chrischivlog">Christopher Oneisz</a></strong></p> 	
	<p>Style & CSS: by <strong><a href="https://getbootstrap.com">Bootstarp</a></strong>

</span>