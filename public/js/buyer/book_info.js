console.log("book info");

const csrf_token = getMeta('csrf-token');
const user_id = getMeta('userid');
const book_id = getMeta('bookid');

function addBookToWishlist() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", `http://127.0.0.1:8000/api/wishes/store?_token=${csrf_token}&user_id=${user_id}&book_id=${book_id}`);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
      alert("Buku berhasil ditambahkan ke wishlist");
    }};
  let data = `{}`;
  xhr.send(data);
}

function removeBookFromWishlist() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", `http://127.0.0.1:8000/api/wishes/remove?_token=${csrf_token}&user_id=${user_id}&book_id=${book_id}`);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
      alert("Buku berhasil ditambahkan ke wishlist");
    }};
  let data = `{}`;
  xhr.send(data);
}