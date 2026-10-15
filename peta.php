<!--
<script src="https://dibi.bnpb.go.id/assets/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/bootstrap/css/bootstrap.min.css"/>
-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!--
<script src="https://dibi.bnpb.go.id/assets/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/bootstrap/css/bootstrap.min.css"/>
-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/historical/countries/id-2011/id-all-2011.js"></script>

<style>
#container2 {
	height: 350px; 
	min-width: 310px; 
	max-width: 80%; 
	margin-left: 0 auto;
	position: relative;
}
#pilihan{
	position: absolute;
	float: right;
	z-index: 200;
}
.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}

</style>

<section class='content'>
	<div class='row'>
		<div class='col-xs-12'>
			<div class='box' style="padding:1px;">
				
				<div class="row">
					<div class="col-md-9">
						<div id="container" style="width:100%;height:100%;margin-left:15px;"></div>
					</div>
					<div class="col-md-3">
						<div class="form">
						<div class="card mb-2 bg-light" style="width:95%;height:125px;">
							<div class="card-header">
								<span>🔴 <b>Tahun</b></span>
								<div class="spinner spinner-border text-danger" role="status" id="spin1" aria-hidden="true">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
							<div class="card-body" id="pil_tahun" style="height:100%;overflow:auto;padding:5px;font-size:10pt;">
								<input name='fth' type='checkbox' value='2022' checked onclick="cek();">2022  <input name='fth' type='checkbox' value='2021'  onclick="cek();">2021  <input name='fth' type='checkbox' value='2020'  onclick="cek();">2020  <br><input name='fth' type='checkbox' value='2019'  onclick="cek();">2019  <input name='fth' type='checkbox' value='2018'  onclick="cek();">2018  <input name='fth' type='checkbox' value='2017'  onclick="cek();">2017</div>
						</div>
						<div class="card mb-2 bg-light" style="width:95%;height:125px;">
							<div class="card-header">
								<span>🔴 <b>Jenis bencana</b></span>
								<div class="spinner spinner-border text-danger" role="status" id="spin2" aria-hidden="true">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
							<div class="card-body" id="pil_wil" style="height:100%;overflow:auto;padding:5px;font-size:10pt;">
								<input name='fjn' type='checkbox' value='102' checked onclick="cek();">Tanah Longsor<br></div>
						</div>
						<div class="card mb-2 bg-light" style="width:95%;height:150px;">
							<div class="card-header">
								<span>🔴 <b>Karakteristik</b></span>
								<div class="spinner spinner-border text-danger" role="status" id="spin3" aria-hidden="true">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
							<div class="card-body" id="pil_kar" style="height:100%;overflow:auto;padding:5px;font-size:10pt;">
								<input name='fkr' type='radio' value='1' checked onclick="cek();">1. Jumlah Kejadian<br><input name='fkr' type='radio' value='2'  onclick="cek();">2. Korban Meninggal<br><input name='fkr' type='radio' value='3'  onclick="cek();">3. Korban Hilang<br><input name='fkr' type='radio' value='4'  onclick="cek();">4. Korban Terluka<br><input name='fkr' type='radio' value='5'  onclick="cek();">5. Korban Menderita<br><input name='fkr' type='radio' value='6'  onclick="cek();">6. Korban Mengungsi<br><input name='fkr' type='radio' value='7'  onclick="cek();">7. Rumah Rusak<br><input name='fkr' type='radio' value='8'  onclick="cek();">8. Fasilitas Pendidikan<br><input name='fkr' type='radio' value='9'  onclick="cek();">9. Fasilitas Kesehatan<br><input name='fkr' type='radio' value='10'  onclick="cek();">10. Fasilitas Peribadatan<br><input name='fkr' type='radio' value='11'  onclick="cek();">11. Kerugian (jt Rp.)<br>							</div>
						</div>
						</div>
					</div>
				</div>
				
				
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.5.0.js"></script>-->
<script>
	$('#spin1').hide();
	$('#spin2').hide();
	$('#spin3').hide();
$(document).ready(function(){
	function hitung(){
		var sth = $('#th').val();
		var sjn = $('#jn').val();
		var skr = $('#kr').val();
		alert(sth+','+sjn+','+skr);
	}
});

var data = [['id-ac',4.000000000],['id-su',76.000000000],['id-sb',35.000000000],['id-ja',5.000000000],['id-sl',236.000000000],['id-1024',86.000000000],['id-bb',37.000000000],['id-kr',1.000000000],['id-jr',193.000000000],['id-jt',1035.000000000],['id-ji',167.000000000],['id-nb',2.000000000],['id-kb',3.000000000],['id-kt',6.000000000],['id-ks',6.000000000],['id-ki',17.000000000],['id-kb',26.000000000],['id-sw',44.000000000],['id-st',60.000000000],['id-se',3.000000000],['id-sg',20.000000000],['id-pa',16.000000000]];
Highcharts.mapChart('container', {
    chart: {
        map: 'historical/countries/id-2011/id-all-2011'
    },

    title: {
        text: ''
    },

    subtitle: {
        text: ''
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
					alignValue: 'right',
					verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },
    credits: {
			text: 'PDSI, Pusdatinkom, BNPB',
			href: 'https://dibi.bnpb.go.id'
    },
		/*
		legend: {
			layout: 'vertical',
			align: 'left',
			verticalAlign: 'bottom'
		},
		*/
    series: [{
        data: data,
        name: 'Jumlah',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

</script>

<script>
	function coba(){
		var th = $('#th').val();
		var jn = $('#jn').val();
		var kr = $('#kr').val();
		var nil=null;
		$.ajax({
			url:'https://dibi.bnpb.go.id/peta2/get_data',
			data:{'th':th,'jn':jn,'kr':kr},
			type:'get',
			dataType: 'JSON',
			success: function(res){
        var len = res.length;
				var tpg = [];
				var tmp = [];
				for(var i=0;i<len;i++){
					tpg.push([res[i].key,res[i].val]);
				}
				Highcharts.charts[0].series[0].setData(tpg);
			}
		});
	}
	
	function cek(){
		var sth = $("input[name='fth']:checked").toArray().map(item=>item.value).join();
		var sjn = $("input[name='fjn']:checked").toArray().map(item=>item.value).join();
		var kr = $("input[name='fkr']:checked").val();
		var nil=null;
		//alert('sth '+sth+'sjn '+sjn+' kr '+kr);
		$('#spin1').show();
		$.ajax({
			url:'https://dibi.bnpb.go.id/peta2/get_data',
			data:{'sth':sth,'sjn':sjn,'kr':kr},
			type:'get',
			dataType: 'JSON',
			success: function(res){
				//console.log(res);
				
        var len = res.length;
				var tpg = [];
				var tmp = [];
				for(var i=0;i<len;i++){
					tpg.push([res[i].key,res[i].val]);
				}
				Highcharts.charts[0].series[0].setData(tpg);
				$('#spin1').hide();
			}
		});
	}
</script>
peta.php
9 KB