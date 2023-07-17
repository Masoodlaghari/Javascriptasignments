<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Gallary With LightBox</title>
	<style type="text/css">
		#main_div{
			padding: 10px;
			background: lightgray;
/*			opacity: 0.2;*/
		}
		img{
			width: 100%;
			height: 300px;
		}
		#image_box{
			width: 30%;
			height: 300px;
			border: 1px solid;
			position: relative;
			background: lightblue;
			bottom: 500px;
			left:500px;
			display: none;

		}
		button{
			right: 10px;
			position: absolute;
			padding: 5px 10px;
			margin: 10px;
			font-size: 18px;
			color: darkred;
			background-color: white;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div id="main_div">
		<table>
			<tr>
				<td> <img src="images/1.jpg" onclick="showLightBox(this)" > </td>
				<td> <img src="images/2.jpg" onclick="showLightBox(this)"> </td>
				<td> <img src="images/3.jpg" onclick="showLightBox(this)"> </td>
				<td> <img src="images/4.jpg" onclick="showLightBox(this)"> </td>
			</tr>
			<tr>
				<td> <img src="images/5.jpg" onclick="showLightBox(this)"> </td>
				<td> <img src="images/6.jpg" onclick="showLightBox(this)"> </td>
				<td> <img src="images/7.jpg" onclick="showLightBox(this)"> </td>
				<td> <img src="images/8.jpg" onclick="showLightBox(this)"> </td>
			</tr>
		</table>
	</div>
	<div id="image_box">
		<button onclick="closeLightBox()">x</button>
		<img id='show_image' src="">
	</div>

</body>
</html>
<script type="text/javascript">
	
	// alert("working");
		var main_div = document.getElementById('main_div');
		var image_box = document.querySelector('#image_box');
	function showLightBox(obj){
		// alert("ok");
		var show_image = document.querySelector('#show_image');

		// console.log(main_div);
		// console.log(image_box);
		main_div.style.opacity = 0.3;
		image_box.style.display = 'block';

         console.log(obj.src);
		show_image.src = obj.src; 

	}

	function closeLightBox(){

		// alert("ok");
		image_box.style.display = 'none';
		// main_div.style.opacity = 'none';
		main_div.style.opacity = 1;

	}
</script>