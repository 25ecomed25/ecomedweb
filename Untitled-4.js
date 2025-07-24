


function Getstats() 
{
window.status=('Attempting to Login to user area.')

var AccId;
var iName;
AccId = document.iAccInput.iAccID.value
iName = document.iAccInput.iName.value




if (AccId == "" || iName == "")
{ 
alert('\nERROR\nYou must enter ALL Details,\nto View your statistics.\n');
window.status=('Missing data or Invalid. Check spelling and Ensure Names are in Correct Case.')
} 
else
{

var location=("pw" + iName + AccId + ".html");
this.location.href = location;
window.status=(' Verifying: ' + iName + '-' + AccId + ' Please wait........');
}
}