// Get the necessary elements
const searchIcon = document.getElementById("search-icon");
const searchBoxElem = document.getElementById("search-box");

// Set up the event listeners
searchIcon.addEventListener("mouseover", function() {
  searchBoxElem.style.display = "block";
});

searchIcon.addEventListener("mouseout", function() {
  searchBoxElem.style.display = "none";
});

searchBoxElem.addEventListener("mouseover", function() {
  searchBoxElem.style.display = "block";
});

searchBoxElem.addEventListener("mouseout", function() {
  searchBoxElem.style.display = "none";
});
