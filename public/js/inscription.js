//ajax inscription
$(document).ready(function(){
    $("#compte").click(function () {
        var photo = 'joueur.png';
        $.ajax({
            type: "POST",
            url: "data/user.php",
            data: {
            name: $('#nom').val(),
            login: $('#login').val(),
            password: $('#password').val(),
            password2: $('#password2').val(),
            photo: photo

            },
            dataType: "text",
            success: function (data) {
                
                if (data === 'success') {
                   // console.log(data);
                   window.location.replace("index.php?action='login'")
                } else {
                    console.log(data);
                    
                }
                
            },
            error:function(data) {
                console.log(data);
                
            }
        })
    })
    })