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

            <div class="product-container">
                <div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="{{$beer-> label_image}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$beer->name}}</h5>
                    <p class="card-text">{{$beer->description}}</p>
                    <a href="/beers" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>

      </table>





</body>
</html>
