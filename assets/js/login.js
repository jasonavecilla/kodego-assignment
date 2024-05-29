
document.getElementById('btn_login').addEventListener('click', function(){
    let sUsername = document.getElementById('login-username').value;
    let sPass = document.getElementById('login-password').value;

    if( sUsername == "" || sPass == "") {
        alert('Please complete the fields...');
    } else {
        let sJsonData = {
            username: sUsername,
            password: sPass
        };
    
        $.ajax({
            type: 'POST',
            url: "controlers/login.php",
            data: sJsonData,
            success: (result) => {
                
                if(result == 'Username and password does not match!' || result == 'error'){
                    document.querySelector('.err_msg').innerHTML = result;
                    // alert(result);                    
                } else {
                    window.location = result; 
                }                           
            }
        });
    }   

});