<html>
<head>
<style>
div{
background-color:lightgrey;
height:130px;
width:400px;
border: solid black;
}

</style>
</head>
<body>
<center>
<input type ="text" Id="str" placeholder = "Enter the value"></input>
<input type="button" onclick="eval()" value="submit"></input>
<br>
<h2>Result</h2>
<br>
<div id="result"></div>

<script>
function eval()
{
var str=document.getElementById("str").value;
if(Number.isInteger(parseInt(str)))
{
var num = parseInt(str);
var rev = 0, rem = 0;
while(num>0) {
rem = parseInt(num%10);
rev = rev * 10 + rem;
num = parseInt(num/10);
}
result.innerHTML = "<p>Reverse of: <strong> " + str + " is " + rev +"<strong></p>";
}
else {
var text= "<p>The Entered string is: <strong>" + str + "</strong></p>";
for( var i=0; i<str.length; i++)
{
if(str.charAt(i)=='a' || str.charAt(i)=='e' || str.charAt(i)=='i' || str.charAt(i)=='o' || str.charAt(i)=='u' || 
	str.charAt(i)=='A' || str.charAt(i)=='E' || str.charAt(i)=='I' || str.charAt(i)=='O' || str.charAt(i)=='U')
	{
		text += "<p>The leftmost vowel is: <strong>" + str.charAt(i)+"</strong></p>";
		var pos=i+1;
		
	text += "<p>The Position of the Leftmost Vowel: <strong>" +  str.charAt(i) + " is " + pos+ "</strong></p>";
	result.innerHTML = text;
	exit;
	}
}

text +="<p>The Entered String Has No Vowels</p>";
result.innerHTML=text;
}
}
</script>
</body>
</center>
</html>
