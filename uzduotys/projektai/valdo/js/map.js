var mapOpen = document.querySelector(".open-map");
var mapPopup = document.querySelector(".modal-view-map");
var mapClose = mapPopup.querySelector(".modal-view-close");

mapOpen.addEventListener("click", function(event) {
	event.preventDefault();
	mapPopup.classList.add("modal-view-show");
});

mapClose.addEventListener("click", function(event) {
	event.preventDefault();
	mapPopup.classList.remove("modal-view-show");
});

window.addEventListener("keydown", function(event) {
	if (event.keyCode == 27) {
		if (mapPopup.classList.contains("modal-view-show")) {
			mapPopup.classList.remove("modal-view-show");
		}
	}
});