


<?php
	$k = $_GET["kind"];
	$w = $_GET["keyword"];
	?>

	<p> form으로 데이터 전송 결과</p>
	<p> 기사 유형(kind): <?php print $k; ?> </p>
	<p> 키워드(keyword)는 [ <?php print $w; ?> ] 입니다.</p>
	
	<?php
	if ($k=="news")
		$result_url= "'http://www.google.co.kr/search?tbm=nws&q=$w'";
	elseif ($k=="blog")
		$result_url= "'http://section.blog.naver.com/sub/SearchBlog.nhn?option.keyword=$w'";
	elseif ($k=="search")	
		$result_url= "http://search.naver.com/search.naver?query=$w'";
	?>
	
	<script type="text/javascript">
		window.open(<?php print $result_url;?>);
		</script>