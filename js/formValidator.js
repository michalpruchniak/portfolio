document.addEventListener("DOMContentLoaded", function() {
  var testInput = function(element, reg){
    var reg = new RegExp(reg, 'gi');

    if (!reg.test(element.value)) {
        element.classList.add("error");
        element.classList.remove("active");
    } else {
        element.classList.remove("error");
        element.classList.add("active");
    }
  }


    document.getElementById('name').addEventListener('keyup', function() {
      testInput(document.getElementById('name'), '^[a-zA-Z0-9\s_-]{3,45}$');
    });



    document.getElementById('pn').addEventListener('keyup', function() {
      testInput(document.getElementById('pn'), '^[0-9-+]{9,16}$');
    });



    document.getElementById('mail').addEventListener('keyup', function() {
      testInput(document.getElementById('mail'), '^[0-9a-zA-Z_.-]+@+[0-9a-zA-Z.-]+.+[a-zA-Z]{2,3}$');
    });



    document.getElementById('mail').addEventListener('keyup', function() {
      testInput(document.getElementById('mail'), '^[0-9a-zA-Z_.-]+@+[0-9a-zA-Z.-]+.+[a-zA-Z]{2,3}$');
    });



});
