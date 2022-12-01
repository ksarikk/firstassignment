$(document).ready(function () {
    jQuery.validator.addMethod("regex", function(value, element, param) { return value.match(new RegExp("^" + param + "$")); });
var ALPHA_REGEX = "[a-zA-Z]*";

    $("#showdetails").validate({
        rules: {
            name: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            social: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            address: {
                required: true,
                minlength: 3
            },

            birthdate1: {
                required: true,
                minlength: 3
            },


            city: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            parent: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            state: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            referredby: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            zip: {

                required: true,
                minlength: 3
            },

            occupation: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            cellphone1: {
                required: true,
                minlength: 10,
                digits:true,
            },

            cellphone2: {
                required: true,
                minlength: 10,
                digits:true,
            },


            homephone: {
                required: true,
                minlength: 10,
                digits:true,
            },

            employername: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            mobilephone: {
                required: true,
                minlength: 10,
                digits:true,
            },

            employeremail: {
                required: true,
                minlength: 8
            },


            othercondition: {
                
                required: true,
                minlength: 2
            },

            medications: {
                required: true,
                minlength: 2
            },

            familydoctor: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            allergies: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },
            lastexam: {
                
                required: true,
              
            },

            eyedisorder: {
               
                required: true,
                minlength: 2
            },



            insurancename1: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            insurancename2: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            employer1: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            employer2: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },


            insuredname1: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },

            insuredname2: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 3
            },
            birthdate11: {
                required: true,
                minlength: 3
            },
            birthdate22 : {
                required: true,
                minlength: 3
            },

            insuredss1: {

                required: true,
                minlength: 3
            },

            insuredss2: {
                required: true,
                minlength: 3
            },

        },
        messages: {
            name: {
                regex : "Please enter characters only",
                minlength: "Name length must be atleast 3 (in characters)"
            },
            social: {
                regex : "Please enter characters only",
                required: "Please enter your Social Security",
                minlength: "Social Security length must be atleast 3 (in characters)"
            },
            address: {
                required: "Please enter your Address",
                minlength: "Address length must be atleast 10"
            },
            birthdate1: {
                required: "Please enter your Birth Date",

            },
            city: {
                regex : "Please enter characters only",
                required: "Please enter your City",
            },
            parent: {
                regex : "Please enter characters only",
                required: "Please enter your Parent/Guardian column",
                minlength: "Parent/Guardian Name length must be atleast 3 (in characters)"
            },
            state: {
                regex : "Please enter characters only",
                required: "Please enter your State",
                minlength: "State length must be atleast 3 (in characters)"
            },

            referredby: {
                regex : "Please enter characters only",
                required: "Please enter your Referred By",
                minlength: "Referred By length must be atleast 3 (in characters)"
            },
            zip: {
                required: "Please enter your Zip",
                minlength: "Zip should be at least 3 characters"
            },
            occupation: {
                regex : "Please enter characters only",
                required: "Please enter your Occupation",
                minlength: "Occupation should be at least 3 characters"

            },
            cellphone1: {
                required: "Please enter your Cell Phone ",
                minlength: "Cell Phone length should be 10 (in digits)"

            },
            cellphone2: {
                required: "Please enter your Cell Phone ",
                minlength: "Cell Phone length should be 10 (in digits)"
            },
            homephone: {
                required: "Please enter your Home Phone ",
                minlength: "Home Phone length should be 10 (in digits)"
            },
            employername: {
                regex : "Please enter characters only",
                required: "Please enter Employer's Name",
                minlength: "Employer's Name length must be atleast 3 (in characters)"
            },
            mobilephone: {
                required: "Please enter your Mobile Phone ",
                minlength: "Mobile Phone length should be 10 (in digits)"
            },



            employeremail: {
                required: "Please enter your Employer Email",
                minlength: "Employer Email should be at least 8 characters"

            },
            othercondition: {
                regex : "Please enter characters only",
                required: "Please enter your Other Condition(s) Column ",
                minlength: "Other Condition(s) should be at least 2 characters"
            },
            medications: {
                regex : "Please enter characters only",
                required: "Please enter your Medications",
                minlength: "Medications should be at least 2 characters"
            },
            familydoctor: {
                regex : "Please enter characters only",
                required: "Please enter Family Doctor",
                minlength: "Family Doctor's Name length must be atleast 3 (in characters)"
            },
            allergies: {
                regex : "Please enter characters only",
                required: "Please enter your Allergies(if any) ",
                minlength: "Allergies length should be at least 2 characters"
            },
            lastexam: {
                required: "Please enter your Last Exam(if any) ",
            },


            eyedisorder: {
                regex : "Please enter characters only",
                required: "Please enter your eye disorder details (if any) ",
                minlength: "Eye disorder details length should be at least 2 characters"
            },
            insurancename1: {
                regex : "Please enter characters only",
                required: "Please enter your Insurance Name ",
                minlength: "Insurance Name should be at least 3 characters"
            },
            insurancename2: {
                regex : "Please enter characters only",
                required: "Please enter Insurance Name",
                minlength: "Insurance Name should be at least 3 characters"
            },
            employer1: {
                
                regex : "Please enter characters only",
                required: "Please enter your Employer Name",
                minlength: "Employer Name length must be atleast 3 (in characters)"
            },
            employer2: {
                regex : "Please enter characters only",
                required: "Please enter your Employer Name",
                minlength: "Employer Name length must be atleast 3 (in characters)"
            },
            insuredname1: {
                regex : "Please enter characters only",
                required: "Please enter your Insured Name",
                minlength: "Insured Name's length must be atleast 3 (in characters)"
            },
            insuredname2: {
                regex : "Please enter characters only",
                required: "Please enter your Insured Name ",
                minlength: "Insured Name's length must be atleast 3 (in characters)"
            },
            birthdate11: {
                required: "Please enter your Birth Date",
                minlength: "Please enter Birth Date"
            },
            birthdate22: {
                required: "Please enter your Birth Date",

            },
            insuredss1: {
                regex : "Please enter characters only",
                required: "Please enter your Insured SS",
                minlength: "Insured's SS should be at least 3 characters"
            },
            insuredss2: {
                regex : "Please enter characters only",
                required: "Please enter your Insured SS ",
                minlength: "Insured's SS should be at least 3 characters"
            },


        }




    });
});




















