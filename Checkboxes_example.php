<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check boxes Example</title>
</head>
<body>

	<h1>Multiple Checkbox Example</h1><hr/>
	<form>
		Check All<input type="checkbox" name="" id="check_all" onclick="checkBoxAll(this)">
		<br/><hr/>
		PHP Basic <input type="checkbox" name="" class="check_box" onclick="checkBox(this)"><br/>
		PHP Advance <input type="checkbox" name="" class="check_box" onclick="checkBox(this)"><br/>
		Java Basic <input type="checkbox" name="" class="check_box" onclick="checkBox(this)"><br/>
		Java Advance <input type="checkbox" name="" class="check_box" onclick="checkBox(this)"><br/>
	</form>

</body>
</html>
<script>
	// alert("working");

	function checkBoxAll(obj){
		var checkboxes = document.querySelectorAll('.check_box');
		var length = checkboxes.length;
		// alert(length);
		for(var i=0;i<length;i++){
			checkboxes[i].checked = obj.checked;
		}


	}
	function checkBox(obj){

         // alert("working");
		// console.log(obj);
		// console.log(obj.checked);
		var checkboxes = document.querySelectorAll('.check_box');
		// console.log(checkboxes);
		// console.log(checkboxes[0].checked);
		// console.log(checkboxes[0].checked = true);
		// console.log(checkboxes[1].checked = true);
		// console.log(checkboxes[2].checked = true);
		// console.log(checkboxes[3].checked = true);
		var length = checkboxes.length;
		// alert(length);
			var c = 0;
			var flag = true;
		for(var i=0;i<length;i++){

          if (checkboxes[i].checked == true) {
          		c++;
          }

          if (checkboxes[i].checked == false) {

          	    flag = false;
          	    break;
          }
 
		}

		document.querySelector('#check_all').checked = flag;
/*Way 2*/
		// if (c===length) {
            
		//     document.querySelector('#check_all').checked = true;
		// }
		// else{
		//     document.querySelector('#check_all').checked = false;
		// }
	}

</script>