<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>CRIAR</h1>
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
                    <h3 class="card-title">Novo User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action= "router.php?c=bo&a=store" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username" class="form-label">
                                UserName:
                                <input type="text" class="form-control" name="username">
                            </label>

                            <label for="passeword" class="form-label">
                                PasseWord:
                                <input type="password" class="form-control" name="passeword">
                            </label>

                            <label for="email" class="form-label">
                                Email:
                                <input type="email" class="form-control" name="email" placeholder="Novo Email">
                            </label>
                            <br>
                            <label for="telefone" class="form-label">
                                Telefone:
                                <input type="tel" class="form-control" name="telefone" placeholder="Novo numero Telefone">
                            </label>

                            <label for="nif" class="form-label">
                                NIF:
                                <input type="number" class="form-control" name="nif" placeholder="Novo NIF">
                            </label>
                            <br>
                            <label for="codpostal" class="form-label">
                                Codígo Postal:
                                <input type="text" class="form-control" name="codpostal" placeholder="Novo Codígo Postal">
                            </label>

                            <label for="localidade" class="form-label">
                                Localidade:
                                <input type="text" class="form-control" name="localidade" placeholder="Nova Localização">
                            </label>

                            <label for="morada" class="form-label">
                                Morada:
                                <input type="text" class="form-control" name="morada" placeholder="Nova Morada">
                            </label>
                            <br>
                            <label for="role">Tipo de User:
                                <select name="role">
                                    <?php if ($userRole == 'admin'){?>
                                        <option value="cliente">Cliente</option>
                                        <option value="funcionario">Funcionario</option>
                                    <?php } else { ?>
                                        <option value="cliente">Cliente</option>
                                    <?php } ?>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">New User</button>
                        <a href="router.php?c=bo&a=index" class="btn btn-info" role="button">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->