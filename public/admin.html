<!DOCTYPE html>
<html lang="id">
<head>
    <script>
  // Proteksi akses admin
  if (sessionStorage.getItem('isAdmin') !== 'true') {
    window.location.href = "login.html";
  }
</script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard BAP</title>
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
      --info: #60a5fa;
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
      max-width: 1200px;
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
    
    /* Stats Cards */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }
    
    .stat-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      padding: 20px;
      text-align: center;
      transition: var(--transition);
      box-shadow: var(--shadow);
    }
    
    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
      border-color: rgba(251, 191, 36, 0.3);
    }
    
    .stat-icon {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }
    
    .stat-value {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 5px;
    }
    
    .stat-label {
      color: var(--muted);
      font-size: 0.9rem;
    }
    
    .stat-pending .stat-icon { color: var(--warning); }
    .stat-approved .stat-icon { color: var(--success); }
    .stat-rejected .stat-icon { color: var(--danger); }
    .stat-total .stat-icon { color: var(--brand); }
    
    /* Cards */
    .card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      padding: 25px;
      transition: var(--transition);
      box-shadow: var(--shadow);
      margin-bottom: 25px;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
      border-color: rgba(251, 191, 36, 0.3);
    }
    
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      flex-wrap: wrap;
      gap: 15px;
    }
    
    h2 {
      color: var(--brand);
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    /* Table Styles */
    .table-container {
      overflow-x: auto;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }
    
    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    th {
      background: rgba(255, 255, 255, 0.05);
      color: var(--muted);
      font-weight: 600;
      position: sticky;
      top: 0;
    }
    
    tr:hover {
      background: rgba(255, 255, 255, 0.03);
    }
    
    /* Status Badges */
    .status {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.85rem;
    }
    
    .status.pending {
      background: rgba(245, 158, 11, 0.2);
      color: var(--warning);
      border: 1px solid rgba(245, 158, 11, 0.3);
    }
    
    .status.approved {
      background: rgba(16, 185, 129, 0.2);
      color: var(--success);
      border: 1px solid rgba(16, 185, 129, 0.3);
    }
    
    .status.rejected {
      background: rgba(239, 68, 68, 0.2);
      color: var(--danger);
      border: 1px solid rgba(239, 68, 68, 0.3);
    }
    
    .status.rescheduled {
      background: rgba(96, 165, 250, 0.2);
      color: var(--info);
      border: 1px solid rgba(96, 165, 250, 0.3);
    }
    
    /* Buttons */
    .btn-container {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--brand);
      color: #0b2341;
      font-weight: 600;
      border: none;
      padding: 10px 16px;
      border-radius: 10px;
      cursor: pointer;
      text-decoration: none;
      transition: var(--transition);
      box-shadow: 0 4px 6px rgba(251, 191, 36, 0.2);
      font-size: 0.9rem;
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
    
    .btn-danger {
      background: var(--danger);
      color: white;
    }
    
    .btn-danger:hover {
      background: #dc2626;
      box-shadow: 0 6px 12px rgba(239, 68, 68, 0.3);
    }
    
    .btn-small {
      padding: 6px 12px;
      font-size: 0.8rem;
    }
    
    /* Dialog Styles */
    dialog {
      border: none;
      border-radius: 16px;
      padding: 0;
      background: var(--card);
      color: var(--text);
      width: 90%;
      max-width: 500px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }
    
    dialog::backdrop {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(5px);
    }
    
    .dialog-header {
      padding: 20px 25px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .dialog-header h3 {
      color: var(--brand);
      margin: 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .dialog-close {
      background: none;
      border: none;
      color: var(--muted);
      font-size: 1.2rem;
      cursor: pointer;
      transition: var(--transition);
    }
    
    .dialog-close:hover {
      color: var(--text);
    }
    
    .dialog-body {
      padding: 25px;
    }
    
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
    
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
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
      
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .card-header {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .form-row {
        grid-template-columns: 1fr;
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
      
      .stats-grid {
        grid-template-columns: 1fr;
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
        <div class="subtitle">Panel Administrasi</div>
      </div>
    </div>
    
    <button class="mobile-menu-btn" id="mobileMenuBtn">
      <i class="fas fa-bars"></i>
    </button>
    
    <nav id="mainNav">
      <a href="index.html"><i class="fas fa-home"></i> Beranda</a>
      <a href="ajukan.html"><i class="fas fa-calendar-plus"></i> Ajukan Jadwal</a>
      <a href="status.html"><i class="fas fa-search"></i> Cek Status</a>
      <a href="admin.html" class="active"><i class="fas fa-user-shield"></i> Admin</a>
    </nav>

    <button class="btn btn-danger" onclick="logout()" style="margin-left:15px;">
    <i class="fas fa-sign-out-alt"></i> Logout
  </button>
</header>
  </header>

  <main>
    <section class="page-header fade-in">
      <h2><i class="fas fa-user-shield"></i> Dashboard Admin</h2>
      <p>Kelola semua pengajuan BAP, verifikasi data, dan atur jadwal dari panel ini.</p>
    </section>

    <div class="stats-grid fade-in">
      <div class="stat-card stat-total">
        <div class="stat-icon">
          <i class="fas fa-file-alt"></i>
        </div>
        <div class="stat-value" id="totalCount">0</div>
        <div class="stat-label">Total Pengajuan</div>
      </div>
      
      <div class="stat-card stat-pending">
        <div class="stat-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="stat-value" id="pendingCount">0</div>
        <div class="stat-label">Menunggu</div>
      </div>
      
      <div class="stat-card stat-approved">
        <div class="stat-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="stat-value" id="approvedCount">0</div>
        <div class="stat-label">Disetujui</div>
      </div>
      
      <div class="stat-card stat-rejected">
        <div class="stat-icon">
          <i class="fas fa-times-circle"></i>
        </div>
        <div class="stat-value" id="rejectedCount">0</div>
        <div class="stat-label">Ditolak</div>
      </div>
    </div>

    <section class="card fade-in">
      <div class="card-header">
        <h2><i class="fas fa-list"></i> Daftar Pengajuan</h2>
        <div class="btn-container">
          <button class="btn" id="btnExport">
            <i class="fas fa-file-export"></i> Ekspor Excel
          </button>
        </div>
      </div>
      
      <div class="table-container">
        <table id="tabel">
          <thead>
            <tr>
              <th>No</th>
              <th>Nomor Permohonan</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Paspor</th>
              <th>Status</th>
              <th>Jadwal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
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

  <dialog id="dlgKelola">
    <div class="dialog-header">
      <h3><i class="fas fa-edit"></i> Kelola Pengajuan</h3>
      <button class="dialog-close" id="btnCloseDialog">
        <i class="fas fa-times"></i>
      </button>
    </div>
    
    <div class="dialog-body">
      <form id="formKelola">
        <input type="hidden" name="id">
        
        <div class="form-group">
          <label for="status" class="required">Status</label>
          <select id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="approved">Approved</option>
            <option value="rejected">Rejected</option>
            <option value="rescheduled">Rescheduled</option>
          </select>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal">
          </div>
          
          <div class="form-group">
            <label for="jam_mulai">Jam Mulai</label>
            <input type="time" id="jam_mulai" name="jam_mulai">
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="jam_selesai">Jam Selesai</label>
            <input type="time" id="jam_selesai" name="jam_selesai">
          </div>
          
          <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi BAP">
          </div>
        </div>
        
        <div class="form-group">
          <label for="petugas">Petugas</label>
          <input type="text" id="petugas" name="petugas" placeholder="Nama petugas">
        </div>
        
        <div class="form-group">
          <label for="catatan">Catatan</label>
          <textarea id="catatan" name="catatan" rows="3" placeholder="Catatan untuk pemohon"></textarea>
        </div>
        
        <div class="btn-container">
          <button type="submit" class="btn">
            <i class="fas fa-save"></i> Simpan Perubahan
          </button>
          <button type="button" class="btn btn-secondary" id="btnCancelDialog">
            <i class="fas fa-times"></i> Batal
          </button>
        </div>
      </form>
    </div>
  </dialog>

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
    
    // DOM Elements
    const tbody = document.querySelector('#tabel tbody');
    const dlg = document.getElementById('dlgKelola');
    const formKelola = document.getElementById('formKelola');
    const btnCloseDialog = document.getElementById('btnCloseDialog');
    const btnCancelDialog = document.getElementById('btnCancelDialog');
    
    // Stats elements
    const totalCount = document.getElementById('totalCount');
    const pendingCount = document.getElementById('pendingCount');
    const approvedCount = document.getElementById('approvedCount');
    const rejectedCount = document.getElementById('rejectedCount');

    function updateStats() {
      const list = ambilData();
      totalCount.textContent = list.length;
      pendingCount.textContent = list.filter(x => x.status === 'pending').length;
      approvedCount.textContent = list.filter(x => x.status === 'approved').length;
      rejectedCount.textContent = list.filter(x => x.status === 'rejected').length;
    }

    function renderTabel(){
      const list = ambilData();
      tbody.innerHTML = list.map((x, i) => {
        const s = x.schedule || {};
        const jadwal = s.tanggal ? 
          `${s.tanggal} ${s.jam_mulai || ''}${s.jam_selesai ? ' - ' + s.jam_selesai : ''}` : 
          '-';
          
        // Tentukan ikon status
        let statusIcon = 'fa-clock';
        if (x.status === 'approved') statusIcon = 'fa-check-circle';
        if (x.status === 'rejected') statusIcon = 'fa-times-circle';
        if (x.status === 'rescheduled') statusIcon = 'fa-calendar-alt';
        
        return `
          <tr>
            <td>${i + 1}</td>
            <td><strong>${x.nomor_permohonan}</strong></td>
            <td>${x.nama}</td>
            <td>${x.email}</td>
            <td>${x.paspor}</td>
            <td>
              <span class="status ${x.status}">
                <i class="fas ${statusIcon}"></i> ${x.status.toUpperCase()}
              </span>
            </td>
            <td>${jadwal}</td>
            <td>
              <div class="btn-container">
                <button class="btn btn-small" onclick="kelola('${x.id}')">
                  <i class="fas fa-edit"></i> Kelola
                </button>
                <button class="btn btn-small btn-danger" onclick="hapus('${x.id}')">
                  <i class="fas fa-trash"></i> Hapus
                </button>
              </div>
            </td>
          </tr>
        `;
      }).join('');
      
      updateStats();
    }

    function kelola(id){
      const item = ambilData().find(x => x.id === id);
      if(!item) return;
      
      formKelola.id.value = item.id;
      formKelola.status.value = item.status;
      formKelola.tanggal.value = item.schedule?.tanggal || '';
      formKelola.jam_mulai.value = item.schedule?.jam_mulai || '';
      formKelola.jam_selesai.value = item.schedule?.jam_selesai || '';
      formKelola.lokasi.value = item.schedule?.lokasi || '';
      formKelola.petugas.value = item.schedule?.petugas || '';
      formKelola.catatan.value = item.catatan_admin || '';
      
      dlg.showModal();
    }

    function hapus(id){
      if(confirm("Yakin hapus data ini?")){
        const list = ambilData().filter(x => x.id !== id);
        simpanData(list);
        renderTabel();
      }
    }

    // Dialog event handlers
    btnCloseDialog.addEventListener('click', () => {
      dlg.close();
    });
    
    btnCancelDialog.addEventListener('click', () => {
      dlg.close();
    });
    
    formKelola.addEventListener('submit', e => {
      e.preventDefault();
      
      const id = formKelola.id.value;
      const list = ambilData();
      const idx = list.findIndex(x => x.id === id);
      
      if(idx > -1){
        list[idx].status = formKelola.status.value;
        list[idx].catatan_admin = formKelola.catatan.value;
        list[idx].schedule = {
          tanggal: formKelola.tanggal.value,
          jam_mulai: formKelola.jam_mulai.value,
          jam_selesai: formKelola.jam_selesai.value,
          lokasi: formKelola.lokasi.value,
          petugas: formKelola.petugas.value
        };
        list[idx].updated_at = new Date().toISOString();
        
        simpanData(list);
        renderTabel();
        dlg.close();
      }
    });

    // Ekspor ke CSV
    function exportExcel(){
      const data = ambilData();
      if(!data.length){
        alert("Tidak ada data untuk diekspor");
        return;
      }
      
      let csv = 'Nomor Permohonan,Nama,Email,Paspor,Status,Tanggal,Jam Mulai,Jam Selesai,Lokasi,Petugas,Catatan,Created At,Updated At\n';
      csv += data.map(x => {
        const s = x.schedule || {};
        return [
          x.nomor_permohonan,
          x.nama,
          x.email,
          x.paspor,
          x.status,
          s.tanggal || '',
          s.jam_mulai || '',
          s.jam_selesai || '',
          s.lokasi || '',
          s.petugas || '',
          (x.catatan_admin || '').replace(/,/g, ';'),
          x.created_at,
          x.updated_at
        ].join(',');
      }).join('\n');
      
      const blob = new Blob([csv], {type: 'text/csv'});
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'daftar_pengajuan_BAP.csv';
      a.click();
      URL.revokeObjectURL(url);
    }
    
    document.getElementById('btnExport').addEventListener('click', exportExcel);

    // Initialize
    renderTabel();
    renderTabel();

// 🔴 Fungsi Logout
function logout(){
  sessionStorage.removeItem('isAdmin');
  window.location.href = "login.html";
}
</script>
</body>
</html>

  </script>
</body>
</html>