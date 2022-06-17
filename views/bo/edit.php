<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>EDITAR EMAIL // PASSEWORD</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">User <?= $user -> username ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action= "router.php?c=bo&a=update&id=<?= $_SESSION['id'] ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email" class="form-label">
                                Email:
                                <input type="email" class="form-control" name="email" placeholder="Novo Email">
                            </label>

                            <label for="passeword" class="form-label">
                                PasseWord:
                                <input type="password" class="form-control" name="passeword">
                            </label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->