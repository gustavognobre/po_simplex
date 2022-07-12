@extends('layouts.main')
@section('title', 'Algoritmo Simplex')
@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="panel panel-default">
            <div class="panel-body">
                <h5>Interação {{ $simplex['interacao'] }}</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>z</th>
                            @for ($i = 0; $i < $simplex['variavel'] + $simplex['restricao']; $i++)
                                <th>x{{ $i + 1 }}</th>
                            @endfor
                            <th>b</th>
                        </tr>
                    </thead>
                    <tbody>

                        @for ($i = 0; $i < $simplex['restricao']; $i++)
                            <tr>
                                <td>0</td>
                                @foreach ($simplex['restricao' . ($i + 1)] as $key => $item)
                                    @if ($simplex['restricao' . ($i + 1)] == $simplex[$linha_pivo])
                                        @if ($key == $var)
                                            <td class="success">{{ round($item, 4) }}</td>
                                        @else
                                            <td>{{ round($item, 4) }}</td>
                                        @endif
                                    @else
                                        <td>{{ round($item, 4) }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endfor

                        <tr>
                            <td>1</td>
                            @foreach ($simplex['funcao'] as $key => $item)
                                @if (isset($simplex['z']) && $key == 'rz')
                                    <td class="info">{{ round($item, 4) }}</td>
                                @else
                                    <td>{{ round($item, 4) }}</td>
                                @endif
                            @endforeach
                        </tr>

                        @if (!empty($simplex['w']) && $simplex['w']['rw'] != 0)
                            <tr>
                                <td>1</td>
                                @foreach ($simplex['w'] as $key => $item)
                                    @if (isset($simplex['z']) && $key == 'rz')
                                        <td class="info">{{ round($item, 4) }}</td>
                                    @else
                                        <td>{{ round($item, 4) }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endif
                    </tbody>
                </table>

                <br>
                @if (isset($simplex['z']))
                    <p>A solução ótima é Z =

                        @if ($simplex['objetivo'] == 'max')
                            {{ round($simplex['z'], 4) }}
                        @else
                            {{-- {{round($simplex['z'] * -1,4)}} --}}
                            {{ round($simplex['z'], 4) }}
                        @endif
                    </p>
                    <a href="{{ route('inicio') }}" class="btn btn-default">Novo Problema</a>
                @else
                    <p>Pivo = {{ $simplex[$linha_pivo][$var] }}</p>
                    <a href="{{ route('tabela') }}" class="btn btn-default">Continuar</a>
                @endif
                {{-- <p>Menor valor de Z = {{$min}}</p>
            <p>Coluna = {{$var}}</p>
            <p>Pivo = {{$simplex[$linha_pivo][$var]}}</p> --}}
            </div>
        </div>
    </div>
@endsection
