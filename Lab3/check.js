function checkForm()
{
    if(document.forms["myForm"].firstName.value.length ==0)
    {
        alert("You must enter a first name");
        return false;
    }
    else if(document.forms["myForm"].lastName.value.length ==0)
    {
        alert("You must enter a last name");
        return false;
    }
    else if(document.forms["myForm"].clientTypeList.selectedIndex ==0)
    {
        alert("You must choose a client type");
        return false;
    }
    else
    {
        alert("The form is valid. Would go to server now.");
        return true;
    }
}

function boldText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontWeight = "italics";
    }
}

function normalText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontWeight = "normal";
    }
}

function focusFunction() {

    document.getElementById("firstName").style.background = "yellow";
}

function focusFunction2() {
    document.getElementById("secondName").style.background = "yellow";

}
function focusFunction3() {
    document.getElementById("add1").style.background = "yellow";

}
function focusFunction4() {
    document.getElementById("add2").style.background = "yellow";

}
function focusFunction5() {
    document.getElementById("email").style.background = "yellow";

}


function blurFunction(){
    document.getElementById("firstName").style.background = "";
    document.getElementById("secondName").style.background = "";
    document.getElementById("add1").style.background = "";
    document.getElementById("add2").style.background = "";
    document.getElementById("email").style.background = "";
}
