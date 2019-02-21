$(document).ready(function() {

    $('#myform').submit(function(event){
        if (isValidForm()){
            console.log("Valid Form")
            return;
        }
        event.preventDefault();
    });

    function isValidForm() {
        var bool = true;
        if($('#name').val() == ''){
            $('#lbl_name').show();
            bool = false;
        } else{
            $('#lbl_name').hide();
        }
        if($('#last_name').val() == ''){
            $('#lbl_last_name').show();
            bool = false;
        }else{
            $('#lbl_last_name').hide();
        }
        if($('#username').val() == ''){
            $('#lbl_username').show();
            bool = false;
        }else{
            $('#lbl_username').hide();
        }
        return bool;
    }
    
});