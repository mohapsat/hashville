$(document).ready(function(){


  $('#hash-btn').on('click',function(){ //hash btn click

    // alert('clicked');
    var expr = $('#expr').val().trim();
    console.log(expr);
    var hash_method = $('#hash-method').val();
    console.log(hash_method);
    var salt = $('#salt').val();
    console.log(salt);
    var response_type = $('#response-type').val();
    console.log(response_type);


    $.post(
      '/hashville/hash.php'
      ,{expr:expr,salt:salt,hash_method:hash_method,response_type:response_type}
      ,function(data){
        $('#hash-result').text(data);
    });



  });

});
