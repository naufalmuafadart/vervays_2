console.log("Email Verification");

const btn = document.getElementById("btnResendEmail");

btn.addEventListener("click", () => {
  const csrf_token = getMeta('csrf-token');
  const userid = getHTTPParam('userid');

  // Mengirimkan email
  var xhr = new XMLHttpRequest();
  xhr.open("POST", `http://127.0.0.1:8000/resend_email_verification?_token=${csrf_token}&userid=${userid}`);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
    }};
  let data = `{}`;
  xhr.send(data);

  let windowLocation = window.location.href;
  windowLocation = windowLocation.replace("&isresend=true&", "&isresend=false&");
  window.location.href = windowLocation;
});