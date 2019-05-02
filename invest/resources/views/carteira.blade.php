@extends('layouts.app')

@section('content')

<div class="jumbotron col-md-10 offset-md-1 bg-sucess border border-primary">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
                    
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Work',     11],
                        ['Eat',      2],
                        ['Commute',  2],
                        ['Watch TV', 2],
                        ['Sleep',    7]
                    ]);
                    
                    var options = {
                        title: 'My Daily Activities'
                    };
                    
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    
                    chart.draw(data, options);
                    }
                    </script>

                    <div id="piechart" style="width: 400px; height: 200px;"></div>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title"><b>Fazer Transações</b></h5>
                    <p class="card=text">
                        Aqui você realiza o investimento ou resgate,<br>
                        Lembre-se de primeiro cadastrar as empresas.
                    </p>
                    <a href="/cotacoes" class="btn btn-primary">Comprar</a>
                    <a href="/carteira" class="btn btn-primary">Vender</a>
                </div>
            </div>            
        </div>
</div>



@endsection