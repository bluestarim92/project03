<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
	include "../define.php";

	$id   = $_POST["id"];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];

	$email = $email1."@".$email2;
	$regist_day = date("Y-m-d (H:i)"); // 현재의 년-월-일-시-분 을 저장

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);

	$sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

	mysqli_query($con, $sql); // $sql에 저장된 명령 실행
	mysqli_close($con);

	echo "
		<script>
			location.href = '../sub6/login_form.php'; //내 프로젝트에 적용할떄는 index2.php로 할것 index2.php에는 로그인 카운터가 없어야함
		</script>
	";
?>