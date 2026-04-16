# 🏢 Sistem Informasi Kelurahan Digital

Project ini merupakan sistem berbasis web untuk mendukung layanan administrasi kelurahan secara digital, termasuk pengajuan surat oleh warga dan monitoring oleh admin.

---

## 🚀 Fitur Utama

* Landing Page (Informasi Kelurahan)
* Portal Warga (Pengajuan Surat)
* Dashboard Admin (Monitoring & Validasi)

---

## 🧱 Struktur Project

```
kelurahan-digital/
│
├── app/
│   ├── controllers/   # Logic aplikasi (backend)
│   ├── models/        # Interaksi database
│   └── views/         # Tampilan (frontend)
│
├── public/            # Entry point (akses dari browser)
│   ├── index.php      # Landing page
│   ├── admin.php      # Dashboard admin
│   └── warga.php      # Portal warga
│
├── assets/            # CSS, JS, gambar
├── config/            # Konfigurasi (database)
```

---

## 👥 Pembagian Kerja Tim

Project ini dikerjakan oleh 4 divisi utama dengan masing-masing 2 orang per tim.

---

### 🎨 UI/UX Designer (2 Orang)

Fokus pada desain tampilan dan pengalaman pengguna.

**Tugas:**

* Mendesain tampilan sistem di Figma:

  * Landing Page
  * Dashboard Admin
  * Portal Warga
* Menentukan:

  * Warna (color palette)
  * Font (typography)
  * Layout & struktur halaman
* Memberikan guideline desain ke tim frontend

---

### 💻 Frontend Developer (2 Orang)

Fokus pada tampilan website berdasarkan desain UI/UX.

**Area kerja:**

* `app/views/`
* `assets/`

**Tugas:**

* Mengubah desain Figma menjadi HTML, CSS, dan JavaScript
* Membuat halaman:

  * `views/public/` → Landing Page
  * `views/admin/` → Dashboard Admin
  * `views/warga/` → Portal Warga
* Membuat komponen reusable:

  * Navbar
  * Footer
  * Section layout
* Menyesuaikan tampilan agar responsive

---

### ⚙️ Backend Developer (2 Orang)

Fokus pada logika sistem dan pengolahan data.

**Area kerja:**

* `app/controllers/`
* `app/models/`
* `config/`

**Tugas:**

* Membuat controller untuk mengatur alur aplikasi
* Menghubungkan data ke view
* Mengelola database (CRUD)
* Membuat sistem pengajuan surat:

  * Input data warga
  * Penyimpanan data
  * Validasi oleh admin
* Menyiapkan koneksi database

---

### 📝 Dokumentasi & Laporan (2 Orang)

Fokus pada pencatatan proses dan pembuatan laporan KKN.

**Tugas:**

* Mendokumentasikan kegiatan KKN:

  * Foto kegiatan tim
  * Proses pengerjaan sistem
* Mengambil screenshot sistem:

  * Landing Page
  * Dashboard Admin
  * Portal Warga
* Menyusun laporan project:

  * Latar belakang
  * Tujuan
  * Proses pembuatan sistem
  * Hasil sistem
* Membuat panduan penggunaan (user guide)

---

## 🔄 Alur Kerja Tim

1. UI/UX membuat desain di Figma
2. Frontend mengubah desain menjadi tampilan web
3. Backend membuat sistem dan database
4. Integrasi frontend dan backend
5. Dokumentasi mencatat proses dan hasil sistem

---

## 🌐 Cara Menjalankan Project

1. Simpan project di:

   ```
   C:/xampp/htdocs/kelurahan-digital
   ```

2. Jalankan XAMPP (Apache & MySQL)

3. Akses di browser:

   ```
   http://localhost/kelurahan-digital/public
   ```

---

## 📌 Catatan Penting

* Gunakan struktur folder yang sudah ditentukan
* Jangan mengubah struktur tanpa diskusi tim
* Setiap tim fokus pada bagiannya masing-masing
* Komunikasi antar tim sangat penting untuk kelancaran project

---

## 💡 Status Project

🚧 Dalam tahap pengembangan (menunggu desain UI/UX)

---
