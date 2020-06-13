$(document).ready(function(){
    fetchUser(); //This function will load all data on web page when page load
    function fetchUser() // This function will fetch data from table and display under <div id="result">
    {
     var action = "Load";
     $.ajax({
      url : "data/bd.php", //Request send to "action.php page"
      method:"POST", //Using of Post method for send data
      data:{action:action}, //action variable data has been send to server
      success:function(data){
       $('#result').html(data); //It will display data under div tag with id result
      }
     });
    }
   
    //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
    $('#action').click(function(){
     var name = $('#name').val(); //Get the value of first name textbox.
     var score = $('#score').val(); //Get the value of last name textbox
     var id = $('#customer_id').val();  //Get the value of hidden field customer id
     var action = $('#action').val();  //Get the value of Modal Action button and stored into action variable
     if(name != '' && score != '') //This condition will check both variable has some value
     {
      $.ajax({
       url : "data/bd.php",    //Request send to "action.php page"
       method:"POST",     //Using of Post method for send data
       data:{name:name, score:score, id:id, action:action}, //Send data to server
       success:function(data){
        alert(data);    //It will pop up which data it was received from server side
        $('#customerModal').modal('hide'); //It will hide Customer Modal from webpage.
        fetchUser();    // Fetch User function has been called and it will load data under divison tag with id result
       }
      });
     }
     else
     {
      alert("Both Fields are Required"); //If both or any one of the variable has no value them it will display this message
     }
    });
   
    //This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
    $(document).on('click', '.update', function(){
     var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
     var action = "Select";   //We have define action variable value is equal to select
     $.ajax({
      url:"data/bd.php",   //Request send to "action.php page"
      method:"POST",    //Using of Post method for send data
      data:{id:id, action:action},//Send data to server
      dataType:"json",   //Here we have define json data type, so server will send data in json format.
      success:function(data){
       $('#customerModal').modal('show');   //It will display modal on webpage
       $('.modal-title').text("Modifier le joueur"); //This code will change this class text to Update records
       $('#action').val("Modifier");     //This code will change Button value to Update
       $('#customer_id').val(id);     //It will define value of id variable to this customer id hidden field
       $('#name').val(data.name);  //It will assign value to modal first name texbox
       $('#score').val(data.score);  //It will assign value of modal last name textbox
      }
     });
    });
   
    //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
    $(document).on('click', '.delete', function(){
     var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
     if(confirm("Voulez-vous vraiment supprimer ces données?")) //Confim Box if OK then
     {
      var action = "Supprimer"; //Define action variable value Delete
      $.ajax({
       url:"data/bd.php",    //Request send to "action.php page"
       method:"POST",     //Using of Post method for send data
       data:{id:id, action:action}, //Data send to server from ajax method
       success:function(data)
       {
        fetchUser();    // fetchUser() function has been called and it will load data under divison tag with id result
        alert(data);    //It will pop up which data it was received from server side
       }
      })
     }
     else  //Confim Box if cancel then 
     {
      return false; //No action will perform
     }
    });
   });
   
   //scroll
   var x = 0;
   $(document).ready(function(){
     $("#result").scroll(function(){
       $("span").text( x+= 1);
     });
   });