function showname(str)
{

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
    document.getElementById("mem").innerHTML=xmlhttp.responseText;
    document.getElementById('mem1').style.display='none';
    }
  }
xmlhttp.open("GET","ajax.php?q="+str,true);
xmlhttp.send();
}
