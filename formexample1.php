


<?php
	$k = $_GET["kind"];
	$w = $_GET["keyword"];
	?>

	<p> form���� ������ ���� ���</p>
	<p> ��� ����(kind): <?php print $k; ?> </p>
	<p> Ű����(keyword)�� [ <?php print $w; ?> ] �Դϴ�.</p>
	
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