let level = 1;
let clicks = 0;
let waitTime = 500;

const button = document.getElementById("ClickMe");

function moveButton() {
  const x = Math.random() * (window.innerWidth - button.offsetWidth);
  const y = Math.random() * (window.innerHeight - button.offsetHeight);
  button.style.marginLeft = `${x}px`;
  button.style.marginTop = `${y}px`;
}

button.addEventListener("mouseover", function () {
  setTimeout(moveButton, waitTime);
});

button.addEventListener("click", function () {
  clicks++;
  if (clicks == 3) {
    alert(`You won level ${level}!`);
    level++;
    clicks = 0;
    waitTime = waitTime - 100;
    if (level == 6) {
      button.style.pointerEvents = "none";
      alert("IMPOSSIBLE TO REACH THIS LEVEL!");
    } else {
      button.style.pointerEvents = "auto";
    }
  }
});
