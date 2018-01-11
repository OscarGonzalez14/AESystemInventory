$(document).ready(function(){
  $('#search').focus()

  $('#search').on('keyup', function(){
    var search = $('#search').val()
    $.ajax({
      type: 'POST',
      url: 'Helpers/search.php',
      data: {'search': search},
      beforeSend: function(){
      $('#result')
      }
    })
    .done(function(resultado){
      $('#result').html(resultado)
    })
    .fail(function(){
      alert('Se Produjo un Error :(')
    })
  })
})