// function submitfn() {
//     var name = document.getElementById('aa').value;
//     var social = document.getElementById('bb').value;
//     var address = document.getElementById('cc').value;
//     var birthdate = document.getElementById('dd').value;
//     var city = document.getElementById('ee').value;
//     var parentguardian = document.getElementById('ff').value;
//     var state = document.getElementById('gg').value;
//     var referredby = document.getElementById('hh').value;
//     var zip = document.getElementById('ii').value;
//     var occupation = document.getElementById('jj').value;
//     var cellphone1 = document.getElementById('kk').value;
//     var cellphone2 = document.getElementById('ll').value;
//     var homephone = document.getElementById('mm').value;
//     var employername = document.getElementById('nn').value;
//     var mobilephone = document.getElementById('oo').value;
//     var employeremail = document.getElementById('pp').value;
//     var othercondition = document.getElementById('qq').value;
//     var medications = document.getElementById('rr').value;
//     var familydoctor = document.getElementById('ss').value;
//     var allergies = document.getElementById('uu').value;
//     var lastexam = document.getElementById('vv').value;
//     var eyedisorder = document.getElementById('ww').value;


//     var insurancename1 = document.getElementById('xx').value;
//     var employer = document.getElementById('zz').value;
//     var insuredname = document.getElementById('bbb').value;$(document).ready(function () {
//     var insuredname2 = document.getElementById('ad').value;
//     var birthdate12 = document.getElementById('ae').value;
//     var insuredss2 = document.getElementById('af').value;



//     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;





//     var returnn = 1;

//     if (document.getElementById('inlineRadio1').checked == false && document.getElementById('inlineRadio2').checked == false && document.getElementById('inlineRadio3').checked == false &&
//         document.getElementById('inlineRadio4').checked == false && document.getElementById('inlineRadio5').checked == false) 
//         {
//         alert('Select title');
//         return false;
//     }
//     else if (document.getElementById('inlineRadio21').checked == false && document.getElementById('inlineRadio22').checked == false && document.getElementById('inlineRadio23').checked == false) {
//         alert('Select Marital Status');
//         return false;
//     }
//     else if (name == "") {
//         alert("Enter Name ");
//         return false;

