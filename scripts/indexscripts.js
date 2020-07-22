var attempt = 5;

function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username == "jeran" && password == "stinky") {
    window.location = "login.html";
  } else {
    attempt--;
    if (attempt > 0) {
      document.getElementById("error").innerHTML =
        "You have " + attempt + "  more attempts!";
    } else {
      document.getElementById("error").innerHTML = "You have no more attempts!";
      document.getElementById("username").disabled = true;
      document.getElementById("password").disabled = true;
      document.getElementById("logIn").disabled = true;
    }
  }
}

document.getElementById("logIn").onclick = function () {
  validate();
};

document.getElementById("register").onclick = function () {
  window.location.href = "register.html";
};
