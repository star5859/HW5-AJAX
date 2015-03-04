<html>
    <head>
        <title>searchAjax Page</title>
    </head>


<script language="javascript" type="text/javascript">

//Browser Support Code
function ajaxFunction(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
	              //document.myForm.time.value = ajaxRequest.responseText;
                       document.getElementById("myDiv").innerHTML=ajaxRequest.responseText;
		}
	}
        var urlParam = document.getElementById("searchForm").value;  // try B
        //var urlParam = "< ?php echo $_url ? >";    // try C Not working
        //ajaxRequest.open("GET", "AJAXquery.php?searchName=Tillm", true);  // always works
        ajaxRequest.open("GET", "AJAXquery.php?searchName="+urlParam, true);  // try B
	//ajaxRequest.open("GET", urlParam, true); // try C Not working
	ajaxRequest.send(null); 
        //ajaxRequest.open("POST", "AJAXquery.php", true);
        //ajaxRequest.send($_POST['username']); 
}


</script>
<body>
<!-- $searchName = $_POST['searchName'];  echo $searchName ; echo '<br />' ; -->


<form id="searchForm" action="#" method="POST">  <!-- identifies target page for SUBMIT -->
    searchName: <input type="text" name="searchName"/><br /> 
    <input type="submit" value="Click to confirm"/> 
</form> 
<?php $searchName = $_POST['searchName'];  echo $searchName ; echo '<br />' ;
echo "in searchAjax" ;  echo '<br />' ; 
 $_url = "AJAXquery.php?searchName=".$searchName ; echo $_url    ?>

<div id="myDiv"><h3>search results will appear here</h3></div>
<button type="button" onclick="ajaxFunction()">Begin Search</button>
<br/>

</body>
</html>