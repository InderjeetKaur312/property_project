$(document).ready(function()
{
    $(".button").on('click',function(e)
    {
      
        e.preventDefault();
        name=$('.name').val();
        email=$('.email').val();
        password=$('.pswd').val();
        phone_no=$('.phn').val();
        address=$('.address').val();
        $(".error").remove();
 
    if (name.length < 1) {
      $('.name').after('<span class="error">Name is required</span>');
    }
    if (email.length < 1) {
      $('.email').after('<span class="error">Email is required</span>');
    } else {
      var regEx = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('.email').after('<span class="error">Enter a valid email</span>');
      }
    }
    if (password.length < 1) {
      $('.pswd').after('<span class="error">Password is required</span>'); 
    }   
    if (password.length >1 && password.length < 8) {
      $('.pswd').after('<span class="error">Password must be at least 8 characters long</span>'); 
    } 
    if (phone_no.length < 1) {
      $('.phn').after('<span class="error">Phone number is required</span>'); 
    }   
    if (address.length < 1) {
      $('.address').after('<span class="error">Address is required</span>'); 
    }   
    });
});