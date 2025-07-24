

function check() {

    let username = document.getElementById('uname').value;
    let password = document.getElementById('Password').value ; 

    if(username==""){
        let msg = document.getElementById('uname_msg');
        msg.style.color = "red" ;
        msg.innerHTML = "*Username Can't be Empty" ; 


    }else{
        document.getElementById('uname_msg').innerHTML = "";
    }
    
    if(password==""){
        let msg = document.getElementById('pwd_msg');
        msg.style.color = "red" ;
        msg.innerHTML = "*Password Can't be Empty" ; 


    }else{

         document.getElementById('pwd_msg').innerHTML = "";
    }

}