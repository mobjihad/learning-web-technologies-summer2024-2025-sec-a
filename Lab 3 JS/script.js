

function check() {

    let username = document.getElementById('uname').value;
    let password = document.getElementById('Password').value ; 
    let umsg = document.getElementById('uname_msg');
    let pmsg = document.getElementById('pwd_msg');
    if(username==""){
       
        umsg.style.color = "red" ;
        umsg.innerHTML = "*Username Can't be Empty" ; 


    }else{
        umsg.innerHTML = "";
    }
    
    if(password==""){
        
        pmsg.style.color = "red" ;
        pmsg.innerHTML = "*Password Can't be Empty" ; 


    }else if(password.length<8){
        pmsg.style.color = "red" ; 
        pmsg.innerHTML = "Password's Length can't be less than 8 digit"; 

    
        
    }else{

        pmsg.innerHTML = "";
    }

}