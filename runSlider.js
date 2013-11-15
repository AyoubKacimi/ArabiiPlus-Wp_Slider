$("#run_slider").carouFredSel({

				circular: true,
				infinite: true,
				auto 	: true,
				auto : {
					fx : "scroll",
					easing : "easeInElastic",
					duration: 800
				},
				prev	: {	
					button	: ".left_side",
					key		: "left",
					fx : "scroll",easing : "easeInElastic",	duration: 800
				},
				next	: { 
					button	: ".right_side",
					key		: "right",
					fx : "scroll",easing : "easeInElastic",	duration: 800
				},
				pagination	: ".pagination"
			});