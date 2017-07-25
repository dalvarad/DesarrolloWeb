<html>
<head>

<body>
  <header>
  <link rel="stylesheet" href="pdfStyle.css">
    <h1>Hotel Acuarella</h1>
    <h2>Clientes</h2>
  </header>
  <footer>
   
         <p class="izq">
              Hotel Acuarella
         </p>
          <p class="page">
             Página
          </p>
  
  </footer>
  <div id="content">
   <table id="tabla" style="width:100%">
        <thead>
          <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Rut</th>
           <th>Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->rut }}</td>
          <td>{{ $user->email }}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</body>
</html>