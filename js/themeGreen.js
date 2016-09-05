$(function() {
	/*返回顶部按钮*/
	/*距离顶部80高度显示*/
	$("#btn-back-to-top").hide();
	$(window).scroll(function() {
		if ($(window).scrollTop() > 80) {
			$("#btn-back-to-top").stop(false,false).fadeIn(500);
		} else {
			$("#btn-back-to-top").stop(false,false).fadeOut(500);
		}
	});
	/*点击时返回顶部*/
	$("#btn-back-to-top").click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
	$("#btn-back-to-top").hover(function() {
		$("#btn-back-to-top").stop(false,false).animate({backgroundColor:"#71cabc"},600);
	}, function() {
		$("#btn-back-to-top").stop(false,false).animate({backgroundColor:"#f35f5f"},600);

	});
});
 
