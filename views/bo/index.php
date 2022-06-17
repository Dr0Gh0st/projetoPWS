<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-5">
                    <h1>HOMEPAGE --- BACKOFFICE</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a href="./router.php?c=fatura&a=index" class="btn btn-info" role="button">Faturas</a>
            <a href="./router.php?c=empresa&a=index" class="btn btn-info" role="button">Empresas</a>
            <a href="./router.php?c=bo&a=create" class="btn btn-info" role="button">New Users</a>
            <br><br>
            <a href="./router.php?c=produto&a=index" class="btn btn-info" role="button">Produtos</a>
            <a href="./router.php?c=iva&a=index" class="btn btn-info" role="button">Ivas</a>
            <a href="./router.php?c=bo&a=edit&id=<?= $_SESSION['id'] ?>" class="btn btn-info" role="button">Edit User</a>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
