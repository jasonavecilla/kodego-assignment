
window.addEventListener('load', () => {
    fetch();
});

function fetch() {
    
    $.ajax({
        type: 'POST',
        url: "controlers/fetch.php",
        beforeSend: () => {
            // document.getElementById("div-data").innerHTML =`<div class="spinner-border text-primary" role="status">
            //         <span class="visually-hidden">Loading...</span>
            //     </div>`;
        },
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                // console.log(result);
                document.getElementById('div-card-reglist').innerHTML = result;
            }
        }
    });
}

function edit(nId) {
    window.location = "edit.php?id=" + nId;
}

function del(nId) {
    $.ajax({
        type: 'POST',
        url: "controlers/delete.php",
        data: {id: nId},
        success: (result) => {
            window.location = result;            
        }
    });
}