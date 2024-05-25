<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WEB ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('style/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('style/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- dropdown -->
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            if (dropdownMenu.style.display === "none") {
                dropdownMenu.style.display = "block";
            } else {
                dropdownMenu.style.display = "none";
            }
        }

        function logout() {
            // Tambahkan logika logout di sini
            console.log("Logout clicked");
            // Misalnya, redirect ke halaman logout
            window.location.href = "/logout";
        }

        
    </script>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN SINAR JAYA <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/karyawan">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>DATA KARYAWAN</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/transaksi">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA TRANSAKSI</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/keuangan">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA KEUANGAN</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/barang">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA BARANG</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/supplyer">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA SUPPLYER</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow ml-auto"> <!-- Tambahkan kelas 'ml-auto' -->
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">MUHAMMAD ALFITRAH</span>
                            <img class="img-profile rounded-circle" src="{{asset('style/img/undraw_profile.svg')}}"
                                alt="Profile Picture">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" id="dropdownMenu"
                            aria-labelledby="userDropdown" style="display: none;">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="logout()">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="form-login">
                        <form action="{{ url('/keuangan/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_keuangan">ID KEUANGAN</label>
                                <input class="form-control" type="text" name="id_keuangan" id="id_keuangan"
                                    placeholder="Masukkan ID Keuangan" required />
                            </div>

                            <div class="form-group">
                                <label for="id_penjualan">PILIH ID PENJUALAN</label>
                                <select class="form-control" name="id_penjualan" id="id_penjualan" required>
                                    <option value="">Pilih ID Penjualan</option>
                                    <?php
// Koneksi ke database (ganti dengan konfigurasi koneksi Anda)
$koneksi = mysqli_connect("localhost", "root", "", "si_penjualan");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Query untuk mengambil data dari tabel barang (ganti nama_tabel dengan nama tabel yang sesuai)
$query = "SELECT id_penjualan, id_penjualan FROM penjualan_konsumen";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Periksa hasil query
if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    exit();
}

// Loop melalui hasil query dan menampilkan data dalam bentuk option dropdown
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['id_penjualan'] . "'>" . $row['id_penjualan'] . "</option>";
}

// Menutup koneksi database
mysqli_close($koneksi);
        ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_pembelian">PILIH ID PEMBELIAN</label>
                                <select class="form-control" name="id_pembelian" id="id_pembelian" required>
                                    <option value="">Pilih ID Barang</option>
                                    <?php
// Koneksi ke database (ganti dengan konfigurasi koneksi Anda)
$koneksi = mysqli_connect("localhost", "root", "", "si_penjualan");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Query untuk mengambil data dari tabel barang (ganti nama_tabel dengan nama tabel yang sesuai)
$query = "SELECT id_pembelian, id_pembelian FROM pembelian_supplier";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Periksa hasil query
if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    exit();
}

// Loop melalui hasil query dan menampilkan data dalam bentuk option dropdown
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['id_pembelian'] . "'>" . $row['id_pembelian'] . "</option>";
}

// Menutup koneksi database
mysqli_close($koneksi);
        ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="uang_masuk">UANG MASUK</label>
                                <input class="form-control" type="text" name="uang_masuk" id="uang_masuk"
                                    placeholder="Masukkan Nominal" required />
                            </div>

                            <div class="form-group">
                                <label for="uang_keluar">UANG KELUAR</label>
                                <input class="form-control" type="text" name="uang_keluar" id="uang_keluar"
                                    placeholder="Masukkan Nominal" required />
                            </div>

                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>


                    <!-- Content Row -->


                    <!-- End of Main Content -->

                    <!-- Footer -->

                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>