//     } else if (!isNaN(name)) {
//         alert("Enter a Character in Name");
//     } else if ((name.length <= 2) || (name.length > 20)) {
//         alert("Fill name");
//         return false;
//     }


//     else if (social == "") {
//         alert("Fill Social Security");
//         return false;

//     }

//     else if (address == "") {
//         alert("Fill Address");
//         return false;
//     }
//     else if (birthdate == "") {
//         alert("Select DOB");
//         return false;
//     }
//     else if (city == "") {
//         alert("Fill the City column");
//         return false;
//     }
//     else if (parentguardian == "") {
//         alert("Fill Parent/Guardian");
//         return false;
//     }
//     else if (state == "") {
//         alert("Fill the State column");
//         return false;
//     }

//     else if (referredby == "") {
//         alert("Fill Referred-By");
//         return false;
//     }

//     else if (zip == "") {
//         alert("Enter Zip (number only) ");
//         return false;
//     }

//     else if (occupation == "") {
//         alert("Enter Occupation ");
//         return false;
//     }



//     else if (cellphone1 == "") {
//         alert("Enter Cell Phone ");
//         return false;
//     } else if (isNaN(cellphone1)) {
//         alert("Enter Cell Phone (number only)");
//         return false;
//     } else if (cellphone1.length != 10) {
//         alert("Enter 10 digit only");
//         return false;
//     }

//     else if (cellphone2 == "") {
//         alert("Enter Cell Phone ");
//         return false;
//     } else if (isNaN(cellphone2)) {
//         alert("Enter Cell Phone (number only)");
//         return false;
//     } else if (cellphone2.length != 10) {
//         alert("Enter 10 digit only");
//         return false;
//     }


//     else if (homephone == "") {
//         alert("Enter Home Phone ");
//         return false;
//     } else if (isNaN(homephone)) {
//         alert("Enter Home Phone (number only)");
//         return false;
//     } else if (homephone.length != 10) {
//         alert("Enter 10 digit only");
//         return false;
//     }


//     else if (employername == "") {
//         alert("Enter Employer's Name ");
//         return false;
//     } else if (!isNaN(employername)) {
//         alert("Enter a Character");
//         return false;
//     }


//     else if (mobilephone == "") {
//         alert("Enter Mobile Phone");
//         return false;
//     } else if (isNaN(mobilephone)) {
//         alert("Enter a Number (number only) ");
//     } else if (mobilephone.length != 10) {
//         alert("Enter only 10 digit");
//         return false;
//     }


//     else if (employeremail == "") {
//         alert("Enter your Email ");
//         return false;
//     } else if (!employeremail.match(mailformat)) {
//         alert("invalid E-mail format");
//         return false;
//     }



//     else if (othercondition == "") {
//         alert("Fill the Other Condition ");
//         return false;
//     } else if (medications == "") {
//         alert("Fill the Medications you are presently taking ");
//         return false;
//     }
//     else if (familydoctor == "") {
//         alert("Fill Name of your family doctor ");
//         return false;
//     }
//     else if (document.getElementById('inlineRadio31').checked == false && document.getElementById('inlineRadio32').checked == false) {
//         alert('Do you Smoke??');
//         return false;
//     }
//     else if (allergies == "") {
//         alert("List the allergies to medications ");
//         return false;
//     } else if (lastexam == "") {
//         alert("Fill the Date of last exam");
//         return false;
//     }
//     else if (document.getElementById('inlineRadio41').checked == false && document.getElementById('inlineRadio42').checked == false) {
//         alert('Do you wear glasses or contact lens??');
//         return false;
//     }
//     else if (eyedisorder == "") {
//         alert("Fill the Family history of eye disorders");
//         return false;
//     }


//     else if (insurancename1 == "") {
//         alert("Fill the Insurance Name ");
//         return false;
//     }
//     else if (employer == "") {
//         alert("Fill the Employer");
//         return false;
//     }
//     else if (insuredname == "") {
//         alert("Fill the Insured's Name ");
//         return false;
//     }
//     else if (insuredname1 == "") {
//         alert("Fill the Insured's Name ");
//         return false;

