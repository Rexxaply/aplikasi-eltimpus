<div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/Reza Mik1 Bebas.JPG" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Reza
                                    <span class="user-level">Admin</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">Ganti Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">Pengaturan Akun</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="dashboard.php">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Main Data</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#data">
                                <i class="far fa-folder-open"></i>
                                <p>Data Master</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="data">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="dashboard.php?page=jurusan">
                                            <span class="sub-item">Jurusan</span>
                                        </a>
                                    </li>
                                    <li>        
                                        <a href="dashboard.php?page=semester">
                                            <span class="sub-item">Semester</span>
                                        </a>
                                    </li>
                                    <li>        
                                        <a href="dashboard.php?page=tahunAjaran">
                                            <span class="sub-item">Tahun Ajaran</span>
                                        </a>
                                    </li>
                                    <li>        
                                        <a href="dashboard.php?page=matkul">
                                            <span class="sub-item">Mata Kuliah</span>
                                        </a>
                                    </li>
                                    <li>        
                                        <a href="dashboard.php?page=penanggungJawab">
                                            <span class="sub-item">Penanggung Jawab Jurusan</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#instruktur">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <p>Instruktur</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="instruktur">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="dashboard.php?page=tambahInstruktur">
                                            <span class="sub-item">Tambah Instruktur</span>
                                        </a>
                                    </li>
                                    <li>        
                                        <a href="dashboard.php?page=dataInstruktur">
                                            <span class="sub-item">Data Instruktur</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#jadwal">
                                <i class="far fa-clock"></i>
                                <p>Jadwal Mata Kuliah</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="jadwal">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="dashboard.php?page=tambahMatkul">
                                            <span class="sub-item">Tambah Jadwal Mata Kuliah</span>
                                        </a>
                                    </li>
                                    <li>        
                                        <a href="dashboard.php?page=mataKuliah">
                                            <span class="sub-item">Daftar Jadwal Mata Kuliah</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Data Mahasiswa</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#mahasiswa">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Mahasiswa</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="mahasiswa">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="dashboard.php?page=tambahMahasiswa">
                                            <span class="sub-item">Tambah Mahasiswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard.php?page=dataMahasiswa">
                                            <span class="sub-item">Data Mahasiswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#absensi">
                                <i class="fas fa-clipboard-check"></i>
                                <p>Rekap Absensi</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="absensi">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="dashboard.php?page=tambahMahasiswa">
                                            <span class="sub-item">ADP</span>
                                        </a>
                                    </li>
                                    <!-- Perulangan dengan mengambil id di tabel kelas dan di jadikan patokan untuk membuat kelas baru -->
                                    <!-- Masuk ke folder rekap kelas -->
                                    
                                    <!-- <li>
                                        <a href="dashboard.php?page=tambahMahasiswa">
                                            <span class="sub-item">AKP</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard.php?page=tambahMahasiswa">
                                            <span class="sub-item">MIK</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Backup</h4>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard.php?page=backup">
                                <i class="fas fa-database"></i>
                                <p>Backup Database</p>
                            </a>
                        </li>
                        <li class="nav-item active mt-4">
                            <a href="dashboard.php">
                                <i class="fas fa-sign-out-alt text-danger"></i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>