<?php require_once '../../app/config/App.php' ?>

<?php require_once '../Includes/header.php' ?>
<!-- CUERPO QUE COMPARTEN TODOS -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Clientes", "Clientes",SERVERURL."views") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- CONTENIDO PERSONALIZADO -->
        <a href="./registrar-cliente" class="btn btn-primary btn-sm">Registrar Cliente </a>
        <div class="col-md-12">
          <div class="table-responsive">
            <table class=" table table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Apellidos</th>
                  <th>Nombres</th>
                  <th>Telefonos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Alvarez</td>
                  <td>Carlos</td>
                  <td>123456789</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Alvarez</td>
                  <td>Carlos</td>
                  <td>123456789</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Alvarez</td>
                  <td>Carlos</td>
                  <td>123456789</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--FIN CUERPO QUE COMPARTEN TODOS -->
<?php require_once '../Includes/footer.php' ?>

</body>

</html>