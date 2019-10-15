$('#login').click(function() {
    if ($('#name').val()=='admin' && $('#pass').val()=='admin') {
        window.location.href='index.html';
    }else{
      $( ".alert-danger" ).show();
  }
});
