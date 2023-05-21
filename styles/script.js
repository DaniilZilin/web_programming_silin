$(function () {
  $('#myForm').submit(function(e){
    if($('.fieldFormParams').val()==="") {
      e.preventDefault();
      alert('узбек')
    }
  })
});

$(function EmailValidate(string) {
  var pattern = /^\S+@\S+\$/;

  return
})