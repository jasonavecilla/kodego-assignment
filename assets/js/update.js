document.getElementById('btn_update').addEventListener('click', function(){
    let nId = document.getElementById('update-id').value;
    let sFname = document.getElementById('update-fname').value;
    let sLname = document.getElementById('update-lname').value;
    let sEmail = document.getElementById('update-email').value;
    let sUsername = document.getElementById('update-username').value;

    let sJsonData = {
        id: nId,
        fname: sFname,
        lname: sLname,
        email: sEmail,
        username: sUsername
    };

    $.ajax({
        type: 'POST',
        url: "controlers/update.php",
        data: sJsonData,
        success: (result) => {
            window.location = result;            
        }
    });

});