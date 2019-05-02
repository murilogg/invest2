@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-14">
        <div class="card border border-primary">
            <div class="card-header" style="background-color: skyblue"><b><h5>Tela Principal</h5></b></div>
                <div class="card-deck">
                    <div class="card border border-white">
                        <div class="card-body">
                            <div class="card-subtitle">
                                <label class="card-title"><b>Histórico de Compras</b></label>
                            </div>
                        
                            <?php echo $nomeEmpresa; ?>

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                            var analytics = <?php echo $nomeEmpresa ?>
                            //echo json_encode(...$arr);

                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable(analytics);
                                var chart = new google.visualization.PieChart(document.getElementById('compra'));
            
                                chart.draw(data);
                            }
                            </script>                            

                            <div id="compra" style="width: 515px; height: 350px;"></div>
                        </div>
                    </div>
                    <div class="card border border-white">
                        <div class="card-body">
                            <div class="card-subtitle">
                                <label class="card-title"><b>Histórico de Vendas</b></label>
                            </div>
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

                                    var chart = new google.visualization.PieChart(document.getElementById('venda'));

                                    chart.draw(data, options);
                                }
                            </script>

                            <div id="venda" style="width: 515px; height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection