function checkForm()
{

    var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
    var reg = /^(([A-Za-z]+[\-\']?)*([A-Za-z]+)?\s)+([A-Za-z]+[\-\']?)*([A-Za-z]+)?$/;
    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
    var name = document.forms["myForm"].firstName.value;
    var lastName = document.forms['myForm'].secondName.value;
    var dateOfBirth = document.forms['myForm'].dateOfBirth;



    if (ck_name.test(name) === false){
        /*debugger;*/
        alert("Nice Try Nerd")
        return false;
    }



    else if(ck_name.test(lastName) === false)
    {

        alert("You must enter a last name");
        makeRed2();
        makeRight();

        TermsandConditions();
        return false;
    }
    else if(document.forms["myForm"].gender.selectedIndex ==0)
    {
        alert("You must choose a gender");
        return false;
    }


    else if (!document.getElementById("terms").checked){
        alert("plz check");
        TermsandConditions();
        return false;
    }
    else
    {
        alert("The form is valid. Would go to server now.");
        return true;
    }
}



function editText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontWeight = "bold";
        myFormItem.style.fontStyle = "italic";
    }
}

function normalText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontWeight = "normal";
        myFormItem.style.fontStyle = "normal";
    }
}

function focusFunction() {

    document.getElementById("firstName").style.background = "yellow";
    document.getElementById("first").style.textDecoration = 'underline';
}

function focusFunction2() {
    document.getElementById("secondName").style.background = "yellow";
    document.getElementById("last").style.textDecoration = 'underline';


}
function focusFunction3() {
    document.getElementById("add1").style.background = "yellow";
    document.getElementById("address").style.textDecoration = 'underline';


}
function focusFunction4() {
    document.getElementById("add2").style.background = "yellow";
    document.getElementById("address2").style.textDecoration = 'underline';


}
function focusFunction5() {
    document.getElementById("email").style.background = "yellow";
    document.getElementById("labelEmail").style.textDecoration = 'underline';


}

function makeRed(){
    document.getElementById("firstName").style.borderColor = "red";
}

function makeRed2(){
    document.getElementById("secondName").style.borderColor = "red";
}

function makeRed3(){
    document.getElementById("theGender").style.borderColor = "red";
}

function makeRed4(){
    document.getElementById("dateOfBirth").style.borderColor = "red";
}

function makeRed5(){
    document.getElementById("hireDate").style.borderColor = "red";
}


function makeRight(){
    document.getElementById("firstName").style.borderColor = "";

}

function makeRight2(){
    document.getElementById("secondName").style.borderColor = "";

}

function makeRight3(){
    document.getElementById("theGender").style.borderColor = "";

}

function makeRight4(){
    document.getElementById("dateOfBirth").style.borderColor = "";

}

function makeRight5(){
    document.getElementById("hireDate").style.borderColor = "";

}







function blurFunction(){
    document.getElementById("firstName").style.background = "";
    document.getElementById("secondName").style.background = "";
    document.getElementById("theGender").style.background = "";
    document.getElementById("dateOfBirts").style.background = "";
    document.getElementById("hireDate").style.background = "";
    document.getElementById("first").style.textDecoration = '';
    document.getElementById("last").style.textDecoration = '';
    document.getElementById("gender").style.textDecoration = '';
    document.getElementById("dob").style.textDecoration = '';
    document.getElementById("hd").style.textDecoration = '';

}




