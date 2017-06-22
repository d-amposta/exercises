<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
	body {
		text-align: center;
		background-color: #1b6e91;
		color: white;
	}

	#clockdiv {
		display: inline-block;
		text-align: center;
		color: #3f3f3f;
		font-size: 30px;
	}
	#clockdiv > div {
		padding: 10px;
		display: inline-block;
		background-color: #2cb1ea;
	}

	#clockdiv > div > span {
		padding: 15px;
		display: inline-block;
		background-color: white;
	}
	</style>
</head>
<body>
	
	<h1>Countdown Clock</h1>

	<div>
		Day:<input type="number" min="0" max="31" id="day"></input>
		Hours:<input type="number" min="0" max="24" id="hour"></input>
		Minutes:<input type="number" min="0" max="60" id="minute"></input>
		Seconds:<input type="number" min="0" max="60" id="second"></input>
	</div>

	<div>
		<button id="submit">Start</button>
	</div>
	
	<div id="clockdiv">
		<div>
			<span id="days"></span>
			<div>Days</div>
		</div>
		<div>
			<span id="hours"></span>
			<div>Hours</div>
		</div>
		<div>
			<span id="minutes"></span>
			<div>Minutes</div>
		</div>
		<div>
			<span id="seconds"></span>
			<div>Seconds</div>
		</div>
	</div>

	<h1 id="speaker">Till uwian</h1>

	<div>
		
	</div>





	<script>
		
		

		var countdownDate = new Date ('Jun 9, 2017 17:00:00').getTime();

		var x = setInterval(function(){
			var now = new Date().getTime();
			var distance = countdownDate - now;

			var days = Math.floor (distance/(1000*60*60*24));
			var hours = Math.floor ((distance%(1000*60*60*24))/(1000*60*60));
			var minutes = Math.floor ((distance%(1000*60*60))/(1000*60));
			var seconds = Math.floor ((distance % (1000 * 60))/1000);

			document.getElementById('days').innerHTML = days;
			document.getElementById('hours').innerHTML = hours;
			document.getElementById('minutes').innerHTML = minutes;
			document.getElementById('seconds').innerHTML = seconds;

			if (days == 0, hours == 0, minutes == 0, seconds == 0) {
				document.getElementById('speaker').innerHTML = "Done";
				
			}

			
		}, 1000);



	
		
/*document.getElementById('submit').onclick = function(){
	var countdownDate = new Date ('Jun 9, 2017 17:00:00').getTime();

		var x = setInterval(function(){
			var now = new Date().getTime();
			var distance = countdownDate - now;

			var days = document.getElementById('day').value;
			var hours = document.getElementById('hour').value;
			var minutes = document.getElementById('minute').value;
			var seconds = document.getElementById('second').value;

			document.getElementById('days').innerHTML = days;
			document.getElementById('hours').innerHTML = hours;
			document.getElementById('minutes').innerHTML = minutes;
			document.getElementById('seconds').innerHTML = seconds;

			
		}, 1000);



}*/
		
	</script>

</body>
</html>

