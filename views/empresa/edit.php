<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>EDITAR</h1>
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
                    <h3 class="card-title">Empresa <?= $empresa -> degsocial ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action= "router.php?c=empresa&a=update&id=<?= $empresa -> id?>" method="post">
                    <div class="card-body">
                        <div class="form-group">

                            <label for="degsocial" class="form-label">
                                Designação Social: <?= $empresa -> degsocial ?>
                                <input type="text" class="form-control" name="degsocial" placeholder="Nova Designação Social">
                            </label>

                            <label for="email" class="form-label">
                                Email: <?= $empresa -> email ?>
                                <input type="email" class="form-control" name="email" placeholder="Novo Email">
                            </label>
                                <br>
                            <label for="telefone" class="form-label">
                                Telefone: <?= $empresa -> telefone ?>
                                <input type="tel" class="form-control" name="telefone" placeholder="Novo numero Telefone">
                            </label>

                            <label for="nif" class="form-label">
                                NIF: <?= $empresa -> nif ?>
                                <input type="number" class="form-control" name="nif" placeholder="Novo NIF">
                            </label>
                                <br>
                            <label for="codpostal" class="form-label">
                                Codígo Postal: <?= $empresa -> codpostal ?>
                                <input type="text" class="form-control" name="codpostal" placeholder="Novo Codígo Postal">
                            </label>

                            <label for="localidade" class="form-label">
                                Localidade: <?= $empresa -> localidade ?>
                                <input type="text" class="form-control" name="localidade" placeholder="Nova Localização">
                            </label>

                            <label for="morada" class="form-label">
                                Morada: <?= $empresa -> morada ?>
                                <input type="text" class="form-control" name="morada" placeholder="Nova Morada">
                            </label>
                                <br>
                            <label for="capsocial" class="form-label">
                                Capital Social: <?= $empresa -> capsocial ?>€
                                <input type="text" class="form-control" name="capsocial" placeholder="Novo Capital Social">
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