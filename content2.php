
<?php
	if($pageDir == 'profile'){
		$result = mysqli_query($con, "select * from profile where id='".$pageREQ."'");
		$profile= mysqli_fetch_array($result, MYSQLI_ASSOC);
	}
?>

<div class="row col-md-12 ">
	<div class="margin-bottom-5 col-md-8 no-padding padding-left-5 padding-right-5">
		<div class="panel panel-default">
			<div class="panel-heading no-padding margin-bottom-5"><h2><?php echo $profile['title']; ?></h2></div>
			<div class="panel-body" style="min-height:470px" >
				<?php echo $profile['content']; ?>
			</div>
		</div>
	</div>
	<div class="margin-bottom-5 col-md-4 padding-left-5 padding-right-5">
		<div class="panel panel-default margin-bottom-20">
			<div class="panel-heading no-padding margin-bottom-5"><h2>Produk</h2></div>
			<div class="panel-body">
				<div class="row margin-bottom-20">
					<a href="#">
					<img src="<?php echo $BASE_URL ;?>/images/galon.jpg" width="80" align="left" style="margin-left:5px; margin-right:5px; border-radius:5px; box-shadow: 2px 3px 5px #888888;" />
					<label>Suci Galon</label>
					<p style="font-size:0.8em">Kemasan air dengan kapasitas yang lebih besar</p>
					</a>
				</div>
				<div class="row margin-bottom-20">
					<a href="#">
					<img src="<?php echo $BASE_URL ;?>/images/galon.jpg" width="80" align="left" style="margin-left:5px; margin-right:5px; border-radius:5px; box-shadow: 2px 3px 5px #888888;" />
					<label>Suci Botol</label>
					<p style="font-size:0.8em">Kemasan air dengan kapasitas yang lebih praktis</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-bottom-5 col-md-4 padding-left-5 padding-right-5">
		<div class="panel panel-default">
			<div class="panel-heading no-padding margin-bottom-5"><h2>Agenda</h2></div>
			<div class="panel-body">
				<ul class="list-articles">
					<li><label><span class="glyphicon glyphicon-calendar"></span>&nbsp;Pengiriman 10 Box Ponpes Annuqayah<br/><i>01 Desember 2015</i></label></li>
					<li><label><span class="glyphicon glyphicon-calendar"></span>&nbsp;Promo produk di Ponpes Annuqayah<br/><i>26 November 2015</i></label></li>
					<li><label><span class="glyphicon glyphicon-calendar"></span>&nbsp;Promo produk di Ponpes Annuqayah<br/><i>26 November 2015</i></label></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="margin-bottom-5 col-md-8 padding-left-5 padding-right-5">
		<div class="panel panel-default margin-bottom-20">
			<div class="panel-heading no-padding margin-bottom-5"><h2>Berita Terbaru</h2></div>
			<div class="panel-body no-padding">
				<ul class="list-news">
						<?php for($i=1; $i<=2; $i++){ ?>
						<li class="col-md-6"><a href="#" class="row">
								<label>Workshop Ponpes Annuqayah</label><br/>
								<i>01 Desember 2015</i><br/>
								<img src="<?php echo $BASE_URL ;?>/images/news/1.jpg" />
							
								<p>
									Kementrian Riset, Teknologi dan Pendidikan Tinggi – Dirjen Pembelajaran Kemahasiswaan 
							Satker Direktorat Kelembagaan dan Kerjasama kembali menyelenggarakan International Student 
							Summit 2015. Pada penyelenggaraan ke-4 ini . . . . 
								</p>
							</a>
						</li>
						<?php } ?>
					</ul>
			</div>
			<div class="panel-footer no-padding" align="right" >
				<ul class="pagination margin-5" style="font-size:12px">
					<li><a href="#"><span class="glyphicon glyphicon-menu-left"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="row margin-bottom-20">
		<div class="col-md-4" align="center">
			<img src="<?php echo $BASE_URL ;?>/images/sni.png" style="width:100px" />
		</div>
		<div class="col-md-4" align="center">
			<img src="<?php echo $BASE_URL ;?>/images/label.png" style="width:100px" />
		</div>
		<div class="col-md-4" align="center">
			<img src="<?php echo $BASE_URL ;?>/images/halal.png" style="width:100px" />
		</div>
		</div>
		<div class="panel panel-default panel-news gallery " style="border:none;">
			<div class="panel-body form-inline" style="position:relative">
				<div style="overflow:auto; display:table-cell; overflow:auto; z-index:5">
				<?php for($i = 1; $i <=4; $i++){ ?>
				<a href="#" style="display:table-cell; padding-left:4px; padding-right:4px">
					<img src="<?php echo $BASE_URL ;?>/images/gallery/<?php echo $i; ?>.jpg" />
				</a>
				<?php } ?>
				</div>				
			</div>
			<div class="panel-footer no-padding" align="right" >
				<ul class="pagination margin-5" style="font-size:12px">
					<li><a href="#"><span class="glyphicon glyphicon-menu-left"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="margin-bottom-5 col-md-4 padding-left-5 padding-right-5">
		<div class="panel panel-default">
			<div class="panel-heading no-padding margin-bottom-5"><h2>Artikel</h2></div>
			<div class="panel-body">
				<ul class="list-articles">
					<li><a href="#"><label>Kebutuhan Air Minum Manusia dalam sehari</label></a></li>
					<li><a href="#"><label>Kebutuhan Air Minum Manusia dalam sehari</label></a></li>
					<li><a href="#"><label>Kebutuhan Air Minum Manusia dalam sehari</label></a></li>
					<li><a href="#"><label>Kebutuhan Air Minum Manusia dalam sehari</label></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="margin-bottom-5 col-md-4 padding-left-5 padding-right-5">
		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<a href="#"><img src="<?php echo $BASE_URL ;?>/images/facebook-icon.png" /></a>
				<a href="#"><img src="<?php echo $BASE_URL ;?>/images/bbm-icon.png" /></a>
			</div>
		</div>
	</div>
</div>