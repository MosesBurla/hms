//number format validation
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function isCapchar(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 65 && charCode < 90 )
        return false;
    return true;
}



function validatestaff()
{
	$("#errors").empty();

	var phone = $('#phone').val();
	var pass = $('#pass').val();
	if(phone === "" || pass === "")
	{
		if(phone === "")
			$( "#errors" ).append( "<p>*enter phone number</p>" );
		if(pass === "")
			$( "#errors" ).append( "<p>*enter password</p>" );

		return false;
	}
	return true;
}


//email validation
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false)
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}


function required()
{
var empt = document.forms["form1"]["text1"].value;
if (empt == "")
{
alert("Please input a Value");
return false;
}
else
{
alert('Code has accepted : you can try another');
return true;
}
}

//All field are checked
var inputs = $("form#myForm input");

var validateInputs = function validateInputs(inputs) {
  var validForm = true;
  inputs.each(function(index) {
    var input = $(this);
    if (!input.val() || (input.type === "radio" && !input.is(':checked'))) {
      $("#subnewtide").attr("disabled", "disabled");
      validForm = false;
    }
  });
  return validForm;
}


inputs.change(function() {
  if (validateInputs(inputs)) {
    $("#subnewtide").removeAttr("disabled");
  }
});


function pass_confirm()
{
  var pass = document.reg_staff.pass.value;
  var confirm_pass =document.reg_staff.confirm_pass.value;
  if(pass!=confirm_pass)
alert("password not matched");
}




function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();


function myFunction() {

     window.print();
}
