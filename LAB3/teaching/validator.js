/** File : validator.js **/
function validateForm() {
    let fname = document.forms["myForm"]["FirstName"].value;
    if (fname.length < 3 ) {
        alert("Firstname must be filled out");
        return false;
    }
    let country = document.forms["myForm"]["Country"].value;
    if (country =="000" ) {
        alert("Country must be selected");
        return false;
    }
}

/**
     - การตรวจสอบความยาวของตัวอักษร
     var str = new String( "This is string" );
     document.write("str.length is:" + str.length);
     // str.length is: 14
     - การหาตำแหน่งข้อความในชุดตัวอักษร
     var str = "Hello world, welcome to the universe.";
     var n = str.indexOf("welcome"); 
     // n = 13
*/