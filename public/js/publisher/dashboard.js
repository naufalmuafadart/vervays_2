function setupPriceFormat() {
  const priceElements = document.getElementsByClassName("price");

  for (let i = 0; i < priceElements.length; i++) {
    pe = priceElements[i];
    pe.innerHTML = convertToRupiah(pe.innerHTML);
  }
}

function setup() {
  setupPriceFormat();
}

setup();