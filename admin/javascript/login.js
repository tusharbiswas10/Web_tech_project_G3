var user=document.querySelector('#user');
 

function validate(){
  if (user.value==0 ||user.value.lenght<4) {
    document.getElementById('error').innerHTML='Fill both username & password';
    return false;
     }

     else if (pass.value==0 ||pass.value.lenght<4) {
       document.getElementById('error').innerHTML='Fill both username & password';
       return false;
     }


}
