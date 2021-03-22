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

    {{-- inizio form con annessa validazione campi
        per l'update dei dati che poi verranno salvati nel db--}}




      <form class="needs-validation" action="{{route('beers.update',compact('beer'))}}" method="post" novalidate>



        @csrf
        @method('PUT')


        <div class="form-group">

          <label for="brand">Brand</label>
          <input type="text" class="form-control {{$errors->has('brand') ? 'is-invalid' : ''}}"
          name="brand"  placeholder="Brand" value="{{$beer->brand}}" >

          <div class="invalid-feedback">
              {{$errors->first('brand')}}  {{-- messaggio errore --}}
          </div>
        </div>


        <div class="form-group">
          <label for="type">Type</label>

          <input type="text" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}"
           name="type"  placeholder="Type" value="{{$beer->type}}"  >

          <div class="invalid-feedback">
              {{$errors->first('type')}}
          </div>
        </div>


        <div class="form-group">
            <label for="nationality">Nationality</label>

            <input type="text" class="form-control {{$errors->has('nationality') ? 'is-invalid' : ''}}"
            name="nationality" placeholder="Nationality" value="{{$beer->nationality}}" >

            <div class="invalid-feedback">
                {{$errors->first('nationality')}}
            </div>
          </div>


          <div class="form-group">
            <label for="manufactoring_plant">Manufactoring Plant</label>

            <input type="text" class="form-control {{$errors->has('manufactoring_plant') ? 'is-invalid' : ''}}"
            name="manufactoring_plant" placeholder="Manufactoring Plant" value="{{$beer->manufactoring_plant}}" >

            <div class="invalid-feedback">
                {{$errors->first('manufactoring_plant')}}
            </div>
          </div>


          <div class="form-group">
            <label for="label-image">Label Image</label>

            <input type="text" class="form-control {{$errors->has('label_image') ? 'is-invalid' : ''}}"
             name="label_image" placeholder="Label Image" value="{{$beer->label_image}}" >

            <div class="invalid-feedback">
                {{$errors->first('label_image')}}
            </div>
          </div>


          <div class="form-group">
            <label for="description">Description</label>

            <input type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
            name="description" placeholder="Description" value="{{$beer->description}}" >

            <div class="invalid-feedback">
                {{$errors->first('description')}}
            </div>
          </div>


          <div class="form_group">
            <label for="price">Price</label>

            <input type="float" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}"
            name="price" placeholder="Price" value="{{$beer->price}}" >

            <div class="invalid-feedback">
                {{$errors->first('price')}}
            </div>
          </div>

        <button type="submit" value="submit">Submit</button>

      </form>


</body>
</html>
