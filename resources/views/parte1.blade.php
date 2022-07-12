@extends('layouts.main')
@section('title', 'Algoritmo Simplex')
@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
                    <h5 align='center'>Método</h5>
                    <br>

                    <button type="submit" class="btn btn-default col-auto">Algébrico</button>
                </form>
            </div>
        </div>
    </div>
@endsection
