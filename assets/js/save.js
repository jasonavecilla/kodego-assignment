
document.getElementById('btn_signup').addEventListener('click', function(){

    let sFname = document.getElementById('signup-fname').value;
    let sLname = document.getElementById('signup-lname').value;
    let sEmail = document.getElementById('signup-email').value;
    let sUsername = document.getElementById('signup-username').value;
    let sPassword = document.getElementById('signup-password').value;

    function ValidateEmail(mail) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
        {
            return (true);
        } else {
            return (false);
        }
        
    }

    if(ValidateEmail(sEmail)) {
        let sJsonData = {
            fname: sFname,
            lname: sLname,
            email: sEmail,
            username: sUsername,
            password: sPassword
        };
    
        $.ajax({
            type: 'POST',
            url: "controlers/save.php",
            data: sJsonData,
            success: (result) => {
    
                alert(result);
                
            }
        });
    } else {
        alert("You have entered an invalid email address!");
    }

});