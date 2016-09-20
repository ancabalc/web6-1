/*global $*/

function saveApp() {
    var dataForm = $('#application').serialize();
    var publicaChecked = $('[name="active"]').is(':checked');  
    
    if (publicaChecked) {
        dataForm = dataForm + publicaChecked;
    }
    else {
        dataForm = dataForm + '&publica=' + publicaChecked;
    }
    
    console.log(dataForm);
    $.ajax({
        url: document.location.origin + "/app/add" ,
        method: 'POST',
        data: dataForm, 
        success: function (response) {
            if (response.result == 1) {
                // showAllApps();
                alert ("Cerere adaugata cu succes");
            }
        }  
    })
}



$(function(){
    $('#app-submit').on('click', function(e){
        saveApp();
        e.preventDefault();
    })
    
    // NAME, DESCRIPTION - VALIDATIONS
    
    $('[name="name"]').on('change',function(){
        var name = $(this).val();
        if (name.length < 3) {
            alert("Sumarul cererii este obligatoriu");
        }
    })
    
    $('[name="description"]').on('change',function(){
        var name = $(this).val();
        if (name.length < 3) {
            alert("Descrierea cererii este obligatorie");
        }
    })
    
})

// function getAll(){
//     $.ajax({
//         url:,
//         method:,
//         success:,
//         error:,
//     });
// }