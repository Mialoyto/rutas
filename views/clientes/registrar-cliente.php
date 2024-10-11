<?php require_once '../../app/config/App.php' ?>

<?php require_once '../Includes/header.php' ?>
<!-- CUERPO QUE COMPARTEN TODOS -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Nuevo cliente", "Lista de clientes", SERVERURL . "views/clientes/listar-cliente") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- CONTENIDO PERSONALIZADO -->
        <div class="col-md-12">
          <form action="" id="formulario-clientes" autocomplete="off">
            <div class="card card-outline card-primary">
              <div class="card-header">
                COMPLETAR LOS DATOS
              </div>
              <div class="card-body">
                <!-- fila 01 -->
                <div class="cold-md-4 form-group">
                  <label for="appelidos">Apellidos</label>
                  <input type="text" class="form-control" id="appelidos" placeholder="Ingrese apellidos" required autofocus>
                </div>
                <div class="cold-md-4 form-group">
                  <label for="nombres">Nombres</label>
                  <input type="text" class="form-control" id="nombres" placeholder="Ingrese nombres" required autofocus>
                </div>
                <div class="cold-md-4 form-group">
                  <label for="telefono">Télefono</label>
                  <input
                    type="tel"
                    class="form-control text-center"
                    id="telefono"
                    minlength="9"
                    maxlength="9"
                    placeholder="Ingrese télefono"
                    required>
                </div>
                <!-- fin fila 01 -->
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Guardar</button>
                <button class="btn btn-danger">Cancelar</button>
              </div>
            </div><!-- ./card -->
          </form>
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

<script>
  document.addEventListener('DOMContentLoaded', function () {

    const formulario = document.querySelector('#formulario-clientes');

    formulario.addEventListener('submit', async (event)  =>{
      event.preventDefault();
      if(await ask("Desea guardar los datos?")){
          showToast("Guardado correctamente", "SUCCESS", 1000, "./listar-cliente");
      }
    
    });
  });

</script>

</body>

</html>