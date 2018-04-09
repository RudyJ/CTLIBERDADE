@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Relatório Financeiro</h1>
@stop
@section('content')


<div class="row">

	<div class="col-md-4">
		<div class="box">
		  	<div class="info-box bg-yellow">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon"><i class="fa fa-file-o"></i></span>
				  <div class="info-box-content">
				      <span class="info-box-text">Abertos</span>
				      <span class="info-box-number">93,139</span>
		              <div class="progress">
		                <div class="progress-bar" style="width: 70%"></div>
		              </div>
	                  <span class="progress-description">
	                    70% abertos
	                  </span>
				  </div>
				  <!-- /.info-box-content -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
		  	<div class="info-box bg-green">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>
				  <div class="info-box-content">
				      <span class="info-box-text">Aguardando</span>
				      <span class="info-box-number">93,139</span>
		              <div class="progress">
		                <div class="progress-bar" style="width: 70%"></div>
		              </div>
	                  <span class="progress-description">
	                    70% aguardando compensação
	                  </span>
				  </div>
				  <!-- /.info-box-content -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
		  	<div class="info-box bg-aqua">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
				  <div class="info-box-content">
				      <span class="info-box-text">Pago</span>
				      <span class="info-box-number">93,139</span>
		              <div class="progress">
		                <div class="progress-bar" style="width: 70%"></div>
		              </div>
		              <span class="progress-description">
		                70% já foram pagos
		              </span>
	              </div>
				  <!-- /.info-box-content -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
		  	<div class="info-box bg-yellow">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon"><i class="fa fa-file-o"></i></span>
				  <div class="info-box-content">
				      <span class="info-box-text">À Receber</span>
				      <span class="info-box-number">R$ 1.357.640,37</span>
				  </div>
				  <!-- /.info-box-content -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
		  	<div class="info-box bg-green">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>
				  <div class="info-box-content">
				      <span class="info-box-text">Compensando</span>
				      <span class="info-box-number">R$ 250.000,00</span>
				  </div>
				  <!-- /.info-box-content -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
		  	<div class="info-box bg-aqua">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
				  <div class="info-box-content">
				      <span class="info-box-text">Recebido</span>
				      <span class="info-box-number">R$ 93.139,00</span>
	              </div>
				  <!-- /.info-box-content -->
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-12">

		<h1>Caixa</h1>
		<canvas id="lineChart" style="height:150px"></canvas>

	</div>

	<div class="col-md-12">
			
		<h1>Crescimento</h1>
		<canvas id="barChart" style="height:230px"></canvas>

	</div>
</div>


@section('js')


<script>
jQuery.noConflict();
(function( $ ) {
  $(function() {
    
     /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- LINE CHART -
    //--------------


	var ctx2 = $('#lineChart').get(0).getContext('2d');

	var myLineChart = new Chart(ctx2, {
	    type: 'line',
	    data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
				{
					label: "My First dataset",
					fillColor: "rgba(220,220,220,0.2)",
					strokeColor: "rgba(220,220,220,1)",
					pointColor: "rgba(220,220,220,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(220,220,220,1)",
					data: [65, 59, 80, 81, 56, 55, 40]
				},
				{
					label: "My Second dataset",
					fillColor: "rgba(151,187,205,0.2)",
					strokeColor: "rgba(151,187,205,1)",
					pointColor: "rgba(151,187,205,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(151,187,205,1)",
					data: [28, 48, 40, 19, 86, 27, 90]
				},
				{
					label: "My Third dataset",
					fillColor: "rgba(151,187,205,0.2)",
					strokeColor: "rgba(151,187,205,1)",
					pointColor: "rgba(151,187,205,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(151,187,205,1)",
					data: [28, 48, 40, 19, 86, 27, 90]
				}
			]
		},
	    options: {
	        scales: {
	            yAxes: [{
	                stacked: true
	            }]
	        }
	    }
	});

    //-------------
    //- BAR CHART -
    //-------------
    
	var ctx4 = document.getElementById("barChart").getContext('2d');
	var myChart = new Chart(ctx4, {
	    type: 'bar',
	    data: {
	        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
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
	                'rgba(255,99,132,1)',
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
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});


  });
})(jQuery);
</script>

@stop

@stop