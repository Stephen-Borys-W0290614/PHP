<!DOCTYPE html>
<html>
<head>
    <title>Java Script Form Sample Page 3</title>
    <script src="check.js" type="text/javascript"></script>
</head>
<body>
<form id="myForm" name="myForm" method="post" action="sampleTargetPage.html" onsubmit="return checkForm()">
    <p>
        <label>First Name:
            <input type="text" name="firstName" id="firstName" onfocusin="focusFunction()" onfocusout="blurFunction()" onFocus="italicsText(this.id)" onBlur="normalText(this.id)"/>
        </label> <br />
    </p>
    <p>
        <label>Last Name:
            <input type="text" name="secondName" id="secondName" onfocusin="focusFunction2()" onfocusout="blurFunction()" onFocus="boldText(this.id)" onBlur="normalText(this.id)"/>
        </label>
    </p>
    <p>
        <label>Address 1:
            <input type="text" name="add1" id="add1" onfocusin="focusFunction3()" onfocusout="blurFunction()" onFocus="boldText(this.id)" onBlur="normalText(this.id)"/>
        </label>
    </p>
    <p>
        <label>Address 2:
            <input type="text" name="add2" id="add2" onfocusin="focusFunction4()" onfocusout="blurFunction()" onFocus="boldText(this.id)" onBlur="normalText(this.id)"/>
        </label>
    </p>
    <p>
        <label>E-Mail:
            <input type="text" name="email" id="email" onfocusin="focusFunction5()" onfocusout="blurFunction()" onFocus="boldText(this.id)" onBlur="normalText(this.id)"/>
        </label>
    </p>

    <p>
        <label>Submit      <input type="submit" name="submitButton" id="submitButton" value="Submit" /> </label>    <br />
    </p>
</form>
</body>
</html>