<header>
	<style>
		.slider{
			width: 750px;
			max-width: 100vw;
			height: 300px;
			margin: auto;
			position: relative;
			overflow: hidden;
		}
		.slider .list{
			position: absolute;
			width: max-content;
			height: 100%;
			left: 0;
			top: 0;
			display: flex;
			transition: 1s;
		}
		.slider .list img{
			width: 700px;
			max-width: 100vw;
			height: 100%;
			object-fit: cover;
		}
		.slider .buttons{
			position: absolute;
			top: 45%;
			left: 5%;
			width: 90%;
			display: flex;
			justify-content: space-between;
		}
		.slider .buttons button{
			width: 50px;
			height: 50px;
			border-radius: 50%;
			background-color: #fff5;
			color: #fff;
			border: none;
			font-family: monospace;
			font-weight: bold;
		}
		.slider .dots{
			position: absolute;
			bottom: 10px;
			left: 0;
			color: #fff;
			width: 100%;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
		}
		.slider .dots li{
			list-style: none;
			width: 10px;
			height: 10px;
			background-color: #fff;
			margin: 10px;
			border-radius: 20px;
			transition: 0.5s;
		}
		.slider .dots li.active{
			width: 30px;
		}
	</style>
</header>
<body>
	<div id='wrapper'>
		<div class="slider">
			<div class="list">
				<div class="item">
					<img src="images/qc7.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/qc2.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/qc3.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/qc5.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/qc6.jpg" alt="">
				</div>
			</div>
			<div class="buttons">
				<button id="prev"><</button>
				<button id="next">></button>
			</div>
			<ul class="dots">
				<li class="active"></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		
		<!-- <div >
			<div id="bigPic">
				<img src="images/1.jpg" alt="" />
				<img src="images/2.jpg" alt="" />
				<img src="images/3.jpg" alt="" />
				<img src="images/4.jpg" alt="" />
				<img src="images/5.jpg" alt="" />
				<img src="images/6.jpg" alt="" />
				<img src="images/7.jpg" alt="" />
				<img src="images/8.jpg" alt="" />
				<img src="images/9.jpg" alt="" />
				<img src="images/10.jpg" alt="" />
			</div>
			
			
			<ul id="thumbs">
				<li class='active' rel='1'><img src="images/1_thumb.jpg" alt="" /></li>
				<li rel='2'><img src="images/3_thumb.jpg" alt="" /></li>
				<li rel='3'><img src="images/4_thumb.jpg" alt="" /></li>
				<li rel='4'><img src="images/5_thumb.jpg" alt="" /></li>
				<li rel='5'><img src="images/6_thumb.jpg" alt="" /></li>
				<li rel='6'><img src="images/7_thumb.jpg" alt="" /></li>
				<li rel='7'><img src="images/8_thumb.jpg" alt="" /></li>
				<li rel='8'><img src="images/9_thumb.jpg" alt="" /></li>
				<li rel='9'><img src="images/10_thumb.jpg" alt="" /></li>
				<li rel='10'><img src="images/2_thumb.jpg" alt="" /></li>
			</ul>
		
		</div> -->
		
	</div>
	
	</div>

	<script type="text/javascript">
		let slider = document.querySelector('.slider .list');
		let items = document.querySelectorAll('.slider .list .item');
		let next = document.getElementById('next');
		let prev = document.getElementById('prev');
		let dots = document.querySelectorAll('.slider .dots li');

		let lengthItems = items.length - 1;
		let active = 0;
		next.onclick = function(){
			active = active + 1 <= lengthItems ? active + 1 : 0;
			reloadSlider();
		}
		prev.onclick = function(){
			active = active - 1 >= 0 ? active - 1 : lengthItems;
			reloadSlider();
		}
		let refreshInterval = setInterval(()=> {next.click()}, 3000);
		function reloadSlider(){
			slider.style.left = -items[active].offsetLeft + 'px';
			// 
			let last_active_dot = document.querySelector('.slider .dots li.active');
			last_active_dot.classList.remove('active');
			dots[active].classList.add('active');

			clearInterval(refreshInterval);
			refreshInterval = setInterval(()=> {next.click()}, 3000);

			
		}

		dots.forEach((li, key) => {
			li.addEventListener('click', ()=>{
				active = key;
				reloadSlider();
			})
		})
		window.onresize = function(event) {
			reloadSlider();
		};

	// var currentImage;
    // var currentIndex = -1;
    // var interval;
    // function showImage(index){
    //     if(index < $('#bigPic img').length){
    //     	var indexImage = $('#bigPic img')[index]
    //         if(currentImage){   
    //         	if(currentImage != indexImage ){
    //                 $(currentImage).css('z-index',2);
    //                 clearTimeout(myTimer);
    //                 $(currentImage).fadeOut(250, function() {
	// 				    myTimer = setTimeout("showNext()", 3000);
	// 				    $(this).css({'display':'none','z-index':1})
	// 				});
    //             }
    //         }
    //         $(indexImage).css({'display':'block', 'opacity':1});
    //         currentImage = indexImage;
    //         currentIndex = index;
    //         $('#thumbs li').removeClass('active');
    //         $($('#thumbs li')[index]).addClass('active');
    //     }
    // }
    
    // function showNext(){
    //     var len = $('#bigPic img').length;
    //     var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
    //     showImage(next);
    // }
    
    // var myTimer;
    
    // $(document).ready(function() {
	//     myTimer = setTimeout("showNext()", 3000);
	// 	showNext(); //loads first image
    //     $('#thumbs li').bind('click',function(e){
    //     	var count = $(this).attr('rel');
    //     	showImage(parseInt(count)-1);
    //     });
	// });
    
	
	</script>	
</body>	
