export function inputAnimated() {
    $("input").focus(function () {
        $(this).parents(".form-group").addClass("focused");
      });
      
      $("input").blur(function () {
        var inputValue = $(this).val();
        if (inputValue == "") {
          $(this).parents(".form-group").removeClass("focused");
        } else {
        }
      }); 
}
inputAnimated();
