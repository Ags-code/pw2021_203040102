var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var content2 = document.getElementById('content2');


keyword.addEventListener('keyup', function(){

    var xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function() {

        if(xhr.readyState == 4 && xhr.status == 200) {
            content2.innerHTML = xhr.responseText;
        }
    }


    xhr.open('GET','../ajax/gadget.php?keyword=' + keyword.value, true);
    xhr.send();
});

// // ambil elemen-elemen yang dibutuhkan

// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('tombol-cari');
// var container = document.getElementById('container');

// // tambahkan event ketika keyword ditulis 
// keyword.addEventListener('keyup', function(){
//     //buat objek ajax
//     var xhr = new XMLHttpRequest();

//     //cek kesiapan ajax
//     xhr.onreadystatechange = function() {
//         if(xhr.readyState == 4 && xhr.status == 200) {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     //eksekusi ajax
//     xhr.open('GET', '../ajax/mahasiswa.php?keyword=' + keyword.value, true);
//     xhr.send();
// });