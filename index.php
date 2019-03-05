<?php include_once __DIR__ . '/common/php/head-1.php'; ?>
<?php include_once __DIR__ . '/common/php/head-2.php'; ?>
<script src="common/js/navfix.js"></script>
<script src="common/js/bgswitcher.js"></script>
<script src="common/js/jquery.fadethis.min.js"></script>
<script src="common/js/common.js"></script>
<title>KAIKAイノベーションラボ</title>
</head>

<body id="top">

<?php include_once __DIR__ . '/common/php/header.php'; ?>

<div class="visualWrap">
	<div class="bgSlider">
		<p class="bgSlider__title slide-top" data-plugin-options='{"reverse": false}'>
			<span class="visualSubTitle">社会課題の解決を題材にした次世代イノベーター育成プログラム</span><br>
			<img src="common/img/logo_innovation_l.svg" alt="ＫＡＩＫＡイノベーションラボ" width="783" height="50"><br>
			<span class="visualPre">Presented By</span><img src="common/img/logo_jma_etic_s.svg" alt="Presented By JMA & ETIC" width="205px" height="35px">
		</p>
	<!-- /.bgSlider --></div>
	<a href="#firstPage">
		<div class="nextBtn">
			<img src="common/img/icon_scroll_wh.svg" alt="SCROLL"/>
			<p>SCROLL</p>
		<!-- /.nextBtn --></div>
	</a>
<!-- /.visualWrap --></div>

<article class="information">
	<div class="inner">
		<div class="infoTitle">
			<h2>What's New</h2>
		<!-- /.infoTitle --></div>
		<dl>
			<dt>2019.01.10</dt>
			<dd><a href="program/index.php">PROGRAMページを更新しました</a></dd>
			<dt>2018.08.27</dt>
			<dd><a href="https://jma-news.com/wp-content/uploads/2018/08/f350c29b8e3e1c0fce1934066a4cdf2c.pdf" target="_blank">本日プレスリリースを行いました</a></dd>
			<dt>2018.08.16</dt>
			<dd><a href="seminar/index.php">講演付きプログラム概要説明会(9/27)の募集を開始しました</a></dd>
			<dt>2018.08.16</dt>
			<dd>サイトオープン</dd>
		</dl>
	<!-- /.inner --></div>
</article>
<!--
<p class="omimai">7月の西日本豪雨、ならびにこの度の北海道胆振地方中東部を震源とする地震による被害を受けられた皆様には<br>心よりお見舞いを申し上げます</p>-->

<section id="firstPage" class="bnrMenu">
	<div class="inner">
		<ul>
			<li class="slide-left" data-plugin-options='{"speed":300, "reverse": false}'>
				<a href="about/index.php">
					<figure><img src="common/img/menu01.jpg" alt="KAIKAイノベーションラボとは"/></figure>
					<div class="detail">
						<h2><img src="common/img/innovation_wrap.svg" alt="KAIKAイノベーションラボとは"/></h2>
						<p class="readBtnWt">VIEW MORE<i class="material-icons">keyboard_arrow_right</i></p>
					</div>
				</a>
			</li>
			<li class="slide-right" data-plugin-options='{"speed":500, "reverse": false}'>
				<a href="program/index.php">
					<figure><img src="common/img/menu02.jpg" alt="プログラム"/></figure>
					<div class="detail">
						<h2>プログラム</h2>
						<p class="readBtnWt">VIEW MORE<i class="material-icons">keyboard_arrow_right</i></p>
					</div>
				</a>
			</li>
			<li class="slide-bottom" data-plugin-options='{"speed":1000, "reverse": false}'>
				<a href="seminar/index.php">
					<figure><img src="common/img/menu03.jpg" alt="説明会"/></figure>
					<div class="detail">
						<h2>説明会</h2>
						<p class="readBtnWt">VIEW MORE<i class="material-icons">keyboard_arrow_right</i></p>
					</div>
				</a>
			</li>
		</ul>
	<!-- /.inner --></div>
</section>

<?php include_once __DIR__ . '/common/php/seminar_20180927.php'; ?>

<section class="contact">
	<p class="cntTxt">まずは以下より事務局までご連絡ください。</p>
	<div class="cntAddress">
		<div class="inner">
			<p>お問い合せ先</p>
			<ul>
				<li class="adrNum"><a href="tel:0334340380">TEL: 03(3434)0380</a></li>
				<li class="adrNum">
					<a href="mailto:kaikalab@jma.or.jp">e-mail: kaikalab@jma.or.jp<img src="common/img/icon_mail.svg" alt="Email" class="icoMail" /></a>
				</li>
				<li class="adrPost">一般社団法人日本能率協会 KAIKA研究所</li>
				<li class="adrPost">〒105-8522 東京都港区芝公園3-1-22</li>
			</ul>
		<!-- /.inner --></div>
	<!-- /.cntAddress --></div>
</section>

<?php include_once __DIR__ . '/common/php/footer.php'; ?>

<!-- フェードインアニメーションjs -->
<script>$(window).fadeThis();</script>

</body>
</html>
