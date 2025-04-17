var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

window.onload = function () {
  $("display_results").addEventListener("click", displayResults);
  $("display_scores").addEventListener("click", displayScores);
  $("add").addEventListener("click", addScore);

  $("name").focus();
};

function displayResults() {
  var maxScoreIndex = scores.indexOf(Math.max(...scores));
  var highestScorerName = names[maxScoreIndex];
  var highestScore = Math.max(...scores);

  console.log("maxScoreIndex:", maxScoreIndex);
  console.log("highestScorerName:", highestScorerName);
  console.log("highestScore:", highestScore);

  var average = scores.reduce((sum, score) => sum + score, 0) / scores.length;

  var resultsDiv = $("results");
  resultsDiv.innerHTML = "<h2>Results</h2>" +
                         "<p>Average score = " + average.toFixed(2) + "</p>" +
                         "<p>Highest score = " + highestScorerName + " with a score of " + highestScore + "</p>";
}

function displayScores() {
  var scoresTable = $("scores_table");
  scoresTable.innerHTML = "<h2>Scores</h2>" + "<tr><td><b>Name</b></td> <td><b>Score</b></td></tr>";

  for (var i = 0; i < names.length; i++) {
    var row = document.createElement("tr");
    var nameCell = document.createElement("td");
    nameCell.textContent = names[i];
    var scoreCell = document.createElement("td");
    scoreCell.textContent = scores[i];
    row.appendChild(nameCell);
    row.appendChild(scoreCell);
    scoresTable.appendChild(row);
  }
}

function addScore() {
  var nameInput = $("name");
  var scoreInput = $("score");

  if (nameInput.value.trim() === "") {
    alert("You must enter a name");
    nameInput.focus();
    return;
  }

  var score = parseFloat(scoreInput.value);
  if (isNaN(score) || score < 0 || score > 100) {
    alert("You must enter a valid score");
    scoreInput.focus();
    return;
  }

  names.push(nameInput.value.trim());
  scores.push(score);

  nameInput.value = "";
  scoreInput.value = "";
  nameInput.focus();
}