function validateform() {
    var a = document.getElementById("name").value;
    var b = document.getElementById("social").value;
    var c = document.getElementById("address").value;
    var d = document.getElementById("birthdate").value;
    var e = document.getElementById("city").value;
    var f = document.getElementById("parent").value;
    var g = document.getElementById("state").value;
    var h = document.getElementById("referred").value;
    var o = document.getElementById("zip").value;
    var i = document.getElementById("occupation").value;
    var j = document.getElementById("cell").value;
    var k = document.getElementById("home").value;
    var l = document.getElementById("employer").value;
    var m = document.getElementById("mobile").value;
    var n = document.getElementById("email").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // Second Container

    var p = document.getElementById("other").value;
    var q = document.getElementById("medication" ).value;
    var r = document.getElementById("doctor").value;
    var s = document.getElementById("smoke").value;
    var t = document.getElementById("allergies").value;
    var u = document.getElementById("exam").value;
    var v = document.getElementById("lenses").value;
    var w = document.getElementById("disorders").value;


    //Third container

    var x = document.getElementById("insurance").value;
    var y = document.getElementById("employer").value;
    var z = document.getElementById("insured").value;
    var aa = document.getElementById("birth").value;
    var ab = document.getElementById("insureddolor").value;



    // name

    if (a == "") {
        alert("Please Fill the name input")
    } else if (!isNaN(a)) {
        alert("Enter a Chracter")
    } else if ((a.length <= 2) || (a.length > 20)) {
        alert("Please Fill the name 3 chracter to 20 chracter")
    }
    //  social security

    else if (b == "") {
        alert("Please Fill the social security input")

    }

    else if (c == "") {
        alert("Please Fill the Address input")
    }
    else if (d == "") {
        alert("Please Select the DOB input")
    }
    else if (e == "") {
        alert("Please Fill the City input")
    }
    else if (f == "") {
        alert("Please fill the Parent Guardian input")
    }
    else if (g == "") {
        alert("Please fill the State input")
    }

    else if (h == "") {
        alert("Please fill the Reffered input")
    }

    else if (o == "") {
        alert("Please fill the Zip input")
    }

    else if (i == "") {
        alert("Please fill the Occupation input")
    }

    //cell number

    else if (j == "") {
        alert("Please Fill the cell num input")
    } else if (isNaN(j)) {
        alert("Enter a Number Only")
    } else if (j.length != 10) {
        alert("Please Fill only 1o digit number")
    }
    //home phone input

    else if (k == "") {
        alert("Please fill the Home Phone input")
    } else if (isNaN(k)) {
        alert("Enter a Number Only")
    } else if (k.length !=10) {
        alert("Please Fill only 10 digit number")
    }
    // Employer name

    else if (l == "") {
        alert("Please fill the Employer's Name input")
    } else if (!isNaN(l)) {
        alert("Enter a Chracter")
    }
    //mobile phone input

    else if (m == "") {
        alert("Please fill the Mobile Phone input")
    } else if (isNaN(m)) {
        alert("Enter a Number Only")
    } else if (m.length !=10) {
        alert("Please Fill only 10 digit")
    }
    // email

    else if (n == "") {
        alert("Please fill the Email input")
    } else if (! n.match(mailformat)) {
        alert("invalid email format")
    }
    
    //Second Container
    
    else if (p == "") {
        alert("Please fill the Other Condition input")
    }else if (q == "") {
        alert("Please fill the Medications are you presently taking input")
    }else if (r == "") {
        alert("Please fill the Name of family doctor input")
    }else if (s == "") {
        alert("Please fill the Do you smoke? input")
    }else if (t == "") {
        alert("Please fill the List any allergies to medications input")
    }else if (u == "") {
        alert("Please fill the Date of last exam input")
    }else if (v == "") {
        alert("Please fill the Did you ever where glasses or contact lenses? input")
    }else if (w == "") {
        alert("Please fill the Family history of eye disorders input")
    }

    //primary && Secodry insurance Third Container


    else if (x == "") {
        alert("Please fill the Insurance Name  input")
    }
    else if (y == "") {
        alert("Please fill the Employer input")
    }
    else if (z == "") {
        alert("Please fill the Insured's Name  input")
    }else if (aa == "") {
        alert("Please fill the Birth Date input")
    }
    else if (ab == "") {
        alert("Please fill the Insured'$ SS#  input")
    }

    }









