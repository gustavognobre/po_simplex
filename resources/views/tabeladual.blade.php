@extends('layouts.main')
@section('title', 'Algoritmo Simplex')
@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="panel panel-default">
            <div class="panel-body">

                <div>
                    @if ($simplex['objetivo'] == 'min')
                        <p>Minimizar</p>
                    @else
                        <p>Maximizar</p>
                    @endif
                </div>

                <div class="funcao">
                    <p>Função:</p>
                    Z
                    @foreach ($simplex['funcao'] as $key => $item)
                        @if ($item != 0)
                            @if ($item >= 0)
                                +
                            @endif
                            {{ $item }}{{ $key }}
                        @endif
                    @endforeach
                    = 0
                </div>
                <br>

                <div class="restricao">
                    <p>Restrições:</p>

                    @for ($i = 0; $i < $simplex['restricao']; $i++)
                        @foreach ($simplex['restricao' . ($i + 1)] as $key => $item)
                            @if ($key != 'r' . ($i + 1))
                                @if ($item >= 0)
                                    +
                                @endif
                                {{ $item }}{{ $key }}
                            @else
                                = {{ $item }}
                            @endif
                        @endforeach
                        <br>
                    @endfor
                </div>

                <br>
                <a href="{{ route('metodos') }}" class="btn btn-default">Continuar</a>

            </div>
        </div>
    </div>
@endsection
