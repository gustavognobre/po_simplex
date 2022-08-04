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
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['0', '1', '2', '3', '4', '5'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
@endsection
