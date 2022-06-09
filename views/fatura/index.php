<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-5">
                    <h1>FATURAS</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Faturas</strong></h3>
                    <a href="./router.php?c=fatura&a=create"
                       class="btn btn-info" role="button">Nova Fatura</a>
                </div>
                <!-- /.card-header -->
                <!-- ADMIN // FUNCIONARIO only -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Fatura Nº</th>
                                <th>Data de Emissão</th>
                                <th>Valor Total</th>
                                <th>Iva Total</th>
                                <th>Estado</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($faturas as $fatura) { ?>
                            <tr>
                                <td><?=$fatura -> id?></td>
                                <td><?=$fatura -> data?></td>
                                <td><?=$fatura-> valortotal ?></td>
                                <td><?=$fatura-> ivatotal ?></td>
                                <td><?=$fatura-> estado ?></td>
                                <td>
                                    <a href="./router.php?c=fatura&a=show&id=<?=$fatura->id ?>"
                                       class="btn btn-info" role="button">Show</a>
                                    <a href="./router.php?c=fatura&a=edit&id=<?=$fatura->id ?>"
                                       class="btn btn-info" role="button">Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->