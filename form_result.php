
<meta charset="utf-8"/>

<?php
	$a = $_GET["user_name"];
	$b = $_GET["user_age"];
	$c = $_GET["user_sex"];
  $d = $_GET["user_email"];
  $e = $_GET["concern"];
  $f = $_GET["a1"];
  $g = $_GET["b1"];
  $h = $_GET["c1"];
  $i = $_GET["d1"];
  $j = $_GET["idea"];
	?>
  <h2>Hanny World에 대한 피드백</h2>
	<p> 요청정보</p>
	<p> name: <?php print $a; ?> </p>
	<p> age:  <?php print $b; ?>  입니다.</p>
	<p> sex: <?php print $c; ?> </p>
	<p> email: <?php print $d; ?> </p>
	<p> concern: <?php print $e; ?> </p>
	<hr>
	<p> 방문자의 웹페이지의 구성에 대한 만족도 : <?php print $f; ?> </p>
	<p> 방문자의 웹페이지의 정보에 대한 만족도 : <?php print $g; ?> </p>
	<p> 방문자의 웹페이지의 전달에 대한 만족도 : <?php print $h; ?> </p>
	<p> 방문자의 웹페이지의 디자인에 대한 만족도 : <?php print $i; ?> </p>
	<p> 방문자가 입력한 추가 의견은 : <?php print $j; ?>  입니다.</p>
  <hr>
	<script type="text/javascript">
		window.open(<?php print $result_url;?>);
		</script>