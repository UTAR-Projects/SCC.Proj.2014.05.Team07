//Alpha Validations
function validalpha()
{
	e=event.keyCode;
	
	if(((e>=65)&&(e<=90))||(e>=97)&&(e<=122)||(e==32)||(e==46))
	{
	}
	else
	{
		event.keyCode=0;
	}
}

//Number Validations
function validnumber()
{
	e=event.keyCode;
	if((e>=48)&&(e<=57))
	{
	}
	else
	{
		event.keyCode=0;
	}
}
//Empty Validations
function checkempty(form)
{
    for(x=0;x<form.elements.length;x++)
    {
         if(form.elements[x].type=="text" && form.elements[x].value=="")
         {
                alert("Empty Not Allowed")
                form.elements[x].focus();
				return false;
		 }
     }
     return true;
}

//E-mail Validations
/*function em()
{
		at=document.form.elements[5].value.indexOf("@");
	dot=document.form.elements[5].value.lastIndexOf(".");
	if(dot-at<2||at<1)
	{
		alert("Enter Proper E-Mail ID");
		form.elements(5).focus();
		return false;
	}
}*/