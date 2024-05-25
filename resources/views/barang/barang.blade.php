<!DOCTYPE html>
<html lang="en">

<style>

 /* Style the dropdown menu */
 .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Show the dropdown menu when hovering over the parent dropdown */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Style the dropdown items */
        .dropdown-item {
            display: block;
            padding: 12px 16px;
            text-decoration: none;
            color: #333;
            text-transform: uppercase;
        }

        /* Change background color of dropdown items on hover */
        .dropdown-item:hover {
            background-color: #f9f9f9;
        }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    .table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .table-data th,
    .table-data td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table-data th {
        background-color: #f2f2f2;
    }

    .table-data tr:hover {
        background-color: #f5f5f5;
    }

    .table-data td a {
        text-decoration: none;
        color: #007bff;
        margin-right: 10px;
    }

    .table-data td a:hover {
        text-decoration: underline;
    }

    .table-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px; /* Add some bottom margin to create space */
    }
</style>

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
                <a class="nav-link" href="/dashboard">
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA TRANSAKSI</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/penjualan">PENJUALAN</a>
                    <a class="dropdown-item" href="/pembelian">PEMBELIAN</a>
                </div>
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
                <a class="nav-link collapsed" href="/supplier">
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

                    <div class="card">
                        <table class="table-data table-bordered">
                            <thead>
                                <tr>
                                    <th>ID BARANG</th>
                                    <th>NAMA BARANG</th>
                                    <th>JUMLAH STOK</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $data)
                                    <tr>
                                        <td>{{ $data->id_barang }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->jumlah_stock }}</td>
                                        <td>
                                            <a href="/barang/edit/{{ $data->id_barang }}">Edit</a>
                                            <a href="/barang/hapus/{{ $data->id_barang }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-container">
                        <div></div> <!-- Empty div to push button to the right -->
                        <a href="/barang/tambah" class="btn btn-primary btn-tambah">
                            <span class="icon-plus"></span> Tambah Data
                        </a>
                    </div>
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
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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