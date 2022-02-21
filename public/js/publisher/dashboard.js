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

function setup() {
  setupJoinPublisher();
  setupPriceFormat();
}

setup();