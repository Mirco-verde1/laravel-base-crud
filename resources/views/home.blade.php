<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
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
            <td><a href="/beers/{{$item->id}}"><img src="{{$item-> label_image}}" width="200"> </a>

                <a href="/beers/{{$item->id}}">
                    <button type="submit" class="btn btn-info">
                        INFO
                    </button>
                    </a>


                    <a href="{{ route('beers.edit',[ $item->id]) }}">
                        <button type="submit" class="btn btn-info">
                            EDIT
                        </button>
                        </a>

                    <form action="{{ route('beers.destroy',[$item->id]) }}" method="post">

                            <button type="submit" class="btn btn-danger">
                               DELETE
                            </button>

                    </form>
            </td>




          </tr>

          @endforeach
        </tbody>
      </table>
</body>
</html>
