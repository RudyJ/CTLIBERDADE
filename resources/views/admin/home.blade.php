@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Principal</h1>
@stop

@section('content')



<div class="row">

<div class="col-md-6">
	<div class="box">
	  	<div class="info-box bg-yellow">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
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
<div class="col-md-6">
	<div class="box">
	  	<div class="info-box bg-yellow">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
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
<div class="col-md-6">
	<div class="box">
	  	<div class="info-box bg-yellow">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
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
<div class="col-md-6">
	<div class="box">
	  	<div class="info-box bg-yellow">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
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


<div class="col-md-6">
	
	<div class="box box-warning">
		
		<div class="box-body box-profile">

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Avaliação</b> <a class="pull-right">10</a>
                </li>
                <li class="list-group-item">
                  <b>Tickets respondidos</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Tickets finalizados</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Categoria(s)</b>
                  <a class="pull-right"><span class="label label-info">Financeiro</span></a>
                  <a class="pull-right"><span class="label label-info">Jurídico</span></a>
                </li>
                <li class="list-group-item">
                  <b>Status</b> <a class="pull-right"><span class="label label-info">Ativo</span></a>
                </li>
              </ul>

		</div>

	</div>
</div>
<div class="col-md-6">
	
	<div class="box box-warning">
		
		<div class="box-body box-profile">
              
          <h3 class="box-title">Area Chart</h3>
          
          <div class="chart">
            <canvas id="lineChart1" style="height:250px"></canvas>
          </div>

		</div>

	</div>
</div>
<div class="col-md-12">
	
	<div class="box box-warning">
		
		<div class="box-body box-profile">

            <h3 class="box-title">Line Chart</h3>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>

		</div>

	</div>
</div>
<div class="col-md-6">
	
	<div class="box box-warning">
		
		<div class="box-body box-profile">
			<h3 class="box-title">Donut Chart</h3>			
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
		</div>

	</div>
</div>
<div class="col-md-6">
	
	<div class="box box-warning">
		
		<div class="box-body box-profile">

            <h3 class="box-title">Bar Chart</h3>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>

		</div>

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

    //--------------
    //- AREA CHART -
    //--------------

	var ctx1 = $('#lineChart1').get(0).getContext('2d');

	var myLineChart1 = new Chart(ctx1, {
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
    //- PIE CHART -
    //-------------


	var ctx3 = $('#pieChart').get(0).getContext('2d');
    
	var PieData = {
	    datasets: [{
	        data: [10, 20, 30],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ],
            borderWidth : 2,
            borderColor : "rgba(0, 0, 0, .7)"

	    }],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    labels: [
	        'Red',
	        'Yellow',
	        'Blue'
	    ]
	};

	var pieOptions = {
		segmentShowStroke : true,
		segmentStrokeColor : "#fff",
		segmentStrokeWidth : 2,
		percentageInnerCutout : 50,
		animationSteps : 100,
		animationEasing : "easeOutBounce",
		animateRotate : true,
		animateScale : false,
		legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"><%if(segments[i].label){%><%=segments[i].label%><%}%></span></li><%}%></ul>"
	};

	var myPieChart = new Chart(ctx3, {
		type : 'pie',
		data : PieData,
		options : pieOptions
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