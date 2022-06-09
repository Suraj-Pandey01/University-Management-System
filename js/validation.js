function validation(frm){
    if(frm.st_name.value.trim()==""){
        alert("Enter Name:");
        frm.st_name.focus();
        return false;
    }
    if(frm.st_father.value.trim()==""){
        alert("Enter Father Name:");
        frm.st_father.focus();
        return false;
     }
    if(frm.st_gen[0].checked==false && frm.st_gen[1].checked==false){
         alert("Select Gender:");
         frm.st_gen[1].checked=true;
         return false;
     }
    if(frm.st_phone.value==""){
        alert("Enter phone number:");
        frm.st_phone.focus();
        return false;
     } 
    if(frm.st_phone.value.length<10){
        alert("Enter 10 digits phone number:");
        frm.st_phone.focus();
        return false;
    }
    var flag=0;
    var frm_len=frm.elements.length;
    for(i=0;i<frm_len;i++){
        if(frm.elements[i].type=="checkbox"){
            if(frm.elements[i].name=="st_qual[]" && frm.elements[i].checked==true){
                flag=1;
                break;
            }
        }
    }
    if(flag==0){
        alert("plz Select Qualification");
        return false;
    }
    var email = frm.st_email.value;
    if(email == ""){
        alert("Enter Email:");
        frm.st_email.focus();
        return false;
    }
    // let sym = frm.st_email.value;
    // var d= sym.charAt("0");
    // var count=0;
    // for(i=0;i<sym.length-1;i++){
    //  if(sym[i]=="@"){
    //      count++;
    //  }
    // }
    // if(count==2){
    //     frm.st_email.focus();
    //     alert("Plz insert only One @ symbol in email");
    //     return false;
    // }
    if(email.indexOf("@")==-1){
        alert("Plz include @ Symbol:");
        frm.st_email.focus();
        return false;
    }
    if(email.indexOf("@")==0||email.indexOf("@")==email.length-1){
        alert("Enter format is incorrect:");
        frm.st_email.focus();
        return false;
    }
    // var c=0;
    // // var frm_l=frm.elements.length;
    // for(var i=0;i<email.length;i++)
    // {
    //     c++;
    // }
    // if(c>i){
    //     alert("Plz enter only one @ symbol:");
    //     frm.st_email.focus();
    //     return false;
    // }



    if(frm.st_dob.value.trim()==""){
        alert("Enter date of birth:");
        frm.st_dob.focus();
        return false;
    }
    if(frm.st_doa.value.trim()==""){
        alert("Enter Date of addmission:");
        frm.st_doa.focus();
        return false;
    }
    if(frm.st_locaddress.value.trim()==""){
        alert("Enter your local address:");
        frm.st_locaddress.focus();
        return false;
    }
    if(frm.st_peraddress.value.trim()==""){
        alert("Enter your parmanent address:");
        frm.st_peraddress.focus();
        return false;
    }
    if(frm.st_pincode.value.trim()==""){
        alert("Enter pincode:");
        frm.st_pincode.focus();
        return false;
    }
    if(frm.st_image.value==""){
        alert("Select Image:");
        frm.st_image.focus();
        return false;
    }
    if(frm.st_course.value=="0"){
        alert("Select Course:");
        frm.st_course.focus();
        return false;
    }
    if(frm.st_city.value=="0"){
        alert("Select City:");
        frm.st_city.focus();
        return false;
    }
    if(frm.st_state.value=="0"){
        alert("Select state:");
        frm.st_state.focus();
        return false;
    }
    if(frm.st_country.value=="0"){
        alert("Select Country:");
        frm.st_country.focus();
        return false;
    }


  return true;    
}

///////////Delete student////////
function delete_student(st_id){
    if(confirm("Are u Sure to delete Selected records?")){
        this.document.student_view.st_id.value=st_id;
        this.document.student_view.act.value="delete_student";
        this.document.student_view.submit();
    }
}

///////////Delete all student////////
function delete_multi_student(){
    if(confirm("Are u sure to delete All student records?")){
        this.document.student_view.act.value="delete_multi_student";
        this.document.student_view.submit();

    }
}

////////////check all //////////
function check_all(obj){
var frm=this.document.student_view;
var frm_len=frm.elements.length;
for(var i=0; i<frm_len;i++){
    if(frm.elements[i].type=="checkbox"){
        if(frm.elements[i].name=="st_multi_id[]"){
            frm.elements[i].checked=obj.checked;
        }
    }
}
}
////////////For Print out ////////////
function printOut(){
    window.print();
}
////////////////for remaining balence fee////////////
function balence(){
   var total=document.getElementById("#total_fee");
   var paid=document.getElementById("#paid_amount");
   var balence= total.value-paid.value;
   console.log(balence);
}
