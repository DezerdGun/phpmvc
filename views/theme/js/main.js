/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

function cart(cart){
	$(".modal-ajax").html(cart);
	$("#card").modal();
	}
	$(".add-ajax").click(function(e){
	e.preventDefault();
	var id = $(this).data("id");
	$.ajax({
	url:"?view=ajax",
	data:{id:id},
	type:"GET",
	success:function(res){
	cart(res);
	},
	error:function(){
	}
	});
	});

function delete_cart(id){
	$.ajax({
		url:"?view=del",
		data:{id:id},
		type: "GET",
		success:function(res){
			cart(res);
		},
		error:function(){
		}
	});
}
function plus_cart(id){
	$.ajax({
		url:"?view=plus_cart",
		data:{id:id},
		type:"GET",
		success:function(res){
			cart(res);
		},
		error:function(){
		}
	});
}
function minus_cart(id){
	$.ajax({
		url:"?view=minus_cart",
		data:{id:id},
		type:"GET",
		success:function(res){
			cart(res);
		},
		error:function(){
		}
	});
}
function dell_all(id){
	$.ajax({
		url:"?view=dell_all",
		data:{id:id},
		type:"GET",
		success:function(res){
			cart(res);
		},
		error:function(){
		}
	});
}

// here for wishlist_ajax codes // 

function wishlist_ajax(wishlist_ajax){
	$(".modal-wishlist_ajax").html(wishlist_ajax);
	$("#wishlist_card").modal();
	}
	$(".add-wishlist_ajax").click(function(e){
		e.preventDefault();
		var id = $(this).data("id");
	$.ajax({
		url:"?view=wishlist_ajax",
		data:{id:id},
		type:"GET",
		success:function(res){
		cart(res);
		},
	error:function(){
	}
	});
	});
	function dell_wishlist(id){
		$.ajax({
			url:"?view=dell_wishlist",
			data:{id:id},
			type: "GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}
	function plus(id){
		$.ajax({
			url:"?view=plus",
			data:{id:id},
			type:"GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}
	function minus(id){
		$.ajax({
			url:"?view=minus",
			data:{id:id},
			type:"GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}
	function dell_wishlist_all(id){
		$.ajax({
			url:"?view=dell_wishlist_all",
			data:{id:id},
			type:"GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}
	// here for registration ajax //
	function reg_ajax(){
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		var img = document.getElementById("img").value;
		
		$.ajax({
			url:"?view=regajax",
			data:{name:name,email:email,password:password,img:img},
			type:"GET",
			success:function(res){
		if(res){
			$(".fr").fadeOut();
			$(".none").fadeIn();
				}
			},
			error:function(){
			}
		});
	}

	// for sidebar category //
	function category(id){
		$.ajax({
			url:"?view=category",
			data:{id:id},
			type:"GET",
			success:function(res){
				if(res){
// it comes from index class there is col class //		
			$(".col").hide();
			$(".box").html(res).hide().show(1000);
				}

			},
		error:function(){
		}
		});
	
	}
	function brand(id){
		$.ajax({
			url:"?view=brandcategory",
			data:{id:id},
			type:"GET",
			success:function(res){
				if(res){
// it comes from index class there is col class //		
			$(".cols").hide();
			$(".boxs").html(res).hide().show(1000);
				}
			},
		error:function(){
		}
		});
	
	}
	function searchs(){
		var searches = document.getElementById("search").value;
		$.ajax({
			url:"?view=search",
			data:{searches:searches},
			type:"GET",
			success:function(res){
				if(res){
// it comes from index class there is col class //		
			$(".cols").hide();
			$(".searches").html(res).hide().show(1000);
				}
			},
		error:function(){
		}
		});
	
	}

	
		


	/*$('document').ready(function(){
		$("#register-form").validate({
			name:{
				required:true,
				minlength:3
			},
			password:{
				required:true,
				minlength:8,
				maxlength:15
			},
			password_2:{
				required:true,
				equalTO:'#password'
			},
			email:{
				required:true,
				email:true
			},
		});
		var data = $("#register-form").serialize();
		});
		})
	})
*/