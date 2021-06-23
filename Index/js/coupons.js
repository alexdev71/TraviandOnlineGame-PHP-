$(function() {
	$('body').on('click','#showRedeemCouponForm',showCouponsModal);
	$('body').on('click','.submitCouponRedeem .submit',submitCouponRedeemForm);
	$('body').on('click','.submitCouponRedeem .cancel',hideCouponsModal);


	function submitCouponRedeemForm(e){
		$.post( "api.php", $( "#couponRedeemForm" ).serialize(), function(data ) {
			$( "#couponRedeemForm .messages ul").empty();
			jQuery.each(data.message, function(i,val) {
			  $( "#couponRedeemForm .messages ul" ).append("<li>"+ val +"</li>");
			});
			$( "#couponRedeemForm .messages").show();
			
			if(data.status){
				$( "#couponRedeemForm .messages").addClass("success");
			}else{
				$( "#couponRedeemForm .messages").addClass("error");
			}
		},"json");
	}
	function showCouponsModal(){
		$( "#couponRedeemForm .messages ul").empty();
		$('#redeemCouponsModal').show();
	}
	function hideCouponsModal(e){
		e.preventDefault();
		$('#redeemCouponsModal').hide();
	}
});