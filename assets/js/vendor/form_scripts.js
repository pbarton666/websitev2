function submitForm(e){
	// Initiate Variables With Form Content
	//alert("hello from submitForm()");
	e.preventDefault();
	var firstname = $("#firstname").val();
	var lastname = $("#lastname").val();
	var human=$("#human").val();
	var email = $("#email").val();
	var message = $("#message").val();

	$.ajax({
		
		type: "POST",
		url: "assets/php/process.php",
		
		data: "firstname=" + firstname + "&lastname=" + lastname + "&email=" + email + "&message=" + message + "&human=" + human,
		success : function(text){
			if (text == "success"){
				formSuccess();
			}
			else{alert("epic fail")}
		}
	});
	
	var x=1;
}

function formSuccess(){
	//alert ("formSuccess activated");
	$( "#msgSubmit" ).removeClass( "hidden" );
}



//$("#contactForm").submit(function(event){
	//// cancels the form submission
	//alert("Hello from form submit");
	//event.preventDefault();
	//submitForm();
//});

$(function(){

$('#form-submit').on('click', function (e) {
	var human=$("#human").val();
	
	//alert('Hello from submit button!');
	if (human=="4") {
		submitForm(e);
	}
	else {
		alert("C'mon, be a person.");
	}

});
});

//$("#contactForm").validator().on("submit", function (event) {
	//if (event.isDefaultPrevented()) {
		//// handle the invalid form...
	//} else {
		//// everything looks good!
		//event.preventDefault();
		//submitForm();
	//}
//});