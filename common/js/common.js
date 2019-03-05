// JavaScript Document

//メインビジュアル：スライドショー
jQuery(function($) {
	$('.bgSlider').bgSwitcher({
		images: ['common/img/bg1.jpg','common/img/bg2.jpg','common/img/bg3.jpg'],
		interval: 5000, // 背景画像を切り替える間隔を指定 3000=3秒
		loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
		shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
		effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
		duration: 500, // エフェクトの時間
		easing: "swing" // エフェクトのイージングをlinear,swingから指定
	});
});

//スムーススクロール
$(function(){
	// #で始まるアンカーをクリックした場合に処理
	$('a[href^="#"]').click(function() {
		// スクロールの速度
		var speed = 400; // ミリ秒
		// 移動先を取得
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		// 移動先を数値で取得
		var position = target.offset().top;
		// スムーススクロール
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});
