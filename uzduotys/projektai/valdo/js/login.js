var link = document.querySelector(".login");
var popup = document.querySelector(".modal-view");
var close = document.querySelector(".modal-view-close");
var form = popup.querySelector("form");
var login = popup.querySelector("[name=login]");
var password = popup.querySelector("[name=password]");
var storage = localStorage.getItem("login");

link.addEventListener("click", function(event) {
	event.preventDefault();
	popup.classList.add("modal-view-show");
	if (storage) {
		login.value = storage;
		password.focus();
	} else {
		login.focus();
	}
});

close.addEventListener("click", function(event) {
	event.preventDefault();
	popup.classList.remove("modal-view-show");
});

form.addEventListener("submit", function(event) {
	if (!(login.value && password.value)) {
		event.preventDefault();
		popup.classList.remove("modal-error");
		popup.classList.add("modal-error");
	} else {
		localStorage.setItem("login", login.value);
	}
});

window.addEventListener("keydown", function(event) {
	if (event.keyCode == 27) {
		if (popup.classList.contains("modal-view-show")) {
			popup.classList.remove("modal-view-show");
		}
	}
});