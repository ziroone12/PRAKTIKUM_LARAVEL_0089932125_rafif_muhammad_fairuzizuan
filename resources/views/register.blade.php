<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Pasien - Apotek FarmaMedika</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      body {
        background-color: #f0fdf4;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 25px 20px;
      }
      .auth-card {
        background-color: #ffffff;
        width: 100%;
        max-width: 500px;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(22, 101, 52, 0.1);
        border: 1px solid #bbf7d0;
      }
      .brand-header {
        text-align: center;
        margin-bottom: 22px;
      }
      .brand-header h2 {
        color: #166534;
        font-size: 24px;
        margin-bottom: 6px;
      }
      .brand-header p {
        color: #15803d;
        font-size: 14px;
      }
      .alert-box {
        padding: 12px 16px;
        border-radius: 8px;
        font-size: 13px;
        margin-bottom: 20px;
        background-color: #dcfce7;
        color: #166534;
        border: 1px solid #bbf7d0;
        display: block;
      }
      .form-group {
        margin-bottom: 16px;
      }
      .form-group label {
        display: block;
        margin-bottom: 6px;
        font-size: 13px;
        font-weight: 600;
        color: #166534;
      }
      .form-control {
        width: 100%;
        padding: 10px 14px;
        border: 1.5px solid #cbd5e1;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
        transition:
          border-color 0.2s,
          box-shadow 0.2s;
      }
      .form-control:focus {
        border-color: #16a34a;
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.15);
      }
      .form-row {
        display: flex;
        gap: 12px;
      }
      .form-row .form-group {
        flex: 1;
      }
      .btn-submit {
        width: 100%;
        padding: 12px;
        background-color: #166534;
        color: #ffffff;
        border: none;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.2s;
        margin-top: 10px;
      }
      .btn-submit:hover {
        background-color: #14532d;
      }
      .auth-footer {
        margin-top: 22px;
        text-align: center;
        font-size: 13px;
        color: #475569;
      }
      .auth-footer a {
        color: #166534;
        text-decoration: none;
        font-weight: 600;
      }
      .auth-footer a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="auth-card">
      <div class="brand-header">
        <h2>Apotek FarmaMedika</h2>
        <p>Formulir Pendaftaran Pasien Baru</p>
      </div>

      <div class="alert-box">
        <span>Pesan status pendaftaran ditampilkan di sini</span>
      </div>

      <form action="" method="POST">
        <div class="form-group">
          <label>Nama Lengkap Pasien</label>
          <input
            type="text"
            class="form-control"
            placeholder="Contoh: Rina Safitri"
            required
          />
        </div>

        <div class="form-group">
          <label>Alamat Email</label>
          <input
            type="email"
            class="form-control"
            placeholder="nama@email.com"
            required
          />
        </div>

        <div class="form-group">
          <label>Nomor Telepon / WhatsApp</label>
          <input
            type="tel"
            class="form-control"
            placeholder="081234567890"
            required
          />
        </div>

        <div class="form-group">
          <label>Alamat Domisili</label>
          <textarea
            class="form-control"
            rows="2"
            placeholder="Alamat lengkap tempat tinggal"
            required
          ></textarea>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label>Kata Sandi</label>
            <input
              type="password"
              class="form-control"
              placeholder="Minimal 6 karakter"
              required
            />
          </div>
          <div class="form-group">
            <label>Ulangi Sandi</label>
            <input
              type="password"
              class="form-control"
              placeholder="Ketik ulang sandi"
              required
            />
          </div>
        </div>

        <button type="submit" class="btn-submit">Daftarkan Akun Pasien</button>
      </form>

      <div class="auth-footer">
        Sudah terdaftar sebelumnya? <a href="login">Masuk di sini</a>
      </div>
    </div>
  </body>
</html>