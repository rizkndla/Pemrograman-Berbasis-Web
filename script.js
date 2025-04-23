function lihatTugas(pertemuan) {
    console.log("Membuka tugas untuk pertemuan " + pertemuan);
    setTimeout(() => {
        window.location.href = `Pertemuan-${pertemuan}/Tugas/index.html`;
    }, 300);
}

function lihatPraktikum(pertemuan) {
    console.log("Membuka praktikum untuk pertemuan " + pertemuan);
    setTimeout(() => {
        window.location.href = `Pertemuan-${pertemuan}/Praktikum/index.html`;
    }, 300);
}