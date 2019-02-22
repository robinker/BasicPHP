$(document).ready(function() {

    var file = document.getElementById("csvFile");
    file.onchange = function(){
        console.log("Yep")
        if(file.files.length > 0){
            $('#filename').html(file.files[0].name);
        }
        $('#filename').show();
    };
    
});