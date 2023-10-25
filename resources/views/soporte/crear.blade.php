@extends('layout')
@section('contenido')
    <div class="col">
        <div class="card">
            <div class="card-header">
                Agregar soporte
            </div>
            <div class="card-body">

                <form method='post'>
                    @csrf
                    <!-- solicitante -->
                    <div class="form-group row">
                        <label for="solicitante" class="col-sm-2 col-form-label">solicitante</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="solicitante" name="solicitante"
                                value="{{ $modelo->solicitante }}">
                            @error('solicitante')
                                <br>
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- fin solicitante-->
                    <!-- descripcion -->
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">descripcion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                value="{{ $modelo->descripcion }}">
                            @error('descripcion')
                                <br>
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- fin descripcion-->
                    <!-- costo -->
                    <div class="form-group row">
                        <label for="costo" class="col-sm-2 col-form-label">costo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="costo" name="costo"
                                value="{{ $modelo->costo }}">
                            @error('costo')
                                <br>
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- fin costo-->
                    <!-- cantidad -->
                    <div class="form-group row">
                        <label for="cantidad" class="col-sm-2 col-form-label">cantidad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cantidad" name="cantidad"
                                value="{{ $modelo->cantidad }}">
                            @error('cantidad')
                                <br>
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- fin cantidad-->

                    <button type='submit' name="boton" class="btn" value="ingresar">Ingresar nueva solicitud</button>

                </form>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
