<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Page d'inscription</title>
</head>
<body>
    @if($errors ->any())
        <div>
            <div>Une erreur se produite </div>
                <ul>
                    @foreach ($errors ->all() as $error)
                        <li>{{$error}}</li>
                        
                    @endforeach
                </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Formulaire d'Inscription
              </div>
              <div class="card-body">
                <form action="/register"  method="POST" >
                    @csrf
                
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}"  autofocus autocomplete="name">
                    </div>
                
                    <div class="form-group">
                        <label for="phone">Numéro de téléphone</label>
                        <input id="phone" type="text" class="form-control" name="phone" value="{{old('phone')}}" >
                    </div>
                
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" class="form-control" name="password" value="{{old('password')}}"  autocomplete="new-password">
                    </div>
                
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{old('passwprdConfirmation')}}" autocomplete="new-password">
                    </div>
                
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
    </div>
        </div>
            </div>
                </div>
                    </div>
</body>
</html>