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

function setup() {
  setupJoinPublisher();
  setupFetch();
}

setup();