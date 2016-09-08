 var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
	modal.style.display = "block";
}

span.onclick = function() {
	 modal.style.display = "none";
}

window.onclick = function(event) {
	 if (event.target == modal) {
	       modal.style.display = "none";
	}
}

 function popup(mylink, windowname) { 
    if (! window.focus)return true;
    var href;
    if (typeof(mylink) == 'string') href=mylink;
    else href=mylink.href; 
    window.open(href, windowname, 'width=400,height=200,scrollbars=yes'); 
    return false; 
  }

  function checkAccept() {
	var x;
	 if (confirm("Do you want to accept") == true) {
	 x = "Accepted";
		document.getElementById("btn-accept").className = "btn btn-success";
	 } else {
		 x = "Declined";
		 document.getElementById("btn-accept").className = "btn btn-danger";
	}
	 document.getElementById("btn-accept").innerHTML = x;
}




	
