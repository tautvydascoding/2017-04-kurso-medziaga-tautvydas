<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kieciausias daktaras</title>
  </head>
  <body>
        @if($user->id == 1)
        asdf
        @endif

        @foreach($user->myPacients as $pct)
           {{ $pct->name }}  <br>
        @endforeach
  </body>
</html>
