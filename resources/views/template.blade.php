<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale =1">		
		<!--css-->
		
		<link rel="stylesheet" href="{{ url(mix('assets/css/datatables.css')) }}">
		<link rel="stylesheet" href="{{ url(mix('assets/css/app.css')) }}">
		
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	
<body>
@include("cabecalho")
@include("menu")

<div class="rows mx-0">
    @yield("content")
</div>
	<script src="{{ url(mix('assets/js/jquery.js')) }}"></script>
	<script src="{{ url(mix('assets/js/diversos.js')) }}"></script>
	<script src="{{ url(mix('assets/js/js.js')) }}"></script>
	<script src="{{ url(mix('assets/js/funcao.js')) }}"></script>
	
	
	
	<!-- Graphs -->
    <script src="{{ url(mix('assets/js/chart.js/Chart.min.js')) }}"></script>
    <script src="{{ url(mix('assets/js/grafico.js')) }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
	  $( function() {
		$( "#tab" ).tabs();
	  } );
  </script>
</body>
	
</html>