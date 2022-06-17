<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-5">
                    <h1>PRODUTOS</h1>
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
                    <h3 class="card-title"><strong>Produtos</strong></h3>
                </div>
                <!-- /.card-header -->
                <!-- ADMIN // FUNCIONARIO only -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Referencia</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($produtos as $produto) { ?>
                            <tr>
                                <td><?=$produto -> referencia?></td>
                                <td><?=$produto -> descricao?></td>
                                <td><?=$produto -> preco ?></td>
                                <td><?=$produto -> stock ?></td>
                                <td>
                                    <a href="./router.php?c=produto&a=edit&id=<?=$produto->id ?>"
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