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

## 👥 Pembagian Tim

### 🎨 Frontend Developer

Fokus pada tampilan dan user interface.

**Area kerja:**

* `app/views/`
* `assets/`

**Tugas:**

* Mengubah desain dari Figma menjadi HTML/CSS/JS
* Membuat halaman:

  * Landing Page (`views/public`)
  * Dashboard Admin (`views/admin`)
  * Halaman Warga (`views/warga`)
* Membuat komponen reusable (navbar, footer, dll)

---

### ⚙️ Backend Developer

Fokus pada logika sistem dan pengolahan data.

**Area kerja:**

* `app/controllers/`
* `app/models/`
* `config/`

**Tugas:**

* Membuat controller untuk mengatur alur aplikasi
* Menghubungkan data ke view
* Mengelola database (CRUD)
* Menyiapkan sistem pengajuan surat

---

### 🎯 UI/UX Designer

Fokus pada desain tampilan dan pengalaman pengguna.

**Tugas:**

* Mendesain tampilan di Figma:

  * Landing Page
  * Dashboard Admin
  * Portal Warga
* Menentukan warna, font, dan layout

---

## 🔄 Workflow Tim

1. UI/UX membuat desain di Figma
2. Frontend slicing desain ke HTML/CSS
3. Backend menyiapkan logic dan database
4. Integrasi frontend + backend

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

## 📌 Catatan

* Jangan mengubah struktur folder tanpa diskusi tim
* Gunakan branch `dev` untuk development
* Setiap fitur dikerjakan dalam branch masing-masing

---

## 💡 Status Project

🚧 Dalam tahap pengembangan (menunggu desain UI/UX)

---
