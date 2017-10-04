function checkForm()
{
    /*var TermsandConditionError = TermsandConditions();
    var firstNameError = first_name();
    var secondNameError = last_name();
    var firstAddressError = first_address();
    var secondAddressError= second_address();
    var emailError = email();

    if (TermsandConditionError && firstNameError && secondNameError && firstAddressError && secondAddressError && emailError){
        return false;
        document.myForm.submit();

    }else{
        return false;
    }*/



    if(document.forms["myForm"].firstName.value.length ==0)
    {
        alert("You must enter a first name");
        makeRed();
        TermsandConditions();
        return false;
    }



    else if(document.forms["myForm"].secondName.value.length ==0)
    {

        alert("You must enter a last name");
        makeRed2();
        makeRight();

        TermsandConditions();
        return false;
    }
    else if(document.forms["myForm"].add1.value.length ==0)
    {
        alert("You must enter an address");
        makeRed3();
        makeRight();
        makeRight2();
        TermsandConditions();
        return false;
    }
    else if(document.forms["myForm"].add2.value.length ==0)
    {
        alert("You must enter a second address");
        makeRed4();
        makeRight();
        makeRight2();
        makeRight3();
        TermsandConditions();
        return false;
    }
    else if(document.forms["myForm"].email.value.length ==0)
    {
        alert("You must enter an email");
        makeRed5();
        makeRight();
        makeRight2();
        makeRight3();
        makeRight4();
        TermsandConditions();
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

function first_name() {
    if(document.forms["myForm"].firstName.value.length ==0){
        makeRed();
        return false;
    }else{
        document.getElementById("firstName");
        return true;
    }
}

    function last_name() {
        if (document.getElementById("secondName").value==''){
            makeRed2();
            return false;
        }else{
            document.getElementById("secondName");
            return true;
        }
    }

    function first_address() {
        if (document.getElementById("add1").value==''){
            makeRed3();
            return false;
        }else{
            document.getElementById("add1");
            return true;
        }
    }

    function second_address() {
        if (document.getElementById("add2").value==''){
            makeRed4();
            return false;
        }else{
            document.getElementById("add2");
            return true;
        }
    }

    function email() {
        if (document.getElementById("email").value==''){
            makeRed5();
            return false;
        }else{
            document.getElementById("email");
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
    document.getElementById("add1").style.borderColor = "red";
}

function makeRed4(){
    document.getElementById("add2").style.borderColor = "red";
}

function makeRed5(){
    document.getElementById("email").style.borderColor = "red";
}


function makeRight(){
    document.getElementById("firstName").style.borderColor = "";

}

function makeRight2(){
    document.getElementById("secondName").style.borderColor = "";

}

function makeRight3(){
    document.getElementById("add1").style.borderColor = "";

}

function makeRight4(){
    document.getElementById("add2").style.borderColor = "";

}

function makeRight5(){
    document.getElementById("email").style.borderColor = "";

}







function blurFunction(){
    document.getElementById("firstName").style.background = "";
    document.getElementById("secondName").style.background = "";
    document.getElementById("add1").style.background = "";
    document.getElementById("add2").style.background = "";
    document.getElementById("email").style.background = "";
    document.getElementById("first").style.textDecoration = '';
    document.getElementById("last").style.textDecoration = '';
    document.getElementById("address").style.textDecoration = '';
    document.getElementById("address2").style.textDecoration = '';
    document.getElementById("labelEmail").style.textDecoration = '';

}


function TermsandConditions() {
    if (document.getElementById("terms").checked){
        document.getElementById("checkbox_error").innerHTML = "";
        return true;
    }else{
        document.getElementById("checkbox_error").innerHTML = "Please accept the Terms and Conditions! ";
        return false;
    }
}
