function checkForm()
{
    var test_name = /^[A-Z]([A-Z]|[a-z]|[0-9]){5,24}$/;   //Got code for regex from various sources
    var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
    var reg = /^(([A-Za-z]+[\-\']?)*([A-Za-z]+)?\s)+([A-Za-z]+[\-\']?)*([A-Za-z]+)?$/;
    var rxDatePattern = /^\d{4}-\d{2}-\d{2}$/;
    var regex = /^(\d{4})(\/|-)(\d{2})(\/|-)(\d{2})$/;
    var name = document.forms["myForm"].firstName.value;
    var lastName = document.forms['myForm'].secondName.value;
    var birthDate = document.forms['myForm'].dateOfBirth.value;
    var hireDate = document.forms['myForm'].hireDate.value;



    if (test_name.test(name) === false){
        debugger;
        document.getElementById("first_name_error").innerHTML = "Please enter a Valid First Name ";
        makeRed();
        return false;
    }



    else if(test_name.test(lastName) === false)
    {

        document.getElementById("last_name_error").innerHTML = "Please enter a Valid Last Name ";
        makeRed2();
        makeRight();
        return false;
    }
    else if(document.forms["myForm"].gender.selectedIndex ==0)
    {
        document.getElementById("gender_error").innerHTML = "Please enter a Valid Gender ";
        makeRight();
        makeRight2();
        return false;
    }

    else if(rxDatePattern.test(birthDate) === false){
        document.getElementById("date_birth_error").innerHTML = "Please enter a Valid Date Of Birth ";
        makeRed4();
        makeRight();
        makeRight2();
        makeRight3();
        return false;
    }


    else if (rxDatePattern.test(hireDate) === false){
        document.getElementById("date_hire_error").innerHTML = "Please enter a Valid Hire Date ";
        makeRed5();
        makeRight();
        makeRight2();
        makeRight3();
        makeRight4();
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

function focusFunction4() {
    document.getElementById("dateOfBirth").style.background = "yellow";
    document.getElementById("dob").style.textDecoration = 'underline';


}
function focusFunction5() {
    document.getElementById("hireDate").style.background = "yellow";
    document.getElementById("hd").style.textDecoration = 'underline';


}

function makeRed(){
    document.getElementById("firstName").style.borderColor = "red";
}

function makeRed2(){
    document.getElementById("secondName").style.borderColor = "red";
}


function makeRed4(){
    document.getElementById("dateOfBirth").style.borderColor = "red";
}

function makeRed5(){
    document.getElementById("hireDate").style.borderColor = "red";
}


function makeRight(){
    document.getElementById("firstName").style.borderColor = "";
    document.getElementById("first_name_error").innerHTML = "";

}

function makeRight2(){
    document.getElementById("secondName").style.borderColor = "";
    document.getElementById("last_name_error").innerHTML = "";

}

function makeRight3(){
    document.getElementById("gender_error").innerHTML = "";

}


function makeRight4(){
    document.getElementById("dateOfBirth").style.borderColor = "";
    document.getElementById("date_birth_error").innerHTML = "";
}

function makeRight5(){
    document.getElementById("hireDate").style.borderColor = "";
    document.getElementById("date_hire_error").innerHTML = "";


}







function blurFunction(){
    document.getElementById("firstName").style.background = "";
    document.getElementById("secondName").style.background = "";
    document.getElementById("dateOfBirth").style.background = "";
    document.getElementById("hireDate").style.background = "";
    document.getElementById("first").style.textDecoration = '';
    document.getElementById("last").style.textDecoration = '';
    document.getElementById("dob").style.textDecoration = '';
    document.getElementById("hd").style.textDecoration = '';

}

function firstNameError()
{
    var test_name = /^[A-Z]([A-Z]|[a-z]|[0-9]){5,24}$/;   //Got code for regex from various sources
    var name = document.forms["myForm"].firstName.value;

    if (test_name.test(name) === true){
        document.getElementById("first_name_error").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("first_name_error").innerHTML = "Please enter a Valid First Name ";
        return false;
    }
}





