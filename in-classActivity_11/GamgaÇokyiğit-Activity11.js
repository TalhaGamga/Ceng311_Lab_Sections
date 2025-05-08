$(document).ready(function () {
  $("#nav_list a").on("click", function (event) {
    event.preventDefault();

    var title = $(this).attr("title");
    var jsonFile = "json_files/" + title + ".json";

    $("main").empty();

    $.getJSON(jsonFile, function (data) {
      var newContent = `
        <h1>${data.speakers[0].title}</h1>
        <img src="${data.speakers[0].image}" alt="${data.speakers[0].speaker}">
        <h2>${data.speakers[0].month}<br>${data.speakers[0].speaker}</h2>
        <p>${data.speakers[0].text}</p>
        `;

      $("main").append(newContent);
    });
  });
});