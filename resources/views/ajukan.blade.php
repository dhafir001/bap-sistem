<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ajukan Jadwal BAP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --bg: #0b2341;
      --card: #122b54;
      --soft: #1e3a5f;
      --text: #f9fafb;
      --muted: #d1d5db;
      --brand: #fbbf24;
      --success: #10b981;
      --warning: #f59e0b;
      --danger: #ef4444;
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
      --transition: all 0.3s ease;
    }
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      background: linear-gradient(135deg, #0b2341 0%, #122b54 50%, #1e3a5f 100%);
      color: var(--text);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      line-height: 1.6;
    }
    
    /* Header Styles */
    header {
      background: rgba(11, 35, 65, 0.95);
      backdrop-filter: blur(10px);
      border-bottom: 2px solid var(--brand);
      padding: 15px 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: var(--shadow);
    }
    
    .logo-container {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    
    .logo-row {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    
    .logo-row img {
      height: 50px;
      transition: var(--transition);
    }
    
    .logo-row img:hover {
      transform: scale(1.05);
    }
    
    .brand-text {
      display: flex;
      flex-direction: column;
    }
    
    header h1 {
      font-size: 1.5rem;
      color: var(--brand);
      font-weight: 700;
      letter-spacing: 0.5px;
    }
    
    .subtitle {
      font-size: 0.8rem;
      color: var(--muted);
      margin-top: 2px;
    }
    
    /* Navigation */
    nav {
      display: flex;
      gap: 8px;
    }
    
    nav a {
      color: var(--text);
      text-decoration: none;
      background: var(--soft);
      padding: 10px 16px;
      border-radius: 8px;
      transition: var(--transition);
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    nav a:hover {
      background: var(--brand);
      color: #0b2341;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(251, 191, 36, 0.3);
    }
    
    nav a.active {
      background: var(--brand);
      color: #0b2341;
    }
    
    /* Mobile Menu */
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      color: var(--text);
      font-size: 1.5rem;
      cursor: pointer;
    }
    
    /* Main Content */
    main {
      flex: 1;
      max-width: 800px;
      margin: 30px auto;
      padding: 0 20px;
      width: 100%;
    }
    
    .page-header {
      text-align: center;
      padding: 20px 0;
      margin-bottom: 20px;
    }
    
    .page-header h2 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      color: var(--brand);
    }
    
    .page-header p {
      font-size: 1.1rem;
      color: var(--muted);
      max-width: 600px;
      margin: 0 auto;
    }
    
    /* Cards */
    .card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      padding: 30px;
      transition: var(--transition);
      box-shadow: var(--shadow);
      margin-bottom: 25px;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
      border-color: rgba(251, 191, 36, 0.3);
    }
    
    h2 {
      color: var(--brand);
      margin-bottom: 20px;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    /* Form Styles */
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: var(--text);
    }
    
    .required::after {
      content: " *";
      color: var(--danger);
    }
    
    input, textarea, select {
      width: 100%;
      padding: 12px 15px;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: rgba(11, 28, 51, 0.7);
      color: var(--text);
      font-size: 1rem;
      transition: var(--transition);
    }
    
    input:focus, textarea:focus, select:focus {
      outline: none;
      border-color: var(--brand);
      box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.2);
    }
    
    input::placeholder, textarea::placeholder {
      color: var(--muted);
    }
    
    .file-input-container {
      position: relative;
      display: inline-block;
      width: 100%;
    }
    
    .file-input {
      opacity: 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
    }
    
    .file-input-label {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 12px 15px;
      border-radius: 10px;
      border: 1px dashed rgba(255, 255, 255, 0.3);
      background: rgba(11, 28, 51, 0.5);
      color: var(--muted);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .file-input-label:hover {
      border-color: var(--brand);
      color: var(--brand);
    }
    
    .file-name {
      margin-top: 8px;
      font-size: 0.9rem;
      color: var(--muted);
    }
    
    .error-message {
      color: var(--danger);
      font-size: 0.85rem;
      margin-top: 5px;
      display: none;
    }
    
    /* Buttons */
    .btn-container {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      margin-top: 25px;
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--brand);
      color: #0b2341;
      font-weight: 600;
      border: none;
      padding: 12px 24px;
      border-radius: 10px;
      cursor: pointer;
      text-decoration: none;
      transition: var(--transition);
      box-shadow: 0 4px 6px rgba(251, 191, 36, 0.2);
      font-size: 1rem;
    }
    
    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(251, 191, 36, 0.3);
    }
    
    .btn-secondary {
      background: var(--soft);
      color: var(--text);
    }
    
    .btn-secondary:hover {
      background: var(--card);
    }
    
    .btn-full {
      width: 100%;
      justify-content: center;
    }
    
    /* Result Styles */
    .result {
      margin-top: 25px;
      padding: 20px;
      border-radius: 12px;
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid rgba(16, 185, 129, 0.3);
      display: none;
    }
    
    .result h3 {
      color: var(--success);
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .nomor-permohonan {
      display: inline-block;
      background: rgba(16, 185, 129, 0.2);
      color: var(--success);
      padding: 10px 15px;
      border-radius: 8px;
      font-size: 1.2rem;
      font-weight: bold;
      margin: 10px 0;
      border: 1px solid rgba(16, 185, 129, 0.3);
    }
    
    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: rgba(11, 35, 65, 0.9);
      font-size: 14px;
      color: var(--muted);
      margin-top: 40px;
    }
    
    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
    }
    
    .footer-links {
      display: flex;
      gap: 20px;
    }
    
    .footer-links a {
      color: var(--muted);
      text-decoration: none;
      transition: var(--transition);
    }
    
    .footer-links a:hover {
      color: var(--brand);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      header {
        flex-wrap: wrap;
      }
      
      .mobile-menu-btn {
        display: block;
      }
      
      nav {
        display: none;
        width: 100%;
        flex-direction: column;
        margin-top: 15px;
      }
      
      nav.active {
        display: flex;
      }
      
      .page-header h2 {
        font-size: 1.8rem;
      }
      
      .page-header p {
        font-size: 1rem;
      }
      
      .footer-content {
        flex-direction: column;
        text-align: center;
      }
    }
    
    @media (max-width: 480px) {
      .logo-row {
        flex-direction: column;
        gap: 5px;
      }
      
      .brand-text {
        text-align: center;
      }
      
      .btn-container {
        flex-direction: column;
      }
      
      .btn {
        justify-content: center;
      }
      
      .card {
        padding: 20px;
      }
    }
    
    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .fade-in {
      animation: fadeIn 0.6s ease forwards;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo-container">
      <div class="logo-row">
        <img src="logo1.png" alt="Logo 1">
        <img src="logo2.png" alt="Logo 2">
      </div>
      <div class="brand-text">
        <h1>SI Manajemen Jadwal BAP</h1>
        <div class="subtitle">Sistem Informasi Terpadu</div>
      </div>
    </div>
    
    <button class="mobile-menu-btn" id="mobileMenuBtn">
      <i class="fas fa-bars"></i>
    </button>
    
    <nav id="mainNav">
      <a href="index.html"><i class="fas fa-home"></i> Beranda</a>
      <a href="ajukan.html" class="active"><i class="fas fa-calendar-plus"></i> Ajukan Jadwal</a>
      <a href="status.html"><i class="fas fa-search"></i> Cek Status</a>
      <a href="admin.html"><i class="fas fa-user-shield"></i> Admin</a>
    </nav>
  </header>

  <main>
    <section class="page-header fade-in">
      <h2><i class="fas fa-calendar-plus"></i> Ajukan Jadwal BAP</h2>
      <p>Isi formulir di bawah ini untuk mengajukan jadwal BAP Anda. Pastikan data yang diisi sudah benar.</p>
    </section>

    <section class="card fade-in">
      <h2><i class="fas fa-file-alt"></i> Form Pengajuan</h2>
      <form action="/pengajuan" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="form-group">
          <label for="nama" class="required">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
          <div class="error-message" id="namaError"></div>
        </div>
        
        <div class="form-group">
          <label for="tanggal_lahir" class="required">Tanggal Lahir</label>
          <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
          <div class="error-message" id="tanggalLahirError"></div>
        </div>
        
        <div class="form-group">
          <label for="nomor_hp" class="required">Nomor HP</label>
          <input type="tel" id="nomor_hp" name="nomor_hp" required placeholder="Contoh: 081234567890">
          <div class="error-message" id="nomorHpError"></div>
        </div>
        
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email aktif (opsional)">
          <div class="error-message" id="emailError"></div>
        </div>
        
        <div class="form-group">
          <label for="paspor" class="required">Nomor Paspor</label>
          <input type="text" id="paspor" name="paspor" required placeholder="Contoh: A1234567">
          <div class="error-message" id="pasporError"></div>
        </div>
        
        <div class="form-group">
          <label for="tujuan" class="required">Tujuan BAP</label>
          <textarea id="tujuan" name="tujuan" rows="4" required placeholder="Tuliskan tujuan dan alasan pengajuan BAP"></textarea>
          <div class="error-message" id="tujuanError"></div>
        </div>
        
        <div class="form-group">
          <label for="lampiran" class="required">Foto KTP</label>
          <div class="file-input-container">
            <input type="file" id="lampiran" name="lampiran" class="file-input" accept=".jpg,.jpeg,.png" required>
            <label for="lampiran" class="file-input-label">
              <i class="fas fa-cloud-upload-alt"></i>
              <span id="fileLabelText">Pilih File (JPG, JPEG, PNG)</span>
            </label>
          </div>
          <div id="fileName" class="file-name"></div>
          <div class="error-message" id="lampiranError"></div>
        </div>
        
        <div class="btn-container">
          <button type="submit" class="btn btn-full">
            <i class="fas fa-paper-plane"></i> Kirim Pengajuan
          </button>
        </div>
      </form>
      
      <div id="hasil" class="result">
        <h3><i class="fas fa-check-circle"></i> Pengajuan Berhasil</h3>
        <p>Nomor Permohonan Anda:</p>
        <div class="nomor-permohonan" id="nomorPermohonan"></div>
        <p>Simpan nomor ini untuk mengecek status pengajuan pada menu <strong>Cek Status</strong>.</p>
        <p class="download-info"><i class="fas fa-info-circle"></i> File CSV telah diunduh otomatis.</p>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-content">
      <div>&copy; 2025 Sistem Informasi BAP. Semua Hak Dilindungi.</div>
      <div class="footer-links">
        <a href="#"><i class="fas fa-shield-alt"></i> Kebijakan Privasi</a>
        <a href="#"><i class="fas fa-file-contract"></i> Syarat & Ketentuan</a>
        <a href="#"><i class="fas fa-question-circle"></i> Bantuan</a>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mainNav = document.getElementById('mainNav');
    
    mobileMenuBtn.addEventListener('click', () => {
      mainNav.classList.toggle('active');
      const icon = mobileMenuBtn.querySelector('i');
      if (mainNav.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('nav') && !e.target.closest('.mobile-menu-btn') && window.innerWidth <= 768) {
        mainNav.classList.remove('active');
        const icon = mobileMenuBtn.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });
    
    // File input handler
    const fileInput = document.getElementById('lampiran');
    const fileName = document.getElementById('fileName');
    const fileLabelText = document.getElementById('fileLabelText');
    
    fileInput.addEventListener('change', function() {
      if (this.files.length > 0) {
        fileName.textContent = `File terpilih: ${this.files[0].name}`;
        fileLabelText.textContent = 'Ganti File';
      } else {
        fileName.textContent = '';
        fileLabelText.textContent = 'Pilih File (JPG, JPEG, PNG)';
      }
    });
    
    // Key localStorage
    const key = 'bap_requests';

    function ambilData(){
      try { 
        return JSON.parse(localStorage.getItem(key) || '[]'); 
      } catch { 
        return []; 
      }
    }
    
    function simpanData(list){
      localStorage.setItem(key, JSON.stringify(list));
    }
    
    function buatNomor(){
      const year = new Date().getFullYear();
      const random = Math.random().toString(36).substr(2,5).toUpperCase();
      return `BAP-${year}-${random}`;
    }

    // Fungsi ekspor Excel (CSV)
    function exportExcel(data){
      let csv = 'Nomor Permohonan,Nama,Tanggal Lahir,Nomor HP,Email,Paspor,Tujuan,Lampiran,Status,Created At\n';
      csv += data.map(x =>
        [x.nomor_permohonan, x.nama, x.tanggal_lahir, x.nomor_hp, x.email, x.paspor, x.tujuan.replace(/,/g,';'),
         x.lampiran||'', x.status, x.created_at].join(',')
      ).join('\n');

      const blob = new Blob([csv], {type:'text/csv'});
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'pengajuan_BAP.csv';
      a.click();
      URL.revokeObjectURL(url);
    }

    // Validasi form
    function validasiForm(data) {
      let valid = true;
      
      // Reset error messages
      document.querySelectorAll('.error-message').forEach(el => {
        el.style.display = 'none';
      });
      
      // Validasi nama
      if (!data.get('nama') || data.get('nama').trim().length < 2) {
        document.getElementById('namaError').textContent = 'Nama lengkap harus diisi (minimal 2 karakter)';
        document.getElementById('namaError').style.display = 'block';
        valid = false;
      }
      
      // Validasi tanggal lahir
      if (!data.get('tanggal_lahir')) {
        document.getElementById('tanggalLahirError').textContent = 'Tanggal lahir harus diisi';
        document.getElementById('tanggalLahirError').style.display = 'block';
        valid = false;
      } else {
        const birthDate = new Date(data.get('tanggal_lahir'));
        const today = new Date();
        const age = today.getFullYear() - birthDate.getFullYear();
        
        if (age < 17) {
          document.getElementById('tanggalLahirError').textContent = 'Anda harus berusia minimal 17 tahun';
          document.getElementById('tanggalLahirError').style.display = 'block';
          valid = false;
        }
      }
      
      // Validasi nomor HP
      const nomorHp = data.get('nomor_hp');
      if (!nomorHp) {
        document.getElementById('nomorHpError').textContent = 'Nomor HP harus diisi';
        document.getElementById('nomorHpError').style.display = 'block';
        valid = false;
      } else {
        // Validasi format nomor HP (minimal 10 digit, maksimal 15 digit, hanya angka)
        const hpRegex = /^[0-9]{10,15}$/;
        if (!hpRegex.test(nomorHp.replace(/\s/g, ''))) {
          document.getElementById('nomorHpError').textContent = 'Format nomor HP tidak valid (10-15 digit angka)';
          document.getElementById('nomorHpError').style.display = 'block';
          valid = false;
        }
      }
      
      // Validasi email (opsional, tapi jika diisi harus valid)
      const email = data.get('email');
      if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('emailError').textContent = 'Format email tidak valid';
        document.getElementById('emailError').style.display = 'block';
        valid = false;
      }
      
      // Validasi paspor
      if (!data.get('paspor') || data.get('paspor').trim().length < 5) {
        document.getElementById('pasporError').textContent = 'Nomor paspor harus diisi (minimal 5 karakter)';
        document.getElementById('pasporError').style.display = 'block';
        valid = false;
      }
      
      // Validasi tujuan
      if (!data.get('tujuan') || data.get('tujuan').trim().length < 10) {
        document.getElementById('tujuanError').textContent = 'Tujuan BAP harus diisi (minimal 10 karakter)';
        document.getElementById('tujuanError').style.display = 'block';
        valid = false;
      }
      
      // Validasi lampiran (KTP)
      const file = fileInput.files[0];
      if (!file) {
        document.getElementById('lampiranError').textContent = 'Foto KTP wajib diunggah';
        document.getElementById('lampiranError').style.display = 'block';
        valid = false;
      } else {
        // Validasi tipe file
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        if (!allowedTypes.includes(file.type)) {
          document.getElementById('lampiranError').textContent = 'Format file harus JPG, JPEG, atau PNG';
          document.getElementById('lampiranError').style.display = 'block';
          valid = false;
        }
        
        // Validasi ukuran file (maksimal 5MB)
        if (file.size > 5 * 1024 * 1024) {
          document.getElementById('lampiranError').textContent = 'Ukuran file maksimal 5MB';
          document.getElementById('lampiranError').style.display = 'block';
          valid = false;
        }
      }
      
      return valid;
    }

    // Handle submit form
    const form = document.getElementById('formAjukan');
    const hasil = document.getElementById('hasil');
    const nomorPermohonan = document.getElementById('nomorPermohonan');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const data = new FormData(form);
      
      // Validasi form
      if (!validasiForm(data)) {
        return;
      }
      
      const obj = {
        id: crypto.randomUUID(),
        nomor_permohonan: buatNomor(),
        nama: data.get('nama'),
        tanggal_lahir: data.get('tanggal_lahir'),
        nomor_hp: data.get('nomor_hp'),
        email: data.get('email') || '',
        paspor: data.get('paspor'),
        tujuan: data.get('tujuan') || '',
        lampiran: fileInput.files[0] ? fileInput.files[0].name : '',
        status: 'pending',
        created_at: new Date().toISOString(),
        updated_at: new Date().toISOString(),
        schedule: {}
      };

      const list = ambilData();
      list.push(obj);
      simpanData(list);
      form.reset();
      fileName.textContent = '';
      fileLabelText.textContent = 'Pilih File (JPG, JPEG, PNG)';

      // Tampilkan hasil
      nomorPermohonan.textContent = obj.nomor_permohonan;
      hasil.style.display = 'block';
      
      // Scroll ke hasil
      hasil.scrollIntoView({ behavior: 'smooth' });
      
      // Ekspor ke CSV
      setTimeout(() => {
        exportExcel(list);
      }, 1000);
    });
  </script>
</body>
</html>