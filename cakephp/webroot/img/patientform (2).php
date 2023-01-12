<!-- <?php
if(isset($_POST["submit"])){
$target="upload/";
$filename= $_FILES["file"]["name"];

$imageFileType = $_FILES["file"]["type"];
//$target=$target.$filename;
$uploadOk = 1;
echo $filename . $imageFileType;


if($_FILES["file"]["type"]!= "image/png") {
  echo "Sorry, only PNG files are allowed.";
  $uploadOk = 0;
}
$filename = $_POST['name'] . $imageFileType;
if ($_FILES["file"]["size"] > 50000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($uploadOk == 1){
    if(move_uploaded_file($_FILES["file"]['tmp_name'],$target.$filename))
    {
        echo "file uploaded";
    }
    else
    {
        echo "error";
    }
}

}   
?>  -->


<?php
         // define variables and set to empty values
         
         $name ="";
         $name = test_input($_POST["name"]);

         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }
            else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            
            else {
               $name = test_input($_POST["name"]);
            }
            
        }
        $social ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["social"])) {
               $socialErr = "Social Security is required";
            }else {
               $social = test_input($_POST["social"]);
            }
        }

        $address ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["address"])) {
               $addressErr = "Address is required";
            }else {
               $address = test_input($_POST["address"]);
            }
        }

        $birthdate ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["birthdate"])) {
               $birthdateErr = "Birthdate is required";
            }else {
               $birthdate = test_input($_POST["birthdate"]);
            }
        }

        $city ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["city"])) {
               $cityErr = "Please enter City";
            }else {
               $city = test_input($_POST["city"]);
            }
        }

        $parent ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["parent"])) {
               $parentErr = "Please fill name of Parent/Guardian";
            }else {
               $parent = test_input($_POST["parent"]);
            }
        }





        $state ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["state"])) {
               $stateErr = "State is required";
            }else {
               $state = test_input($_POST["state"]);
            }
        }
        $referredby ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["referredby"])) {
               $referredbyErr = "Referred By is required";
            }else {
               $referredby = test_input($_POST["referredby"]);
            }
        }

        $zip ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["zip"])) {
               $zipErr = "Zip is required";
            }else {
               $zip = test_input($_POST["address"]);
            }
        }

        $occupation ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["occupation"])) {
               $occupationErr = "Occupation is required";
            }else {
               $occupation = test_input($_POST["occupation"]);
            }
        }



        $cellphone ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["cellphone"])) {
               $cellphoneErr = "Please enter cellphone";
            }else {
               $cellphone= test_input($_POST["cellphone"]);
            }
        }

        $cellphonee ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["cellphonee"])) {
               $cellphoneeErr = "Please fill name of cellphone";
            }else {
               $cellphonee = test_input($_POST["cellphonee"]);
            }
        }



        $homephone ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["homephone"])) {
               $homephoneErr = "Please enter homephone";
            }else {
               $homephone= test_input($_POST["homephone"]);
            }
        }

        $employername ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["employername"])) {
               $employernameErr = "Please fill name of Employer Name";
            }else {
               $employername = test_input($_POST["employername"]);
            }
        }

        $mobilephone ="";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["moiblephone"])) {
              $mobilephoneErr = "Please enter mobilephone";
           }else {
              $mobilephone= test_input($_POST["mobilephone"]);
           }
       }

       $employeremail ="";
         
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["employeremail"])) {
             $employeremailErr = "Please enter Email";
          }else {
             $employeremail= test_input($_POST["employeremail"]);
          }
      }



       $othercondition ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["othercondition"])) {
               $otherconditionErr = "Please enter Other Conditions";
            }else {
               $otherconditionErr= test_input($_POST["othercondition"]);
            }
        }

        $medicationsErr ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["medications"])) {
               $medicationsErr = "Please fill medications";
            }else {
               $medications = test_input($_POST["medications"]);
            }
        }



        $familydoctorErr ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["famildoctor"])) {
               $familydoctorErr = "Please enter familydoctor";
            }else {
               $familydoctor = test_input($_POST["familydoctor"]);
            }
        }

        $allergies ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["allergies"])) {
               $allergiesErr = "Please fill name of allergies ";
            }else {
               $allergies = test_input($_POST["allergies"]);
            }
        }

        $lastexam ="";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["lastexam"])) {
              $lastexamErr = "Please enter lastexam";
           }else {
              $lastexam= test_input($_POST["lastexam"]);
           }
       }


       $eyedisorder ="";
         
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["eyedisorder"])) {
             $eyedisorderErr = "Please fill Eye Disorder details";
          }else {
             $eyedisorder= test_input($_POST["eyedisorder"]);
          }
      }













      $insurancename ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["insuranecname"])) {
               $insurancenameErr = "Please enter Insurance Name";
            }else {
               $insurancename = test_input($_POST["insurancename"]);
            }
        }

        $insurancenamee ="";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["insuranecnamee"])) {
              $insurancenameeErr = "Please enter Insurance Name";
           }else {
              $insurancenamee = test_input($_POST["insurancenamee"]);
           }
       }

        $employer ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["employer"])) {
               $employerErr = "Please fill Employer Name ";
            }else {
               $employer = test_input($_POST["employer"]);
            }
        }
        $employerr ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["employerr"])) {
               $employerrErr = "Please fill name of Employer Name ";
            }else {
               $employerr = test_input($_POST["employerr"]);
            }
        }

        $insuredname ="";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["insuredname"])) {
              $insurednameErr = "Please enter Insured Name";
           }else {
              $insuredname= test_input($_POST["insuredname"]);
           }
       }
       $insurednamee ="";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["insurednamee"])) {
              $insurednameeErr = "Please enter Insured Name";
           }else {
              $insurednamee= test_input($_POST["insurednamee"]);
           }
       }


       $birthdatee ="";
         
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["birthdatee"])) {
             $birthdateeErr = "Please enter Birth Date";
          }else {
             $birthdatee= test_input($_POST["birthdatee"]);
          }
      }


      $birthdateee ="";
         
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["birthdateee"])) {
            $birthdateeeErr = "Please enter Birth Date";
         }else {
            $birthdateee= test_input($_POST["birthdateee"]);
         }
     }



     $insuredss ="";
         
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["insuredss"])) {
           $insuredssErr = "Please enter Insured's SS";
        }else {
           $insuredss= test_input($_POST["insuredss"]);
        }
    }

    $insuredsss ="";
         
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["insuredsss"])) {
          $insuredsssErr = "Please enter Insured's SS";
       }else {
          $insuredsss= test_input($_POST["insuredsss"]);
       }
   }















        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>
<!-- 
if(isset($_POST["submit"])){
 $name= $_POST["name"];
// $social= $_POST("sociaL");
// $address= $_POST("address");
// $birthdate1= $_POST("birthdate1");
// $city= $_POST("city");
// $state= $_POST("state");
// $referredby= $_POST("referredby");
// $zip= $_POST("zip");
// $occupation= $_POST("occupation");
// $cellphone1= $_POST("cellphone1");
// $cellphone2= $_POST("cellphone2");
// $homephone= $_POST("homephone");
// $employername= $_POST("employername");
// $mobilephone= $_POST("mobilephone");

// $employeremail= $_POST("employeremail");
// $othercondition= $_POST("othercondition");
// $medications= $_POST("medications");
// $familydoctor= $_POST("familydoctor");
// $allergies= $_POST("allergies");
// $lastexam= $_POST("lastexam");
// $insurancename1= $_POST("insurancename1");
// $insurancename2= $_POST("insurancename2");
// $employername1= $_POST("employername1");
// $employername2= $_POST("employername2");
// $insuredname1= $_POST("insuredname1");
// $insuredname2= $_POST("insuredname2");
// $insuredss1= $_POST("insuredss1");
// $insuredss1= $_POST("insuredss1");




    if (empty($name)){
        $nameErr = "Please enter Name";
    }
    else{
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["social"])){
        $socialErr = "Please enter Social Security";
    }
    else{
        $social = test_input($_POST["social"]);
    }
    
    if (empty($_POST["address"])){
        $addressErr = "Please enter Address";
    }
    else{
        $address = test_input($_POST["address"]);
    }
    


};

?> -->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patient Registration Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <link rel="stylesheet" href="patientform.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
    <!-- <script src="patientform.js"></script> -->
    
  
</head>

<body>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <b>
    <br>
    <form action="" id="showdetails" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="container">
        <div class="row">
          <div class="col-12 heading">
            <span class="headingtxt"><b>PATIENT REGISTRATION FORM</b></span>
          </div>
        </div>
      </div>
      <br>

       <div class="container">
        <div class="row">
          <div class="col-2 titleclr">Title</div>

          <div class="col-4 titlebox">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Dr.</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Mr.</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">Ms.</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option3">
              <label class="form-check-label" for="inlineRadio3">Mrs.</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option3">
              <label class="form-check-label" for="inlineRadio3">Miss.</label>
            </div>
          </div>
          <div class="col-2 titleclr">Marital Status</div>
          <div class="col-4 titlebox">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio21"
                value="option1">
              <label class="form-check-label" for="inlineRadio1">Single</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio22"  value="option2">
              <label class="form-check-label" for="inlineRadio2">Married</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio23"
                value="option3">
              <label class="form-check-label" for="inlineRadio3">Widowed</label>
            </div>

          </div> 

          <div class="w-100 d-none d-md-block"></div>

          <div class="col-2 titleclr">Name</div>
          <div class="col-4 titlebox"><input name="name" id="name" autocomplete="off"><span><?php echo $nameErr?></span></div>
          
          
           <div class="col-2 titleclr">Social Security#</div>
          <div class="col-4 titlebox" ><input name="social" autocomplete="off"><span><?php echo $socialErr?></input></div>

          <div class="w-100 d-none d-md-block"></div>

          <div class="col-2 titleclr">Address</div>
          <div class="col-4 titlebox" ><input name="address" autocomplete="off"><span><?php echo $addressErr?></input></div>
          
          <div class="col-2 titleclr">Birth Date</div>
          <div class="col-4 titlebox"><input name="birthdate1" type="date" style="width:256px"><span><?php echo $birthdateErr?></input></div>



          <div class="col-2 titleclr">City</div>
          <div class="col-4 titlebox"><input name="city" autocomplete="off"><span><?php echo $cityErr?></input></div>
          <div class="col-2 titleclr">Parent/Guardian</div>
          <div class="col-4 titlebox"><input name="parent" autocomplete="off"><span><?php echo $parentErr?></input></div>

          <div class="col-2 titleclr">State</div>
          <div class="col-4 titlebox"><input name="state" autocomplete="off"></input><span><?php echo $stateErr?></div>
          <div class="col-2 titleclr">Referred by</div>
          <div class="col-4 titlebox"><input name="referredby" autocomplete="off"><span><?php echo $referredbyErr?></input></div>

          <div class="w-100 d-none d-md-block"></div>

          <div class="col-2 titleclr">Zip</div>
          <div class="col-4 titlebox"><input name="zip" type="number" placeholder="12345..." autocomplete="off"><span><?php echo $zipErr?></input></div>
          <div class="col-2 titleclr">Occupation</div>
          <div class="col-4 titlebox"><input name="occupation" autocomplete="off"><span><?php echo $occupationErr?></input></div>





          <div class="w-100 d-none d-md-block"></div>

          <div class="col-2 titleclr">Cell Phone</div>
          <div class="col-4 titlebox"><input name="cellphone1" type="tel" placeholder="9999999999" autocomplete="off"><span><?php echo $cellphoneErr?></input></div>
          <div class="col-2 titleclr">Cell Phone</div>
          <div class="col-4 titlebox"><input name="cellphone2" type="tel" placeholder="9999999999" autocomplete="off"><span><?php echo $cellphoneeErr?></input></div>

          <div class="w-100 d-none d-md-block"></div>

          <div class="col-2 titleclr">Home Phone</div>
          <div class="col-4 titlebox"><input name="homephone" type="tel" placeholder="9999999999" autocomplete="off"><span><?php echo $homephoneErr?></input></div>

          <div class="col-2 titleclr">Employer's Name</div>
          <div class="col-4 titlebox"><input name="employername" autocomplete="off"><span><?php echo $employernameErr?></input></div>

          <div class="w-100 d-none d-md-block"></div>

          <div class="col-2 titleclr">Mobile Phone</div>
          <div class="col-4 titlebox"><input name="mobilephone" type="tel" placeholder="9999999999" autocomplete="off"><span><?php echo $mobilephoneErr?></input></div>
          <div class="col-2 titleclr">Employer's Email</div>
          <div class="col-4 titlebox"><input name="employeremail" type="email" placeholder="....@gmail.com" autocomplete="off"><span><?php echo $employeremailErr?></input></div>
          
        </div>
      </div>


      <br><br>

      <div class="container">


        <div class="row">

          <div class="col-4 titleclr"> Other Condition(s)</div>
          <div class="col-8 titlebox"><input name="othercondition" autocomplete="off"><span><?php echo $otherconditionErr?></input></div>
        </div>


        <div class="row">

          <div class="col-4 titleclr">Medications you are presently taking</div>
          <div class="col-8 titlebox"><input name="medications" autocomplete="off"><span><?php echo $medicationsErr?></input></div>

        </div>

        <div class="row">

          <div class="col-4 titleclr">Name of Family Doctor</div>
          <div class="col-8 titlebox"><input name="familydoctor" autocomplete="off"><span><?php echo $familydoctorErr?></input></div>

        </div>

        <div class="row">

          <div class="col-4 titleclr">Do you Smoke?</div>



          <div class="col-8 titlebox">


            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions22" id="inlineRadio31"
                value="option1" i>
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions22" id="inlineRadio32"
                value="option2">
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>



          </div>

        </div>

        <div class="row">

          <div class="col-4 titleclr">List any allergies to medications </div>
          <div class="col-8 titlebox"><input name="allergies" autocomplete="off"><span><?php echo $allergiesErr?></input></div>

        </div>




        <div class="row">

          <div class="col-4 titleclr">Date of last exam</div>
          <div class="col-8 titlebox"><input name="lastexam" type="date" autocomplete="off" style="width:256px"><span><?php echo $lastexamErr?></input></div>

        </div>


        <div class="row">

          <div class="col-4 titleclr">Did you ever wear glasses or contact lens?</div>


          <div class="col-8 titlebox">

            <div class="form-check form-check-inline">

              <input class="form-check-input" type="radio" name="inlineRadioOptions33" id="inlineRadio41"
                value="option1">Yes
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions33" id="inlineRadio42"
                value="option2">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span>(if Yes) How old are they?&nbsp;&nbsp;&nbsp;<input type="text" style="height:20px; width:70px "
                  id="abc">
            </div>



          </div>




        </div>

        <div class="row">

          <div class="col-4 titleclr">Family History of eye disorders</div>
          <div class="col-8 titlebox"><input name="eyedisorder" autocomplete="off"><span><?php echo $eyedisorderErr?></input></div>

        </div>

      </div>

      <br>
      <br>

      <div class="container">
        <div class="row text-center">
          <div class="col-6 titleclr">
            Primary Insurance
          </div>
          <div class="col-6 titleclr">
            Secondary Insurance
          </div>

        </div>

        <div class="row">




          <div class="col-2 titleclr">Insurance Name</div>
          <div class="col-4 titlebox"><input name="insurancename1" autocomplete="off"><span><?php echo $insurancenameErr?></input></div>
          <div class="col-2 titleclr">Insurance Name</div>
          <div class="col-4 titlebox"><input name="insurancename2" autocomplete="off"><span><?php echo $insurancenameeErr?></input></div>
        </div>
        <div class="row">

          <div class="col-2 titleclr">Employer</div>
          <div class="col-4 titlebox"><input name="employer1" autocomplete="off"><span><?php echo $employerErr?></input></div>
          <div class="col-2 titleclr">Employer</div>
          <div class="col-4 titlebox"><input name="employer2" autocomplete="off"></input><span><?php echo $employerrErr?></div>

        </div>






        <div class="row">

          <div class="col-2 titleclr">Insured's Name</div>
          <div class="col-4 titlebox"><input name="insuredname1" autocomplete="off"><span><?php echo $insurednameErr?></input></div>
          <div class="col-2 titleclr">Insured's Name</div>
          <div class="col-4 titlebox"><input name="insuredname2" autocomplete="off"><span><?php echo $insurednameeErr?></input></div>

        </div>
        <div class="row">

          <div class="col-2 titleclr">Birth Date</div>
          <div class="col-4 titlebox"><input type="date" name="birthdate11" style="width:256px"><span><?php echo $birthdateeErr?></input></div>

          <div class="col-2 titleclr">Birth Date</div>
          <div class="col-4 titlebox"><input type="date" name="birthdate22" style="width:256px"><span><?php echo $birthdateeeErr?></input></div>


        </div>
        <div class="row">

          <div class="col-2 titleclr">Insured's SS#</div>
          <div class="col-4 titlebox"><input name="insuredss1" autocomplete="off"><span><?php echo $insuredssErr?></input></div>
          <div class="col-2 titleclr">Insured's SS#</div>
          <div class="col-4 titlebox"><input name="insuredss2" autocomplete="off"><span><?php echo $insuredsssErr?></input></div>
        </div>
      </div>

      </div>

      <br>
      <div class="container text-center">
      <label class="titleclr" style="width:210px; padding: 5px;"><b>Select a file:</b></label>
      <input style="width:320px" type="file" name="file" class="titlebox" id="name" required placeholder="Enter Name" autocomplete="off">
      </div>

<br>
      <div class="container text-center">
        <input type="reset" value="Reset" class="titleclr">
      </div>
      <br>
      <div class="container text-center">
        <button  class="buttons"  id="submit">Submit</button>

      </div> 
    </form>0


    </div>

  </b>

  <br>



  </form>
  
  <div id="formdata" style="display: none;">
   
    <h5>Name : <span id="nameaa"></span></h5>
    <h5>Social Security : <span id="socialsecurityaa"></span></h5>
    <h5>Address : <span id="addressaa"></span></h5>
    <h5>Birth Date : <span id="birthdateaa"></span></h5>
    <h5>City : <span id="cityaa"></span></h5>
    <h5>Parent/Guardian : <span id="parentaa"></span></h5>
    <h5>State : <span id="stateaa"></span></h5>
    <h5>Referred By : <span id="referredbyaa"></span></h5>
    <h5>Zip : <span id="zipaa"></span></h5>

    <h5>Ocucpation : <span id="occupationaa"></span></h5>
    <h5>Cell Phone : <span id="cellphone1aa"></span></h5>
    <h5>Cell Phone : <span id="cellphone2aa"></span></h5>
    <h5>Home Phone : <span id="homephoneaa"></span></h5>
    <h5>Employer's Name : <span id="employersnameaa"></span></h5>
    <h5>Mobile Phone : <span id="mobilephoneaa"></span></h5>
    <h5>Employer's Email : <span id="employersemailaa"></span></h5>





    <h5>Other Condition(s) : <span id="otherconditionsaa"></span></h5>
    <h5>Mediactions you are presently taking : <span id="medicationsaa"></span></h5>
    <h5>Name of Family Doctor : <span id="familydoctoraa"></span></h5>
    <h5>List any allergies to medications : <span id="allergiesaa"></span></h5>
    <h5>Other Condition(s) : <span id="otherconditionsaa"></span></h5>
    <h5>Date of last exam : <span id="lastexamaa"></span></h5>
    <h5>Family history of eye disorders : <span id="eyedisordersaa"></span></h5>
    
<p>Primary Insurance</p>
<h5>Insurance Name: <span id="insurancename111aa"></span></h5>
    <h5>Employer : <span id="employer111"></span></h5>
    <h5>Insured;s Name : <span id="insurdename111aa"></span></h5>
    <h5>Birth Date : <span id="birthdat111aa"></span></h5>
    <h5>Insured;s SS# : <span id="insurdess111aa"></span></h5>
    <h5> : <span id="aa"></span></h5>




    <p>Secondary Insurance</p>
<h5>Insurance Name: <span id="insurancename12aa"></span></h5>
    <h5>Employer : <span id="employer2aa"></span></h5>
    <h5>Insured's Name : <span id="insurdename2aa"></span></h5>
    <h5>Birth Date : <span id="birthdate12aa"></span></h5>
    <h5>Insured;s SS# : <span id="insurdess2aa"></span></h5>
    

    <button onclick="show()" class="buttons" class="titleclr">Back</button>


  </div>

 




  </body>

</html>