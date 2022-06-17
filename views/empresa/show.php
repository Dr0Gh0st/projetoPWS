<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>EMPRESA <?= $empresa -> degsocial ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body row">
                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                        <div class="">
                            <h2><?= $empresa -> degsocial ?></h2>
                            <p class="lead mb-5"><?= $empresa -> codpostal ?>, <?= $empresa -> morada ?>, <?= $empresa -> localidade ?><br>
                                Phone: <?= $empresa -> telefone ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="form-group">
                            <label><strong>E-Mail: </strong></label>
                            <label><?= $empresa -> email ?></label>
                        </div>
                        <div class="form-group">
                            <label><strong>NIF: </strong></label>
                            <label><?= $empresa -> nif ?></label>
                        </div>
                        <div class="form-group">
                            <label><strong>Capital Social: </strong></label>
                            <label><?= $empresa -> capsocial ?>€</label>
                        </div>
                        <a href="router.php?c=empresa&a=edit&id=<?=$empresa -> id ?>"
                           class="btn btn-info" role="button">Edit</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->