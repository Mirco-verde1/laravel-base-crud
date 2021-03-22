<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Brand</th>
            <th scope="col">Type</th>
            <th scope="col">Nationality</th>
            <th scope="col">Price</th>
            <th scope="col">Label</th>
            <th scope="col"><a href="beers/create">Add New Product</a></th>

          </tr>
        </thead>
        <tbody>


            {{-- Product description --}}

            @foreach ($beers as $item)


          <tr class="background-col">


            <td>{{$item-> brand}}</td>
            <td>{{$item-> type}}</td>
            <td>{{$item-> nationality}}</td>
            <td>{{$item-> price}}  €</td>
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



                       {{-- Delete products --}}

                        <form action="{{ route('beers.destroy',[$item->id]) }}" method="post">

                            @csrf
                            @method('DELETE')

                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    Delete
                                  </button>


                                  @include('modal')

                                        </div>
                                      </div>
                                    </div>
                                  </div>


                          </form>



            </td>




          </tr>

          @endforeach
        </tbody>
      </table>
</body>
</html>
