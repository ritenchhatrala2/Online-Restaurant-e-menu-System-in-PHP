<html>
<head>
<script>
function showUser(str)
{

if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search_php.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" name="users" onKeyUp="showUser(this.value)" />
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>