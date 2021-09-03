// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });

  var password, password2;

  password = document.getElementById("password");
  password2 = document.getElementById("password2");

  password.onchange = password2.onkeyup = passwordMatch;

  function passwordMatch() {
    if (password.value !== password2.value)
      password2.setCustomValidity("Las contraseñas no coinciden.");
    else password2.setCustomValidity("");
  }
})();