//     }
//     else if (birthdate11 == "") {
//         alert("Fill the Birth Date column ");
//         return false;
//     }
//     else if (insuredss == "") {
//         alert("Fill the Insured's SS");
//         return false;
//     }


//     else {


//         let x = document.getElementById("showdetails");
//         x.style.display = "none";

//         let y = document.getElementById("formdata");
//         y.style.display = "block";


//         var name = document.getElementById('aa').value;
//         document.getElementById("nameaa").innerText = name;

//         var social = document.getElementById('bb').value;
//         document.getElementById("socialsecurityaa").innerText = social;

//         var address = document.getElementById('cc').value;
//         document.getElementById("addressaa").innerText = address;

//         var birthdate = document.getElementById('dd').value;
//         document.getElementById("birthdateaa").innerText = birthdate;

//         var city = document.getElementById('ee').value;
//         document.getElementById("cityaa").innerText = city;

//         var parentguardian = document.getElementById('ff').value;
//         document.getElementById("parentaa").innerText = parentguardian;

//         var state = document.getElementById('gg').value;
//         document.getElementById("stateaa").innerText = state;

//         var referredby = document.getElementById('hh').value;
//         document.getElementById("referredbyaa").innerText = referredby;

//         var zip = document.getElementById('ii').value;
//         document.getElementById("zipaa").innerText = zip;

//         var occupation = document.getElementById('jj').value;
//         document.getElementById("occupationaa").innerText = occupation;

//         var cellphone1 = document.getElementById('kk').value;
//         document.getElementById("cellphone1aa").innerText = cellphone1;

//         var cellphone2 = document.getElementById('ll').value;
//         document.getElementById("cellphone2aa").innerText = cellphone2;

//         var homephone = document.getElementById('mm').value;
//         document.getElementById("homephoneaa").innerText = homephone;

//         var employername = document.getElementById('nn').value;
//         document.getElementById("employersnameaa").innerText = employername;

//         var mobilephone = document.getElementById('oo').value;
//         document.getElementById("mobilephoneaa").innerText = mobilephone;

//         var employeremail = document.getElementById('pp').value;
//         document.getElementById("employersemailaa").innerText = employeremail;

//         var othercondition = document.getElementById('qq').value;
//         document.getElementById("otherconditionsaa").innerText = othercondition;

//         var medications = document.getElementById('rr').value;
//         document.getElementById("medicationsaa").innerText = medications;

//         var familydoctor = document.getElementById('ss').value;
//         document.getElementById("familydoctoraa").innerText = familydoctor;

//         var allergies = document.getElementById('uu').value;
//         document.getElementById("allergiesaa").innerText = allergies;

//         var eyedisorder = document.getElementById('ww').value;
//         document.getElementById("eyedisordersaa").innerText = eyedisorder;









//         var insurancename1 = document.getElementById('xx').value;
//         document.getElementById("insurancename11aa").innerText = insurancename1;

//         var employer = document.getElementById('zz').value;
//         document.getElementById("employer11aa").innerText = employer;

//         var insuredname = document.getElementById('bbb').value;
//         document.getElementById("insuredname11aa").innerText = insuredname;

//         var birthdate11 = document.getElementById('ddd').value;
//         document.getElementById("birthdate11aa").innerText = birthdate11;

//         var insuredss= document.getElementById('fff').value;
//         document.getElementById("insuredss11aa").innerText = insuredss;





//         var insurancename12 = document.getElementById('ab').value;
//         document.getElementById("insurancename12aa").innerText = insurancename12;

//         var employer2 = document.getElementById('ac').value;
//         document.getElementById("employer2aa").innerText = employer2;

//         var insuredname2 = document.getElementById('ad').value;
//         document.getElementById("insuredname2aa").innerText = insuredname2;

//         var birthdate12 = document.getElementById('ae').value;
//         document.getElementById("birthdate12aa").innerText = birthdate12;

//         var insuredss2= document.getElementById('af').value;
//         document.getElementById("insuredss2aa").innerText = insuredss2;


//         return false;



//     }


// }

// function show() {
//     let x = document.getElementById("showdetails");
//     x.style.display = "block";

//     let y = document.getElementById("formdata");
//     y.style.display = "none"
// }






