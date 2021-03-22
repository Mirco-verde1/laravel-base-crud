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

    {{-- inizio form con annessa validazione campi --}}




      <form class="needs-validation" action="{{route('beers.store')}}" method="post" novalidate>



        @csrf
        @method('POST')

        <div class="form-group">
          <label for="brand">Brand</label>
          <input type="text" class="form-control {{$errors->has('brand') ? 'is-invalid' : ''}}" name="brand"  placeholder="Brand" >
          <div class="invalid-feedback">
              {{$errors->first('brand')}}
          </div>
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" name="type"  placeholder="Type" >
          <div class="invalid-feedback">
              {{$errors->first('type')}}
          </div>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control {{$errors->has('nationality') ? 'is-invalid' : ''}}" name="nationality" placeholder="Nationality">
            <div class="invalid-feedback">
                {{$errors->first('nationality')}}
            </div>
          </div>

          <div class="form-group">
            <label for="manufactoring_plant">Manufactoring Plant</label>
            <input type="text" class="form-control {{$errors->has('manufactoring_plant') ? 'is-invalid' : ''}}" name="manufactoring_plant" placeholder="Manufactoring Plant" >
            <div class="invalid-feedback">
                {{$errors->first('manufactoring_plant')}}
            </div>
          </div>

          <div class="form-group">
            <label for="label-image">Label Image</label>
            <input type="text" class="form-control {{$errors->has('label_image') ? 'is-invalid' : ''}}" name="label_image" placeholder="Label Image" >
            <div class="invalid-feedback">
                {{$errors->first('label_image')}}
            </div>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" name="description" placeholder="Description" >
            <div class="invalid-feedback">
                {{$errors->first('description')}}
            </div>
          </div>

          <div class="form_group">
            <label for="price">Price</label>
            <input type="float" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" name="price" placeholder="Price" >
            <div class="invalid-feedback">
                {{$errors->first('price')}}
            </div>
          </div>

        <button type="submit" value="submit">Add New</button>

      </form>


</body>
</html>
