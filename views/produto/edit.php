<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>EDITAR PRODUTO</h1>
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
                <form action= "router.php?c=produto&a=update&id=<?= $produto -> id ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="referencia" class="form-label">
                                Referencia:
                                <input type="number" class="form-control" name="referencia">
                            </label>

                            <label for="descricao" class="form-label">
                                Descrição:
                                <input type="text" class="form-control" name="descricao">
                            </label>

                            <label for="preco" class="form-label">
                                Preço:
                                <input type="number" class="form-control" name="preco">
                            </label>

                            <label for="stock" class="form-label">
                                Stock:
                                <input type="number" class="form-control" name="stock">
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