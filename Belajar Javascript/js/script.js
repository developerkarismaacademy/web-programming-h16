// let tombol = document.getElementById('klikTombol');

// tombol.addEventListener('click', function () {
//     // alert('Tombol telah di klik')

//     let text = document.getElementById('text')
//     text.innerHTML = 'Tombol telah diklik'

//     // Varibel ini adalah sebuah wadah
//     // Membuat variable dengan nama mangkok
//     // Terus di isi dengan sebuah nilai
//     // Nilainya itu bakso
// })

var gelas = 'Air putih' // Nilai nya bisa diganti
let mangkok = 'bakso 1' // Nilai nya bisa diganti
mangkok = 'Bakso 2' // Nilai diganti
let kalimat // Inisialisasi

const phi = 3.14 // Nilai nya tidak bisa diganti

kalimat = 'Belajar Javascript'
console.log(kalimat)

let angka = 42; // Tipe data (integer)
let teks = "Halo, dunia!"; // Tipe data (string)
let benar = true; // Tipe data (boolean) true / false
let kulkas = ['jus jeruk', 'es teh', 'air putih'] // Tipe data (array)
let objek = { nama: "John", usia: 30 }; // Tipe data objek

console.log(kulkas);

// let _penamaan
// let penamaan123

// let kata_kunci
// let kataKunci

const NAMA = 'Bariq Firjatullah'

console.log(NAMA);

let angka1 = 52
let angka2 = 43

let penjumlahan = angka1 + angka2
let pengurangan = angka1 - angka2
let perkalian = angka1 * angka2
let pembagian = angka1 / angka2

console.log('Penjumlahan', penjumlahan);
console.log('Pengurangan ' + pengurangan);
console.log(`Perkalian ${perkalian}`);
console.log('Pembagian ' + pembagian);

let lulus = true
if (lulus) {
    console.log('Anda Lulus')
} else {
    console.log('Anda tidak lulus')
}

let belok = 'lurus'
if (belok == 'kiri') {
    console.log('Anda belok kiri');
} else if (belok == 'kanan') {
    console.log('Anda belok kanan');
} else {
    console.log('Anda tidak belok');
}

let submitNilai = document.getElementById('submitNilai');

let handler = function (event) {
    console.log(event);
    event.preventDefault()

    let raport = document.getElementById('inputNilai').value;
    let hasilNilai = document.getElementById('hasilNilai');

    if (raport > 80) {
        hasilNilai.innerHTML = 'Nilai anda di atas KKM'
    } else if (raport == 80) {
        hasilNilai.innerHTML = 'Nilai anda KKM'
    } else {
        hasilNilai.innerHTML = 'Nilai anda di bawah KKM'
    }
}

submitNilai.addEventListener('click', handler);
// submitNilai.removeEventListener('click', handler);

let tombol1 = document.getElementById('tombol1')
let tombol2 = document.getElementById('tombol2')

tombol1.addEventListener('click', function () {
    alert('Tombol 1 diklik')
})
tombol2.addEventListener('click', function () {
    alert('Tombol 2 diklik')
})

let inputNama = document.getElementById('inputNama')
inputNama.addEventListener('keyup', function (e) {
    e.preventDefault()

    document.getElementById('nama').innerHTML = inputNama.value
})

// Increment (Penambahan ++)
// Decrement (Pengurangan --)

for (let index = 1; index <= 10; index++) {
    console.log('Angka', index);
}

for (let index = 10; index > 0; index--) {
    console.log('Angka', index);
}

let i = 1
while (i <= 10) {
    let j = 1
    let bintang = ''
    while (j <= i) {
        bintang = bintang + '*'
        j++
    }
    console.log(bintang);
    i++
}

function penambahan(a, b) {
    let c = a + b
    console.log('Hasil penjumlahan ' + a + ' + ' + b + ' adalah ' + c)
}

penambahan(7, 9)
penambahan(97, 301)

function welcome(nama) {
    console.log("Selamat datang", nama)
}

welcome('bariq')
welcome('Baktiar')

function penguranganFunction(a, b) {
    let c = a - b
    return c
}

let hasilNilaiFunction = penguranganFunction(10, 5)

console.log(hasilNilaiFunction)

let perkalianFunction = function (a, b) {
    return a * b
}

console.log(perkalianFunction(7, 9));

function jalankan(fn, nilai) {
    return fn(nilai)
}

function pangkat(nilai) {
    return nilai * nilai
}

let hasilPangkat = jalankan(pangkat, 5)
console.log(hasilPangkat);

function halo() {
    return 'Welcome'
}


let buah = ['Apel', 'Jeruk', 'Semangka']
let makanan = new Array('Rendang', 'Nasi Goreng')
console.log(buah[2]);
console.log(makanan[0]);

buah.push("Mangga")
buah.pop()

let panjangBuah = buah.length

console.log('Panjang Buah', panjangBuah);

console.log(buah.concat(makanan));

for (let index = 0; index < buah.length; index++) {
    const element = buah[index];
    console.log(element);
}

makanan.forEach(item => {
    console.log(item);
})

buah.map(item => {
    console.log(item);
})