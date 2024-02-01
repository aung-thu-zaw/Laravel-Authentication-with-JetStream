const searchButton = document.getElementById("searchBoxButton");
const searchBox = document.getElementById("mainSearchBox");
const closeButton = document.getElementById("searchBoxCloseButton");

searchButton.addEventListener("click", () => {
  searchBox.style.display = "block";
});

closeButton.addEventListener("click", () => {
  searchBox.style.display = "none";
});
