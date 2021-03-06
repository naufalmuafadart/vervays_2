// File ini berisi fungsi-fungsi yang digunakan di banyak file javascript

function getMeta(metaName) {
  const metas = document.getElementsByTagName("meta");
  for (let i = 0; i < metas.length; i++) {
    if (metas[i].getAttribute('name') === metaName) {
      return metas[i].getAttribute('content');
    }
  }

  return '';
}

function getHTTPParam(param) {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  return urlParams.get(param);
}

function convertToRupiah(angka)
{
	var rupiah = '';		
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	return 'Rp. ' + rupiah.split('',rupiah.length-1).reverse().join('');
}

function convertMonthIntToStringBahasa(intMonth) {
  stringMonth = "";
  switch (intMonth) {
    case 1:
      stringMonth = "Januari";
      break;
    case 2:
      stringMonth = "Februari";
      break;
    case 3:
      stringMonth = "Maret";
      break;
    case 4:
      stringMonth = "April";
      break;
    case 5:
      stringMonth = "Mei";
      break;
    case 6:
      stringMonth = "Juni";
      break;
    case 7:
      stringMonth = "Juli";
      break;
    case 8:
      stringMonth = "Agustus";
      break;
    case 9:
      stringMonth = "September";
      break;
    case 10:
      stringMonth = "Okober";
      break;
    case 11:
      stringMonth = "November";
      break;
    case 12:
      stringMonth = "Desember";
      break;
    default:
      break;
  }
  return stringMonth;
}

function getEbookCoverURL(ebook_cover_id, file_name) {
  return "/ebook/ebook_cover/"+ebook_cover_id+"/"+file_name;
}

function string_to_slug (str) {
  str = str.replace(/^\s+|\s+$/g, ''); // trim
  str = str.toLowerCase();

  // remove accents, swap ñ for n, etc
  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to   = "aaaaeeeeiiiioooouuuunc------";
  for (var i=0, l=from.length ; i<l ; i++) {
      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
  }

  str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
      .replace(/\s+/g, '-') // collapse whitespace and replace by -
      .replace(/-+/g, '-'); // collapse dashes

  return str;
}