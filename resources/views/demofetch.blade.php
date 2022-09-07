
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="text-center"> Hello </h1>

<div class="container">
    <div class="row">
@foreach($data as $kirit)

        <div class="col-lg-3 mt-5">
<li> <img src="{{Storage::url($kirit->image)}}" alt="" style="width:100%"></li>
<li> {{$kirit['name']}}</li>
<li> {{$kirit['artist']}}</li>
<li> {{$kirit['price']}}</li>
</div>
@endforeach

</div>
</div>
</body>
</html>

