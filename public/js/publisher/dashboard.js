const bookTable = document.getElementById("bookTable");
const infoNoBook = document.getElementById("infoNoBook");

function setupJoinPublisher() {
  const publisherJoinDateEl = document.getElementById("publisherJoinDate");
  date = publisherJoinDateEl.innerHTML;
  date = date.substring(0, 11);
  date = new Date(date);

  month = convertMonthIntToStringBahasa(date.getMonth() + 1);
  year = date.getUTCFullYear();

  date = month + " " + year;

  publisherJoinDateEl.innerHTML = date;
}

function setupPriceFormat() {
  const priceElements = document.getElementsByClassName("price");

  for (let i = 0; i < priceElements.length; i++) {
    pe = priceElements[i];
    pe.innerHTML = convertToRupiah(pe.innerHTML);
  }
}

function setupFetch() {
  fetch("/api/publisher/publisher_book_for_dashboard_publisher")
    .then(response => response.json())
    .then(data => {
      if (data.length > 0) {
        setupPriceFormat();
      }
      else {
        bookTable.style.display = "none";
        infoNoBook.style.display = "block";
      }
    });
}

function deleteBook(id, title) {
  willDeleteBook = confirm("Apakah anda yakin akan menghapus buku "+ title);
  let _token = getMeta("csrf-token");
  if (willDeleteBook) {
    fetch('/api/publisher/book/delete', {
      method: 'POST',
      headers: {
        'Accept': 'application/json, text/plain, */*',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({_token, id})
    }).then(res => res.json())
      .then(window.location.reload());
  }
}

function setup() {
  setupJoinPublisher();
  setupFetch();
}

setup();