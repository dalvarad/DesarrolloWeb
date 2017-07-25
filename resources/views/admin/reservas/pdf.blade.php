
<html>
<head>

<body>
  <header>
  <link rel="stylesheet" href="pdfStyle.css">
    <h1>Hotel Acuarella</h1>
    <h2>Reservas</h2>
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
            <th>Numero de Reserva</th>
            <th>Cliente</th>
            <th>Habitación</th>
            <th>Valor</th>
            <th>Check-In</th>
            <th>Check-Out</th>
          </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{$reserva->id}}</td>
                    <td>{{$reserva->name}}</td>
                    <td>{{$reserva->id_ha}}</td>                  
                    <td>{{$reserva->valor}}</td>
                    <td>{{$reserva->reserva_comienza}}</td>
                    <td>{{$reserva->reserva_termina}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</body>
</html>