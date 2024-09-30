@extends('plantilla')
@section('title', 'login')
    
@section('contenido')
    

    <div class="container mt-5">
        <div class="row mt-5 justify-content-center">

            <div class=" col-sm-12 col-md-12 col-lg-3 bg-white shadow p-5">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Inicio de sesión</h4>
                    </div>
                    <div class="col-12 ">
                        <form action="#">
                            <div class="form-group">
                                <label for="">Usuraio: </label>
                                <input type="text" class="form-control form-control-sm" name="" id="">
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="">Contraseña: </label>
                                <input type="password" class="form-control form-control-sm" name="" id="">
                            </div>



                            <div class="form-group mt-3">
                                <label for="">Tipo de usuario: </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="3">Operador</option>
                                    <option value="2">Jefe</option>
                                    <option value="1">Nominas</option>
                                  </select>   
                            </div>

                            <div class="form-group mt-4">
                                <button class="btn btn-success btn-sm w-100">Entrar</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection