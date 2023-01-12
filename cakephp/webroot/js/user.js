$(document).ready(function() {
    jQuery.validator.addMethod("regex", function(value, element, param) { return value.match(new RegExp("^" + param + "$")); });
    var ALPHA_REGEX = "[a-zA-Z]*";
    // var Reg1 = '/[A-Z]/';
    // var Reg2 = '/[a-z]/';
    // var Reg3 = '/[0-9]/';
    // var Reg4 = '/[!@#$%^&*_]/';
   
    jQuery.validator.addMethod(
        'Uppercase',
        function (value) { 
            return /[A-Z]/.test(value); 
        },  
        'Your password must contain at least one Uppercase Character.'
    );
    jQuery.validator.addMethod(
        'Lowercase',
        function (value) { 
            return /[a-z]/.test(value); 
        },  
        'Your password must contain at least one Lowercase Character.'
    );
    jQuery.validator.addMethod(
        'Specialcharacter',
        function (value) { 
            return /[!@#$%^&*()_-]/.test(value); 
        },  
        'Your password must contain at least one Special Character.'
    );
    jQuery.validator.addMethod(
        'Onedigit',
        function (value) { 
            return /[0-9]/.test(value); 
        },  
        'Your password must contain at least one digit.'
    ); 
  
   

  $('#form').validate({
    rules:{
        firstname: {
            required: true,
            minlength:3,
            regex: ALPHA_REGEX,
        },
        lastname: {
            required: true,
            minlength:3,
            regex: ALPHA_REGEX,
        },
        email: {
            required: true,
        },
        phone: {
            required: true,
            digits: true,
            maxlength: 12,
            minlength:10,
        },
        
        image:
        {
            required: true,
            extension:'jpe?g,png',
            uploadFile:true,
        },
    
        password: {
            
            required: true,
            Uppercase:true,
            Lowercase:true,
            Specialcharacter:true,
            Onedigit:true,
            maxlength: 18,
            minlength:8,
        
           
        },
        confirmpassword: {
            required: true,
            equalTo: "#password",
        },
        
        
        
    },
    
    messages:{
        firstname: 
        {
        required: "Please enter First Name",
        minlength: "Minimum length of Firstname should be 3",
        regex : "Please enter characters only",
    
    
    },
        lastname: 
        {
        required: "Please enter Last Name",
        minlength: "Minimum length of Lastname should be 3",
        regex : "Please enter characters only",
    
    
    },
        email: "Please enter Email",

        phone: {
          required: "Please enter Phone Number",
            digits: "Please enter Digits Only",
            maxlength: "Maximum length of Phone Number should be 12 digits",
            minlength: "Minimum length of Phone Number should be 10 digits",
        },
        image: {
            required: "Please select an Image",
            extension: "Please select file in jpeg,png or jpg format ",
        },
        password: 
        {
        required: "Please enter password",
        maxlength: "Maximum length of Password should be 18 digits",
        minlength: "Minimum length of Password should be 8 digits",

        confirmpassword: 
        {
        required: "Re-enter Password to Confirm",
        equalTo: "Password do not match",
    },
    },
  }
})
});