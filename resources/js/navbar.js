document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");

    // Periksa apakah URL saat ini adalah halaman root (/)
    if (window.location.pathname === "/") {
        navbar.classList.add("transparent"); // Tambahkan kelas transparan
    } else {
        navbar.classList.remove("transparent"); // Hapus kelas transparan jika bukan di /
    }

    // Deteksi scroll untuk menambahkan efek perubahan warna
    document.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});
