<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="임현진"/>
	<meta name="Keywords" content="포트폴리오, Portfolio, 임현진의 포트폴리오, Hyeonjin's Portfolio"/>
	<meta name="Description" content="임현진의 포트폴리오를 소개합니다."/>
	<title>PHP Project</title>
	<link rel="stylesheet" href="css/common_style.css"/>
	<link rel="stylesheet" href="css/sub11.css"/>
	<link rel="stylesheet" href="css/common_style2.css"/>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="https://kit.fontawesome.com/82c75915db.js" crossorigin="anonymous"></script>
	<script src="../js/prefixfree.min.js"></script>
	<script src="../js/html5div.js"></script>
	<script src="../js/html5shiv.js"></script>
	<script src="../js/guideText.js"></script>
    <script src="../js/script.js"></script>
    <script src="js/sub11.js"></script>
    <script>
		function check_input(){
			if(!document.board_form.subject.value.trim())
			{
				alert("제목을 입력하세요!");
				document.board_form.subject.focus();
				return;
			}
			if(!document.board_form.subject.value)
			{
				alert("제목을 입력하세요!");
				document.board_form.subject.focus();
				return;
			}
			if(!document.board_form.content.value.trim())
			{
				alert("내용을 입력하세요!");
				document.board_form.content.focus();
				return;
			}
			if(!document.board_form.content.value)
			{
				alert("내용을 입력하세요");
				document.board_form.content.focus();
				return;
			}
			document.board_form.submit();
		}
	</script>
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
	<section>
		<div id="wrapper">
		<div id="container">
			<div class="asidewrap">
				<div class="aside1">
					<div class="aside1_subj">홈페이지도우미</div>
						<div class="sidewrap">
							<div class="sidemenu">
								<span class="title">전체메뉴</span>		
									<div class="subsidemenu">
										
									</div>
							</div>
							<div class="sidemenu">
								<span class="title">이용정책</span>		
									<div class="subsidemenu">
										<ul class="sidecontent cf">		
											<li><a href="#">이용약관</a></li>		
											<li><a href="#">개인정보처리방침</a></li>
											<li><a href="#">저작권 정책</a></li>
											<li><a href="#">웹접근성정책</a></li>
											<li><a href="#">장애인이용안내</a></li>
											<li><a href="#">이메일무단수집거부</a></li>
										</ul>
									</div>
							</div>
							<div class="sidemenu">
								<span class="title">뷰어다운로드</span>
							</div>
							<div class="sidemenu">
								<span class="title">RSS</span>
							</div>
							<div class="sidemenu">
								<span class="title">소셜미디어맵</span>
							</div>
							<div class="sidemenu">
								<span class="title">배너존</span>
							</div>
							<div class="sidemenu">
								<span class="title">회원정보</span>		
									<div class="subsidemenu">
										<ul class="sidecontent cf">		
											<li><a href="#">로그인</a></li>		
											<li><a href="#">아이디찾기</a></li>
											<li><a href="#">정보수정</a></li>
											<li><a href="#">회원가입</a></li>
											<li><a href="message_form.php">쪽지 보내기</a></li>
										</ul>
									</div>
							</div>
					</div>
				</div>
				<div class="aside2">
						<h3>가장 많이 본 정보</h3>
						<div class="tab_wrap">
							<div class="tab">
								<ul class="tabs">
									<li><a href="#panelS-1" class="active">전체</a></li>
									<li><a href="#panelS-2">통합자료실</a></li>
								</ul>
							</div>
							<div id="panelS-1" class="tab_content panel">
								<ul class="cf">
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">1</span>
										투명한 개표 절차[4. 7. 재·보궐선거] 
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">2</span>
										후보자 정보공개 내용에는 어떤 것들이 있을까요?[재보궐선거] 
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">3</span>
											2021년도 제3회 경력경쟁채용시험 시행계획 공고
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">4</span>
											2021. 4. 7. 실시 재·보궐선거 정당·후보자를 위한 선거사무안내  
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">5</span>
											후보자 등록은 어떻게 하나요? [2021. 4. 7. 재·보궐선거] 
										</a>
									</li>
								</ul>
							</div>
							<div  id="panelS-2" class="tab_content ie panel">
								<ul class="cf">
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">1</span>
											2021. 4. 7. 실시 재·보궐선거 정당·후보자를 위한 선거사무안내 
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">2</span>
											『반환기탁금 및 보전비용의 인계비용 계산프로그램』(4. 7. 재.보궐선거용)  
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">3</span>
											Election Information for Foreign Voter (외국인 유권자 선거정보)
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">4</span>
											투표참여 대국민행동수칙  
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">5</span>
											공직선거법 개정의견(2021. 4. 21)  
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				<div class="aside3">
					<h3>주요선거정보</h3>
					<ul>
						<li><a href="#">정치관계법 질의</a></li>
						<li><a href="#">정치관계법 위반행위신고</a></li>
						<li><a href="#">홈페이지 개선의견</a></li>
						<li><a href="#">선거통계 시스템</a></li>
						<li><a href="#">선거법령정보</a></li>
						<li><a href="#">정책공약알리미</a></li>
					</ul>
				</div>
			</div>
			<div class="article1">
				<div class="menulog">
					<!-- 왼쪽 메뉴 -->
					<span class="homeicon"></span>
					<span class="location">HOME > 홈페이지도우미 > 회원정보 > 쪽지 보내기 </span>
					<!-- 오른쪽 좋아요, SNS, 프린트 -->
					<span class="print_btn"></span>
					<span class="sns_n"></span>
					<span class="sns_k"></span>
					<span class="sns_t"></span>
					<span class="sns_f"></span>
					<span class="like_btn"></span>
				</div>
		<div class="message_info">
			<p>중앙선거관리위원회 회원들의 자유로운 의견 교환을 위해 제공하는 서비스 입니다.<br><br>
			아름다운 선거 문화를 위해 회원분들은 인터넷 에티켓을 준수해주시기 바랍니다.</p>
			<div class="message_img">
				<img src="images/messenger.png">
			</div>
		</div>
		<div class="board_box">
			<div class="board_menu_wrap">
				<h3 id="write_title">
					게시판 글 수정하기
				</h3>
			</div>
			<?php
		$num = $_GET["num"];
		$page = $_GET["page"];

		$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
		$sql = "select * from board where num=$num";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		$name = $row["name"];
		$subject = $row["subject"];
		$content = $row["content"];
		$file_name = $row["file_name"];
	?>
			<div class="board_content_wrap">
				<form  name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
					<ul id="board_form">
						<li>
							<span class="col1">이름 : </span>
							<span class="col2 name"><?=$name?></span>
						</li>		
						<li>
							<span class="col1">제목 : </span>
							<span class="col2"><input class="subject" name="subject" type="text" value="<?=$subject?>"></span>
						</li>	    	
						<li id="text_area">	
							<span class="col1">내용 : </span>
							<span class="col2">
							<textarea name="content"><?=$content?></textarea>
							</span>
						</li>
						<li>
							<span class="col1"> 첨부 파일</span>
							<span class="col2"><?=$file_name?></span>
						</li>
					</ul>
					<ul class="buttons">
						<li><button type="button" onclick="check_input()">수정하기</button></li>
						<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
					</ul>
				</form>
			</div>
		</div><!--board_box -->
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>