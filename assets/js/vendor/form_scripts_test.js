var zero=0;

function submitForm(){
	// Initiate Variables With Form Content
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();

	$.ajax({
		type: "POST",
		url: "assets/php/process_test.php",
		
		data: "name=" + name + "&email=" + email + "&message=" + message,
		success : function(text){
			if (text == "success"){
				formSuccess();
			}
		}
	});
}

function formSuccess(){
	$( "#msgSubmit" ).removeClass( "hidden" );
}





$(function(){

$('#form-submit').on('click', function (e) {

	alert('Hello!');
	submitForm();

});
	

});

//$function(){
			//$("#form-submit)".on(
						//"click", 
						//function(event){
							//alert("Hi!");
							//}
						//);
			  //})

//$("#contactForm").validate().on("submit", function (event) {
	//if (event.isDefaultPrevented()) {
		 ////handle the invalid form...
	//} else {
		 ////everything looks good!
		//submitForm();
	//}
//});