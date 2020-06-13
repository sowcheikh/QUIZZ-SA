$.ajax({
    url : "data/player.php", //Request send to "action.php page"
    method:"POST", //Using of Post method for send data
    data:'', //action variable data has been send to server
    success:function(data){
     $('#collapseExample1').html(data); //It will display data under div tag with id result
    }
   });