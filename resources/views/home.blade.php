<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Brand</th>
            <th scope="col">Type</th>
            <th scope="col">Nationality</th>
            <th scope="col">Label</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($beers as $item)


          <tr>
            <th scope="row">{{$item-> id}}</th>
            <td>{{$item-> brand}}</td>
            <td>{{$item-> type}}</td>
            <td>{{$item-> nationality}}</td>
            <td><img src="{{$item-> label_image}}" width="150"></td>


          </tr>

          @endforeach
        </tbody>
      </table>
</body>
</html>
