<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a87f95e59.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/sweet-alert.js"></script>
    <title>Mvc CRUD</title>
</head>
<body>

<div class="row justify-content-center align-items-center">
        <div class="container-xl col-xs-6 text-center ">
            <div class="container-fluid p6 b3 text-center">
                <h3>Lista de usuarios</h3>

                <a class="btn btn-outline-info" href="{{route('Usuarios.create')}}">Agregar</a>
                <a type="button" href="/" class="btn btn-danger ">Salir</a>


                <br>
            </div>
            <div class="container">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NinkName</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Tipo de usuario</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Usuarios as $resld_usr)
                        <tr>
                            <td>{{$resld_usr->id}}</td>
                            <td>{{$resld_usr->username}}</td>
                            <td>{{$resld_usr->nombre}}</td>
                            <td>{{$resld_usr->documento}}</td>
                            <td>{{$resld_usr->user_type}}</td>
                            <td>
                                <a type="button" href="{{route('Usuarios.edit',$resld_usr->id)}}" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{route('Usuarios.destroy',$resld_usr->id)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                       <button type="submit" class="btn btn-danger" ><i class="fa-solid fa-trash"  ></i></button>
                                    </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>   
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</body>
</html>