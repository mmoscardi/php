<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Limpiar Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <form id="formPrueba">
    <!-- nombre, apellido, telefono, domicilio -->
    <div class="form-group col-md-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group col-md-3">
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
    <div class="form-group col-md-3">
      <label for="telefono">Telefono</label>
      <input type="text" class="form-control" id="telefono" name="telefono">
    </div>
    <div class="form-group col-md-3">
      <label for="domicilio">Domicilio</label>
      <input type="text" class="form-control" id="domicilio" name="domicilio">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-danger" id="btnReset">Limpiar formulario</button>
  </form>

  <script>
    $(document).ready(function() {
      $("#btnReset").click(function() {
        $("#formPrueba").reset();
      
      });
    });
  </script>
</body>

</html>