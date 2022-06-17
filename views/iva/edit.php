<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>EDITAR IVA</h1>
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
                <!-- form start -->
                <form action= "router.php?c=iva&a=update&id=<?= $iva -> id ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="percentagem" class="form-label">
                                Percentagem:
                                <input type="number" class="form-control" name="percentagem">
                            </label>

                            <label for="descricao" class="form-label">
                                Descrição:
                                <input type="text" class="form-control" name="descricao">
                            </label>
                                <br>
                            <label for="vigor" class="form-label">
                                Em Vigor:
                                <select name="vigor">
                                    <option>SIM</option>
                                    <option>NAO</option>
                                </select>
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