$('button').click(function(){
    $.ajax(){
        url:router/router.php?ind=login,
        data:$('form').serialize(),
        type:'POST',
        success:function(result){
            if(result== 'error'){
                $('#signinstatus').html('Invalid Username')
            }else{
                $('#signin-status').html('Logged in Successfuly')
                window.location.href ='chatroom.php'
            }
        }
    }
}


)