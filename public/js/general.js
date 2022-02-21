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