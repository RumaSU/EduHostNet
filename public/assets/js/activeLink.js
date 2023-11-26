// Fungsi untuk menambahkan kelas aktif pada tautan yang sesuai dengan path yang sedang diakses
function setActiveLink() {
    const currentPath = window.location.pathname; // Mendapatkan path saat ini

    // Daftar tautan yang ingin ditambahkan kelas aktif berdasarkan path
    const links = document.querySelectorAll('.nav-item a');

    // Loop melalui setiap tautan dan periksa path untuk menyesuaikan kelas
    links.forEach(link => {
        const linkPath = link.getAttribute('href');
        if (currentPath === linkPath) {
            link.classList.add('bg-blue-600'); // Menambahkan kelas jika path cocok
        } else {
            link.classList.remove('bg-blue-600'); // Menghapus kelas jika path tidak cocok
        }
    });
}
// Panggil fungsi saat halaman dimuat untuk menyesuaikan kelas tautan
window.addEventListener('load', setActiveLink);
