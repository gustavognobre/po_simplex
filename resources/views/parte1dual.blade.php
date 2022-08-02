@extends('layouts.main')
@section('title', 'Algoritmo Simplex')
@section('content')
    <div class=" flex justify-center min-h-screen dark:bg-primary sm:items-center ">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Algoritmo simplex</h3>
                <br>
                <form method="post" action="{{ route('parte2') }}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label>Quantidade variáveis de decisão:</label>
                        <input type="number" class="form-control" name="variavel">
                        {{ $errors->has('variavel') ? $errors->first('variavel') : '' }}
                    </div>
                    <div class="form-group">
                        <label>Quantidade restrições:</label>
                        <input type="number" class="form-control" name="restricao">
                        {{ $errors->has('restricao') ? $errors->first('restricao') : '' }}
                    </div>
                    <h5 align='center'></h5>
                    <br>

                    <div <i class="fa fa-align-center" aria-hidden="true"></i>
                        <button type="submit" class="btn btn-default col-auto">Algébrico</button>
                        <button type="submit" class="btn btn-default col-auto">Plotagem</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
