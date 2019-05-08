$(document).ready(function(){
  var count = 0;
  $('form[name="signup-form"]').submit(function(e){
    //sample function to register a user
    e.preventDefault();
    var form_data = $('form[name="signup-form"]').serializeArray();
    $.ajax({
      type:'POST',
      url: '../sample_registrationTask/webservice/signup-data.php',
      data: form_data,
      success: function(response){
        // console.log(response);
        if(response){
          alert("user registration success");
        }
        else{
          alert("user registration failed");
        }
        setTimeout(function(){// wait for 1 sec(2)
          $( 'form[name="signup-form"]' ).each(function(){
            this.reset(); //clear input entries of form
          });
          window.location.reload(); // then reload the page.(3)
        }, 1000);
      }
    });
  });
  $('#add_address').click(function(){
    //function to add multiple address for a user
    count++;
    // console.log("ok");
    $('#address_block').append('<div class="form-group" id="address_block"><div class="row"><div class="col-6"><input type="text" class="form-control" id="line1" placeholder="line1" name="address['+count+'][line1]" required></div><div class="col-6"><input type="text" class="form-control" id="locality" placeholder="locality" name="address['+count+'][locality]" required></div></div></div><div class="form-group"><div class="row"><div class="col-6"><input type="text" class="form-control" id="state" placeholder="state" name="address['+count+'][state]" required></div><div class="col-6"><input type="number" class="form-control" id="pin" placeholder="pin" name="address['+count+'][pin]" required></div></div></div>');
  });
});
