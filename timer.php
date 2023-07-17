<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		timer 
	</title>
</head>
<body>

	<h1>timer</h1>

	Hours<input type="text" name="hour" id="hour">
	mintues<input type="text" name="mintus" id="mintus">
	second<input type="text" name="sec" id="sec">
	<br/>
	<br/>

	<input type="submit" name="start" value="start" onclick="start()">
	<input type="submit" name="stop" value="stop" onclick="stop()">



	<script>
			hour_user = Number(prompt("Enter value hour"));
			mint_user = Number(prompt("Enter value hour"));
			sec_user = Number(prompt("Enter value hour"));





				hour = document.getElementById('hour'); 
				mintus = document.querySelector('#mintus');
				sec =  document.querySelector('#sec');
				

				hour.value = hour_user;
				mintus.value = mint_user;
				sec.value = sec_user;
				console.log(hour);
				

					id = 0;

					function start(){
						 id = setInterval(function(){


								if (sec_user==0) {

									mint_user--;
									mintus.value = mint_user;
									sec_user = 59;
									sec.value = sec_user;

								}

								if (mint_user == 0){

									hour_user --;
									hour.value = hour_user;
									mint_user =59;
									mintus.value = mint_user;	
								}

								sec_user--;
								sec.value = sec_user;
								

						},500)







						




					}

					function stop(){

						clearInterval(id);
					}



	</script>

</body>
</html>