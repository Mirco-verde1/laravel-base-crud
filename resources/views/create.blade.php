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

    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
      @endif


    <form action="{{route('beers.store')}}" method="POST">



        @csrf
        @method('POST')

        <div class="form-group">
          <label for="brand">Brand</label>
          <input type="text" class="form-control" name="brand"  placeholder="Brand">
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" name="type" placeholder="Type">
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" name="nationality" placeholder="Nationality">
          </div>

          <div class="form-group">
            <label for="manufactoring_plant">Manufactoring Plant</label>
            <input type="text" class="form-control" name="manufactoring_plant" placeholder="Manufactoring Plant">
          </div>

          <div class="form-group">
            <label for="label-image">Label Image</label>
            <input type="text" class="form-control" name="label_image" placeholder="Label Image">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description">
          </div>

          <div class="form_group">
            <label for="price">Price</label>
            <input type="float" class="form-control" name="price" placeholder="Price">
          </div>

        <button type="submit" value="submit">Submit</button>

      </form>


</body>
</html>
