var notRunning = true; // prevents double-run bug.

function getRandomColor() {
  var letters = "0123456789ABCDEF".split("");
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function discoSquare() {
  var canvas = document.getElementById("whiteBoard");
  var context = canvas.getContext("2d");

  var verPos = Math.floor(Math.random() * 399 + 1);
  var theColor = getRandomColor();

  context.lineWidth = 10;
  context.strokeStyle = theColor;
  context.moveTo(10, verPos); // (horizontal / vertical)
  console.log("vertical pos: " + verPos);

  context.lineTo(400, verPos);
  context.lineCap = "butt";
  context.stroke();

  document.getElementById("displayColor").innerHTML = theColor;
}

var animation;

document.getElementById("start").onclick = function () {
  if (notRunning) {
    animation = setInterval(discoSquare, 100);
    notRunning = false;
  } else {
    alert("Sorry, already running.");
  }
};

document.getElementById("stop").onclick = function () {
  clearInterval(animation);
  notRunning = true;
};

document.getElementById("logout").onclick = function () {
  window.location.href = "index.php";
};
