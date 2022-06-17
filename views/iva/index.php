<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-5">
                    <h1>IVAS</h1>
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
                    <h3 class="card-title"><strong>Ivas</strong></h3>
                </div>
                <!-- /.card-header -->
                <!-- ADMIN // FUNCIONARIO only -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Em Vigor</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($ivas as $iva) { ?>
                            <tr>
                                <td><?=$iva -> descricao?></td>
                                <td><?=$iva -> vigor ?></td>
                                <td>
                                    <a href="./router.php?c=iva&a=edit&id=<?=$iva->id ?>"
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