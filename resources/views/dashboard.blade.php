<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal Pasien - Apotek FarmaMedika</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      body {
        background-color: #f8fafc;
        color: #1e293b;
      }
      .navbar {
        background-color: #166534;
        padding: 16px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #ffffff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      }
      .navbar-brand h2 {
        font-size: 20px;
        font-weight: 700;
      }
      .navbar-user {
        display: flex;
        align-items: center;
        gap: 20px;
      }
      .navbar-user span {
        font-size: 14px;
        color: #bbf7d0;
      }
      .btn-logout {
        background-color: #dc2626;
        color: #ffffff;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.2s;
      }
      .btn-logout:hover {
        background-color: #b91c1c;
      }
      .container {
        max-width: 960px;
        margin: 35px auto;
        padding: 0 20px;
      }
      .welcome-banner {
        background: linear-gradient(135deg, #15803d, #166534);
        color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 25px;
        box-shadow: 0 6px 18px rgba(22, 101, 52, 0.15);
      }
      .welcome-banner h1 {
        font-size: 26px;
        margin-bottom: 8px;
      }
      .welcome-banner p {
        color: #dcfce7;
        font-size: 14px;
      }
      .grid-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
      }
      .info-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
      }
      .info-card h4 {
        color: #15803d;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 12px;
      }
      .info-card .card-value {
        font-size: 22px;
        font-weight: 700;
        color: #166534;
        margin-bottom: 6px;
      }
      .badge-status {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        background-color: #dcfce7;
        color: #166534;
      }
      .section-box {
        background: #ffffff;
        padding: 26px;
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
      }
      .section-box h3 {
        color: #166534;
        font-size: 18px;
        margin-bottom: 16px;
        padding-bottom: 10px;
        border-bottom: 1px solid #f1f5f9;
      }
      .service-list {
        list-style: none;
      }
      .service-item {
        padding: 12px 0;
        border-bottom: 1px solid #f8fafc;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 14px;
        color: #334155;
      }
      .service-item:last-child {
        border-bottom: none;
      }
      .service-number {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background-color: #dcfce7;
        color: #166534;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 12px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-brand">
        <h2>Apotek FarmaMedika</h2>
      </div>
      <div class="navbar-user">
        <span>Pasien: <strong>Rina Safitri</strong> (rina@gmail.com)</span>
        <form action="logout" method="POST" style="display: inline;">
          <button type="submit" class="btn-logout">Keluar</button>
        </form>
      </div>
    </nav>

    <div class="container">
      <div class="welcome-banner">
        <h1>Selamat Datang di Portal Pasien, Rina Safitri!</h1>
        <p>
          Layanan tebus resep digital dan informasi obat terintegrasi Apotek
          FarmaMedika.
        </p>
      </div>

      <div class="grid-info">
        <div class="info-card">
          <h4>Status Kepesertaan</h4>
          <div class="card-value">Aktif</div>
          <span class="badge-status">Pasien Terverifikasi</span>
        </div>
        <div class="info-card">
          <h4>Nomor Kontak Terdaftar</h4>
          <div class="card-value">081234567890</div>
          <p style="font-size: 12px; color: #64748b;">
            Alamat: Jl. Merdeka Sehat No. 10, Jakarta
          </p>
        </div>
      </div>

      <div class="section-box">
        <h3>Daftar Layanan Konsultasi & Layanan Pasien Aktif</h3>
        <ul class="service-list">
          <li class="service-item">
            <div class="service-number">1</div>
            <div>
              Konsultasi gratis penggunaan obat antibiotik bersama apoteker
              jaga.
            </div>
          </li>
          <li class="service-item">
            <div class="service-number">2</div>
            <div>
              Layanan pengantaran obat resep langsung ke alamat domisili dalam
              radius 5 km.
            </div>
          </li>
          <li class="service-item">
            <div class="service-number">3</div>
            <div>
              Pengingat otomatis jadwal minum obat dan isi ulang resep kronis.
            </div>
          </li>
          <li class="service-item">
            <div class="service-number">4</div>
            <div>
              Pemeriksaan tensi darah dan kadar gula darah gratis setiap akhir
              pekan.
            </div>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>