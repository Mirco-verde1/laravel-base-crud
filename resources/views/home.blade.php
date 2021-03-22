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








                        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
    Delete
</button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Product</h5>

        </div>

        <div class="modal-footer">
            <form action="{{ route('beers.destroy',[$item->id]) }}" method="post">

                @csrf
                @method('DELETE')
                      <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                         Are you sure?
                      </button>

              </form>
        </div>
      </div>
    </div>
  </div>
            </td>




          </tr>

          @endforeach
        </tbody>
      </table>
</body>
</html>
