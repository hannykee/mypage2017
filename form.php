


<?php
	$k = $_GET["person"];
	$w = $_GET["dev"];
	$q = $_GET["gra"];
  $r = $_GET["class"];
	?>

	<p> ��û����</p>
	<p> name: <?php print $k; ?> </p>
	<p> dept:  <?php print $w; ?>  �Դϴ�.</p>
	<p> year: <?php print $q; ?> </p>
	<p> class: <?php print $r; ?> </p>


	<script type="text/javascript">
		window.open(<?php print $result_url;?>);
		</script>