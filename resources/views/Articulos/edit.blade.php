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
    <title>Editar Productos</title>
</head>

<body>
    <div class="row justify-content-center align-items-center ">

        <h1 class="text-center p3">Editar articulo Cod. {{$articulo->cod}}</h1>
        <div class="container-xs col-4">

            <form action="{{route('Articulos.update',$articulo->id)}}" method="post" >
            @csrf
            @method('PUT')
                <fieldset disabled>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cod</label>
                    <input type="number" class="form-control" name="codigo" maxlength="8" value="{{$articulo->cod}}">
                </div>
                </fieldset>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cantidad a Ingresar</label>
                    <input type="number" class="form-control" name="cant" maxlength="10" required value="{{$articulo->cantidad}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" maxlength="25" required value="{{$articulo->nombre}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="marca" required value="{{$articulo->marca}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fabricante</label>
                    <input type="text" class="form-control" name="fabricante" required value="{{$articulo->fabricante}}">
                </div>
                <label class="form-label">Precio</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" name="p_venta" required value="{{$articulo->p_venta}}"
                        aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                <label for="exampleInputEmail1" class="form-label">Precio Proveedor</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" name="p_compra" required value="{{$articulo->p_compra}}"
                        aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                <div class="p-3 m-0 border-0 justify-content-space-eveling">
                <button type="submit"  class="btn btn-warning " >Editar</button>
                <a type="button"  href="{{route('Articulos.index')}}" class="btn btn-secondary" >Volver</a>
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