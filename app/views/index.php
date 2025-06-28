<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD</title>

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link href="/crud/public/css/style.css" rel="stylesheet" />
</head>

<body>
  <h1>PORQUE</h1>

  <div class="container mt-4">
    <h2>Agregar Personas</h2>
    <form action="/app/models/personas.php" method="post" class="mb-4">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="cedula" class="form-label">Cedula</label>
          <input
            type="text"
            class="form-control"
            id="cedula"
            name="cedula"
            required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input
            type="text"
            class="form-control"
            id="nombre"
            name="nombre"
            required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input
            type="text"
            class="form-control"
            id="apellido"
            name="apellido"
            required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
          <input
            type="date"
            class="form-control"
            id="fecha_nacimiento"
            name="fecha_nacimiento"
            required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="profesion" class="form-label">Profesion</label>
          <input
            type="text"
            class="form-control"
            id="profesion"
            name="profesion"
            required />
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Agregar usuario</button>
      <button type="reset" class="btn btn-danger">Cancelar</button>
    </form>

    <h2>Lista de personas</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Cedula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Fecha de Nacimiento</th>
          <th>Profesion</th>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          <td scope="row"></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td scope="row">2239694</td>
          <td>Guillermo</td>
          <td>Pereira</td>
          <td>GP@gmail.com</td>
          <td>1990-01-01</td>
          <td>Ingeniero en sistemas</td>

          <td>
            <a href="#" class="btn btn-warning btn-sm">Editar</a>
            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="/crud/app/assets/code.js"></script>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
</body>

</html>