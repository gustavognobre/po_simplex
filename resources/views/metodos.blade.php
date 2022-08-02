@extends('layouts.main')
@section('title', 'Algoritmo Simplex')
@section('content')

    <div class=" flex justify-center min-h-screen dark:bg-primary sm:items-center ">
        <div class="panel-body panel panel-default">
            <h3 align-center>Método</h3>
            <a href="/">
                <input type="button" value="Algébrico">
            </a>
            <a href="/parte1dual">
                <input type="button" value="Dual">
            </a>
        </div>

    </div>


@endsection
