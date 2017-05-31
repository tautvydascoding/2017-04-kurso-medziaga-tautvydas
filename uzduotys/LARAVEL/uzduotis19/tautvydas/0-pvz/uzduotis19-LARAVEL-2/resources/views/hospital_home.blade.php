<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hospital  Carlos S4320 Page </title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
  </head>
  <body>
    <h1 class="center">Hospital : Carlos S4320</h1>
    <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

    <div class="doctors">
    </div>


      <!-- @foreach($users as $user)
         Doctor name: <a href='doctor/{{$user->id}}'> {{$user->name}}</a>  <br>
      @endforeach -->

    <div id = 'msg'>Click button to get all doctors</div> 

    <div class="">
       <button onClick="getDoctors()">Show Doctors</button>
    </div>

  </body>


<script>
      function getDoctors(){
         $.ajax({
            type:'GET',
            url:'getdoctors',
            data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    console.log(data.doctors[0].name);
                   data.doctors.forEach(function(item){
                     $('.doctors').append(item.name + "<br>");
                   });
                   $('#msg').html('');
            }
         });
      }
</script>


</html>
