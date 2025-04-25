$(function () {
  $("#birthday").datepicker();

  const cities = [
    "Ankara", "Istanbul", "Izmir", "Bursa", "Antalya", "New York", "Washington DC", "Charlotte"
  ];

  $("#city").autocomplete({
    source: cities
  });

  const languages = [
    "JavaScript", "Python", "Java", "C#", "C++", "Ruby", "Swift", "Go", "Kotlin", "PHP", "TypeScript"
  ];

  $("#language").autocomplete({
    source: languages
  });
});
