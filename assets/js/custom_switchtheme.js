$(document).ready(function () {
	const toggleSwitch = document.querySelector(
		'.theme-switch input[type="checkbox"]'
	);
	const currentTheme = localStorage.getItem("theme");

	if (currentTheme) {
		document.documentElement.setAttribute("data-theme", currentTheme);

		if (currentTheme === "dark") {
			toggleSwitch.checked = true;
		}
    }
    
	function switchTheme(e) {
		var thisTable = document.getElementById("tableData");
		var buttonBg = document.getElementById("button");

		if (e.target.checked) {
			document.documentElement.setAttribute("data-theme", "dark");
			localStorage.setItem("theme", "dark");
			thisTable.classList.remove("table-bordered");
			buttonBg.classList.add("is-dark");
		} else {
			document.documentElement.setAttribute("data-theme", "light");
			localStorage.setItem("theme", "light");
			thisTable.classList.add("table-bordered");
			buttonBg.classList.remove("is-dark");
		}
	}

	toggleSwitch.addEventListener("change", switchTheme, false);
});

//buttonBg.classList.toggle('.is-inverted');
// Array.from(buttonBg).forEach(function(element) {
//     element.addEventListener('focus', function(){
//         this.classList.add('is-primary','is-inverted','is-outlined');
//     },true);
// });
