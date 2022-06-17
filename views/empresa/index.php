<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-3">
                    <h1>EMPRESAS</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <table class="table tablestriped">
                <thead>
                <th><h3>Designação Social</h3></th>
                <th><h3>Email</h3></th>
                <th><h3>Telefone</h3></th>
                <th><h3>Morada</h3></th>
                <th><h3>Codigo Postal</h3></th>
                <th><h3>Ações</h3></th>
                </thead>
                <tbody>
                <?php
                foreach ($empresas as $empresa) { ?>
                    <tr>
                        <td><?=$empresa -> degsocial?></td>
                        <td><?=$empresa -> email?></td>
                        <td><?=$empresa -> telefone ?></td>
                        <td><?=$empresa -> morada ?></td>
                        <td><?=$empresa -> codpostal ?></td>
                        <td>
                            <a href="router.php?c=empresa&a=show&id=<?=$empresa -> id ?>"
                               class="btn btn-info" role="button">Show</a>
                            <a href="router.php?c=empresa&a=edit&id=<?=$empresa -> id ?>"
                               class="btn btn-info" role="button">Edit</a>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->