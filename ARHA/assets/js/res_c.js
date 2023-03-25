// Generate a random color
function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Set the container background color to a random color every 5 seconds
setInterval(function() {
  document.querySelector('.container').style.backgroundColor = getRandomColor();
}, 2500);
