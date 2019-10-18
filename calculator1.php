<?php
if(isset($_POST['res']))
{
 $res=$_POST['display'];
 $res=eval('return '.$res.';');
}
?>
<html>
<head>
	<title>Calculator</title>
	<style type="text/css">
		input 
		{
			background-color: white;
                        padding:1px;
                        border:1px solid black;
                        width:75%
		}
                button
               {
                        background-color:black;
                        padding:1px;
                        width:75%;
               }

	</style>
</head>
<body bgcolor="white">
	<center>
	<form name="cal" method="post">
		<table style="margin:auto" border="1">

			<tr>
				<th colspan="4">
					<input type="text" name="disp" value="<?php if(isset($res)){echo $res;}?>">
				</th>
			</tr>

			<tr>
				<th><input type="button" value="1" onclick="cal.disp.value+='1'"></th>
				<th><input type="button" value="2" onclick="cal.disp.value+='2'"></th>
				<th><input type="button" value="3" onclick="cal.disp.value+='3'"></th>
				<th><input type="button" value="+" onclick="cal.disp.value+='+'"></th>
			</tr>

			<tr>
				<th><input type="button" value="4" onclick="cal.disp.value+='4'"></th>
				<th><input type="button" value="5" onclick="cal.disp.value+='5'"></th>
				<th><input type="button" value="6" onclick="cal.disp.value+='6'"></th>
				<th><input type="button" value="-" onclick="cal.disp.value+='-'"></th>
			</tr>

			<tr>
				<th><input type="button" value="7" onclick="cal.disp.value+='7'"></th>
				<th><input type="button" value="8" onclick="cal.disp.value+='8'"></th>
				<th><input type="button" value="9" onclick="cal.disp.value+='9'"></th>
				<th><input type="button" value="*" onclick="cal.disp.value+='*'"></th>
			</tr>

			<tr>
				<th><input type="button" value="C" onclick="cal.disp.value=' '"></th>
				<th><input type="button" value="0" onclick="cal.disp.value+='0'"></th>
				<th><input type="button" value="=" onclick="cal.disp.value=eval(calculator.disp.value)"></th>
				<th><input type="button" value="/" onclick="cal.disp.value+='/'"></th>
			</tr>

		</table>
	</form>

</body>
</html>
