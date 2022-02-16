const alert = document.getElementById("alert");
const smallAlert = document.getElementById("smallalert");

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const email = urlParams.get('email');
const response = urlParams.get('response');

const inputEmail = document.getElementById("inputEmail");

inputEmail.value = email;

if (response == "Email tidak ditemukan") {
  smallAlert.style.display = "block";
  inputEmail.focus();
}
else if (response == "Password salah") {
  alert.style.display = "block";
  inputEmail.focus();
}