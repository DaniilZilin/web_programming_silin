$(function () {
  $('#myForm').submit(function(e){
    if($('.fieldFormParams').val()==="") {
      e.preventDefault();
      alert('узбек')
    }
  })
});