<?php 

require_once ('statistician/statistician.php');

$sObj = new STATISTICIAN();
$serverObj = $sObj->getServer();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<head>
  <title><?php echo (SERVER_NAME); ?> :: Statistician</title>
  <link href="statistician.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="jquery-1.5.min.js"></script>
</head>

<script type="text/javascript">
	$(window).load(function(){
		/* Keep the template looking great :) */
		$('#content').height($('#content').height() - 200);
	});
</script>

<body>
	<div id="topLeadBar"><div id="titleMain"></div><div id="creeper"></div></div>
	<div id="content">
        <div id="listTitle"><a href="./?view=main"><?php echo (SERVER_NAME); ?></a></div>
		<?php
			switch ($_GET['view']) {
				case 'player':
				include('player_view.php');
				break;
				case 'playerBlock':
				include ('player_blocks.php');
				break;
				case 'playerItems':
				include ('player_items.php');
				break;
				case 'playerList':
				include('player_list.php');
				break;
				case 'playerKills':
				include('player_kills.php');
				break;
				case 'globalBlocks':
				include('global_blocks.php');
				break;
				case 'globalItems':
				include('global_items.php');
				break;
				case 'globalKills':
				include ('global_kills.php');
				break;
				case 'main':
				default:
                include ('server_page.php');
				break;
			}
		?>
	</div>
	<br />
	<div id="copyright">Statistician by ChaseHQ :: Running Database Version <?php echo($sObj->getDatabaseVersion()); ?><br />Portal Version 1.2.3</div>
</body>