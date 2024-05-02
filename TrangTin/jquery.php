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
	</script>	
</body>	
