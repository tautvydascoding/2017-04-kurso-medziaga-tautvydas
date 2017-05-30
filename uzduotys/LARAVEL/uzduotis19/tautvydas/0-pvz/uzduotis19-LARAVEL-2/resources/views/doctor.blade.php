<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kieciausias daktaras</title>
  </head>
  <body>

        @foreach($user->myPacients as $pct)
           Pacient: {{ $pct->name }}  <br>
        @endforeach
  </body>
</html>
