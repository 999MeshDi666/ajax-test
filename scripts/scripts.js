
let close_mes_win = document.querySelector('.close_btn');
let mes_win = document.querySelector('.mes_window');
close_mes_win.addEventListener('click', ()=>{
    mes_win.style.display = 'none';
})


let name = document.getElementById('name');
let surname = document.getElementById('surname');
let email = document.getElementById('email');
let tel = document.getElementById('tel');


function sendRequest(e){

    // e.preventDefault();
    let form = document.getElementById('form_info');
    let formData = new FormData(form);
    $.ajax({
        type: "POST",
        url: 'db.php',
        data: formData,
        dataType: 'html',
        processData: false,
        contentType: false,
        success: function(){
            mes_win.style.display = "block";
        },
        erorr: function(){
            alert('POST error');
        }
    })    
}

let submitForm = document.getElementById('submit');
submitForm.addEventListener('click', sendRequest)
