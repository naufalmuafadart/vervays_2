console.log("wishlist");

const parent = document.getElementById("pageContent");

async function setupWishilist() {
  // Fungsi ini digunakan untuk mendapatkan buku pilihan editor kemudian menampilkannya

  let response = await fetch(`http://127.0.0.1:8000/api/wishes/wishlist_page`);

    // console.log(response.status);
    // console.log(response.statusText);
    
    if (response.status === 200) {
        let data = await response.text();
        data = JSON.parse(data);
        
        // handle data
        console.log(data);
        const template = document.getElementById("template");
        for (let i =0; i < data.length; i++) {
          console.log(data[i]);
          let clone = template.content.cloneNode(true);
          const img = clone.querySelector("img");
          const title = clone.querySelector("h2");
          const author = clone.querySelector("p.author");
          const abstract = clone.querySelector("p.abstract");
          const currPrice = clone.querySelector("p.currPrice");

          img.setAttribute("src", data[i].thumbnail);
          title.innerHTML = data[i].title;
          author.innerHTML = data[i].author;
          abstract.innerHTML = data[i].abstract;
          currPrice.innerHTML = convertToRupiah(data[i].price);

          parent.append(clone);
        }
    }
}

setupWishilist();