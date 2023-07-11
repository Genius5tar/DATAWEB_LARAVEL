
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a87f95e59.js" crossorigin="anonymous"></script>
    <title>Editar Usuario</title>
</head>

<body>
    <div class="row justify-content-center align-items-center ">

        <h1 class="text-center p3">Editar El Usuario: {{$usuarios->username}}</h1>
        <div class="container-xs col-4">
        <form action="{{route('Usuarios.update',$usuarios->id)}}" method="post" >
            @csrf
            @method('PUT')
                <fieldset disabled>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input type="number" class="form-control" name="id" maxlength="8" value="{{$usuarios->id}}">
                </div>
                </fieldset>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NickName</label>
                    <input type="text" class="form-control" name="username" maxlength="15" required value="{{$usuarios->username}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" maxlength="11" required value="{{$usuarios->nombre}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No. documento</label>
                    <input type="number" class="form-control" name="documento" required value="{{$usuarios->documento}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" maxlength="255" required value="{{$usuarios->password}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tipo de Usuario</label>
                    <input type="number" class="form-control" name="user_type" required value="{{$usuarios->user_type}}">
                </div>
                
                <div class="p-3 m-0 border-0 justify-content-space-eveling">
                <button type="submit"  class="btn btn-warning " >Editar</button>
                <a type="button"  href="{{route('Usuarios.index')}}" class="btn btn-secondary" >Volver</a>

                </div>
            </form>
        </div>


    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>