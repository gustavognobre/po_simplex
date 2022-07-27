@extends('layouts.main')
@section('title', 'Algoritmo Simplex')
@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Algoritmo simplex <small>({{ $variaveis }} variaveis e {{ $restricoes }} restrições)</small></h3>
                <br>
                <form method="post" action="{{ route('simplex') }}" autocomplete="off">
                    @csrf
                    <div style=" width:20%" class="form-group">
                        <label>Objetivo:</label>
                        <select name="objetivo" class="form-control">
                            <option value="max">Maximizar</option>
                            <option value="min">Minimizar</option>
                        </select>
                    </div>
                    <input type="hidden" name="variavel" value="{{ $variaveis }}">
                    <input type="hidden" name="restricao" value="{{ $restricoes }}">
                    <label>Função</label>
                    <div class="form-inline" style="padding: 2px;">
                        @for ($i = 0; $i < $variaveis; $i++)
                            <div class="form-group">
                                <input name="funcao[]" type="number" step="any" class="form-control">
                                <label>X{{ $i + 1 }}</label>
                                @if ($i != $variaveis - 1)
                                    {{ '+' }}
                                @endif

                            </div>
                        @endfor
                    </div>

                    <br>
                    <label>Restrições</label>

                    @for ($j = 0; $j < $restricoes; $j++)
                        <div class="form-inline" style="padding: 10px;">

                            @for ($i = 0; $i < $variaveis; $i++)
                                <div class="form-group">
                                    <input type="number" step="any" name="restricao{{ $j }}[]"
                                        class="form-control">
                                    <label>X{{ $i + 1 }}</label>
                                    @if ($i != $variaveis - 1)
                                        {{ '+' }}
                                    @endif

                                </div>
                            @endfor

                            <select name="tipo{{ $j }}" class="form-control">
                                <option value="{{ 0 }}">=</option>
                                <option selected value="{{ 1 }}"><= </option>
                                <option value="{{ 2 }}">>=</option>
                            </select>
                            <div class="form-group">
                                <input name="restricao{{ $j }}[]" type="number" step="any"
                                    class="form-control">

                            </div>

                        </div>
                    @endfor

                    <br>
                    <button type="submit" class="btn btn-default">Calcular</button>
                </form>
            </div>
        </div>
    </div>
@endsection
