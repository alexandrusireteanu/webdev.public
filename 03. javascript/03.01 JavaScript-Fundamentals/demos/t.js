document.theform.name.onfocus=function(){
    document.getElementById('namehint').innerHTML = "(Enter last name, then first)";
}
document.theform.name.onblur=function(){
    document.getElementById('namehint').innerHTML = "";
} //onfocus



document.theform.website.onblur=function(){
    if (document.theform.website.value ==="") {
        document.getElementById('formerror1').innerHTML = "The URL field is required";
    } // url empty

    if (document.theform.website.value ==="http://") {
        document.getElementById('formerror1').innerHTML = "Please add a valid URL";
    } // url empty
} // onblur

document.theform.website.onchange=function(){
    var theURL= document.theform.website.value;

    if (theURL.indexOf("http://")) {
        document.getElementById('formerror1').innerHTML = "URLs must begin with http://";
    } // doesn't have http
} // onchange



document.theform.reference.onchange=function(){
        var id = document.theform.reference.selectedIndex;
        var url = document.theform.reference[id].value;
        // window.location.href = url;

        if (url !='' && window.confirm('Really go to another page?'))
        {
            document.location.href=url;
            // window.open(url); //open in a new window
        }
        else
        {
            document.location;
        }

    } //onfocus


var myField = document.theform.phone;
var myError = document.getElementById('formerror');

myField.onchange = function() {
    var myPattern = new RegExp("\\d{4}[\\-]\\d{6}", "i");
    var isValid = this.value.search(myPattern) >= 0;

    if (!(isValid)) {
        myError.innerHTML = \"Input does not match expected pattern. xxxx-xxxxxx";
    } else { //pattern not valid
        myError.innerHTML = "";
    } //pattern is valid

} // myField has changed