console.log("Halaman Home");

const newestBookContainer = document.getElementById("newestBookContainer");
const editorChoiceBookContainer = document.getElementById("editorChoiceBookContainer");

async function getNewestBook() {
  // Fungsi ini digunakan untuk mendapatkan buku terbaru kemudian menampilkannya

  let response = await fetch('http://127.0.0.1:8000/api/book/newest_book');

    // console.log(response.status);
    // console.log(response.statusText);
    
    if (response.status === 200) {
        let data = await response.text();
        data = JSON.parse(data);
        
        // handle data
        
        const template = document.getElementById("bookTemplate");
        for (let i =0; i < data.length; i++) {
          console.log(data[i]);
          let clone = template.content.cloneNode(true);
          const img = clone.querySelector("img");
          const title = clone.querySelector("p.title");
          const author = clone.querySelector("p.author");
          const price = clone.querySelector("p.price");
          img.setAttribute("src", "/ebook/ebook_cover/"+data[i].ebook_cover_id+"/"+data[i].name);
          title.innerHTML = data[i].title;
          author.innerHTML = data[i].author;
          price.innerHTML = data[i].price;
          newestBookContainer.append(clone);
        }
    }
}

async function getEditorChoiceBook() {
  // Fungsi ini digunakan untuk mendapatkan buku pilihan editor kemudian menampilkannya

  let response = await fetch('http://127.0.0.1:8000/api/book/editor_choice');

    // console.log(response.status);
    // console.log(response.statusText);
    
    if (response.status === 200) {
        let data = await response.text();
        data = JSON.parse(data);
        
        // handle data
        
        const template = document.getElementById("bookTemplate");
        for (let i =0; i < data.length; i++) {
          console.log(data[i]);
          let clone = template.content.cloneNode(true);
          const img = clone.querySelector("img");
          const title = clone.querySelector("p.title");
          const author = clone.querySelector("p.author");
          const price = clone.querySelector("p.price");
          img.setAttribute("src", "/ebook/ebook_cover/"+data[i].ebook_cover_id+"/"+data[i].name);
          title.innerHTML = data[i].title;
          author.innerHTML = data[i].author;
          price.innerHTML = data[i].price;
          editorChoiceBookContainer.append(clone);
        }
    }
}

getNewestBook();
getEditorChoiceBook();