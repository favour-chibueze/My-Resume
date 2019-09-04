function validate()
if( document.Form.email.value == "" )
{
   alert( "Please provide your Email!" );
   document.Form.email.focus() ;
   return false;
}

let emailID = document.Form.EMail.value;
atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf(".");

if (atpos < 1 || (dotpos - atpos < 2 )) 
{
   alert("Please enter correct email ID")
   document.Form.email.focus() ;
   return false;
}
return( true );
