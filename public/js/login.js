const alert = document.getElementById("alert");
const smallAlert = document.getElementById("smallalert");
const alertMessage = document.getElementById("alertMessage");

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
else if (response == "Email Terverifikasi") {
  alertMessage.innerHTML = "Email berhasil diverifikasi. Silakan login."
  alert.style.backgroundColor = "rgb(212, 237, 218)";
  alert.style.display = "block";
  inputEmail.focus();
}