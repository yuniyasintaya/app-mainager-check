window.addEventListener("load", function () {
  var loading = document.querySelector(".loading");
  var safeText = document.querySelector(".safe-text");
  setTimeout(function () {
    loading.className += " hidden";
    document.body.className = document.body.className.replace("loading", "");
    safeText.style.display = "block";
  }, 3000);
});
