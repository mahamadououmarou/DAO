<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini">
@include('header')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Accueil</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item active">Liste des utilisateurs</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-header">
                                    <h3 class="card-title" >LISTE DES UTILISATEURS</h3>
                                    <br>
                                    <a href="/ajouter" class="btn btn-success pull-right" >Ajouter un utilisateur</a>
                            
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Adresse email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($utilisateurs as $utilisateur)
                                            <tr>
                                                <th>{{ $utilisateur->id }}</th>
                                                <th>{{ $utilisateur->nom }}</th>
                                                <th>{{ $utilisateur->prenom }}</th>
                                                <th>{{ $utilisateur->email }}</th>
                                                <th>{{ $utilisateur->role }}</th>
                                                <th><a href="#" class="btn btn-primary">Modi</a>
                                                    <a href="#" class="btn btn-danger">Supp</a>
                                                </th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        @include('footer')
                        <script src="/plugins/jquery/jquery.min.js"></script>
                        <!-- Bootstrap 4 -->
                        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- DataTables  & Plugins -->
                        <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
                        <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                        <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                        <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                        <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                        <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                        <script src="/plugins/jszip/jszip.min.js"></script>
                        <script src="/plugins/pdfmake/pdfmake.min.js"></script>
                        <script src="/plugins/pdfmake/vfs_fonts.js"></script>
                        <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                        <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                        <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                        <!-- AdminLTE App -->
                        <script src="/dist/js/adminlte.min.js"></script>
                        <!-- AdminLTE for demo purposes -->
                        <!-- Page specific script -->
                        <script>
                            $(function() {
                                $("#example1").DataTable({
                                    "responsive": true,
                                    "lengthChange": false,
                                    "autoWidth": false,
                                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                                $('#example2').DataTable({
                                    "paging": true,
                                    "lengthChange": false,
                                    "searching": false,
                                    "ordering": true,
                                    "info": true,
                                    "autoWidth": false,
                                    "responsive": true,
                                });
                            });
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>