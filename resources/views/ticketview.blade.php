<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment details</title>

            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
            <link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css')}}" media="all"/>

</head> 
<body class="bg-image"
style="background-image: url('https://www.thehindubusinessline.com/economy/logistics/r3l07y/article26289997.ece/ALTERNATES/LANDSCAPE_1200/TRIVANDRUMAIRPORT');
      height: 100vh">>
<div class="container text-cenetr py-5">
<form action="{{url('userhomepage')}}" method="get" class="form">

@csrf
<table class="bg-white">
<tr>
<td>
Ticket No:</td>
<td><input type="text" value="{{$id}}" name="tno"></td>
</tr>
<tr>
<td>
     Flight id:</td>
     <td><input type="text" value="{{$flight['fid']}}" name="flid"></td>
    </tr>
    <td>
    Flight Name:</td>
    <td><input type="text" value="{{$flight->airlinename}}" name="fname"></td>
    </tr>
    <tr>
    <td>
    Departure:</td>
    <td><input type="text" value="{{$flight->departure}}" name="departure"></td>
    </tr>
    <tr>
    <td>
    Arrival:</td>
    <td><input type="text" value="{{$flight->arrival}}" name="arrival"></td>
    </tr>
    <tr>
    <td>
    Date:</td>
    <td><input type="text" value="{{$flight->date}}" name="date"></td>
  
   </tr>
   <td>

    Departure time:</td>
    <td><input type="text" value="{{$flight->dtime}}" name="dtime"></td>
    </tr>
    <tr>
    <td>
    Arrival Time:</td>
    <td><input type="text" value="{{$flight->atime}}" name="atime"></td>
    </tr>
    <tr>
    <td>
    Name of the passenger:</td>
    <td><input type="text" value="{{$user->name}}" name="name"></td>
    </tr>
    <tr>
    <td>
    Age:</td>
    <td><input type="text" value="{{$user->age}}" name="age"></td><br><br>
    </tr>
    <tr>
    <td>

    Seat:</td>
    <td><input type="text" value="{{$seat}}" name="seat"></td>
    </tr><br><br>
    </table>

   
        <br><br>
<input type="submit" name="submit" value="Go to your home page">

</form>
</div>
</body>
</html>
   