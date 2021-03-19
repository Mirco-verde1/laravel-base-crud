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


    <form>

        <div class="form-group">
          <label for="brand">Brand</label>
          <input type="email" class="form-control" name="brand" aria-describedby="emailHelp" placeholder="Brand">
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="password" class="form-control" name="type" placeholder="Type">
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="password" class="form-control" name="nationality" placeholder="Nationality">
          </div>

          <div class="form-group">
            <label for="manufactoring-plant">Manufactoring Plant</label>
            <input type="password" class="form-control" name="manufactoring-plant" placeholder="Manufactoring Plant">
          </div>

          <div class="form-group">
            <label for="label-image">Label Image</label>
            <input type="password" class="form-control" name="label-image" placeholder="Label Image">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <input type="password" class="form-control" name="description" placeholder="Description">
          </div>

          <div class="form-group">
            <label for="price">Price</label>
            <input type="password" class="form-control" name="price" placeholder="Price">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>


</body>
</html>
