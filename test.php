<br/>
	<br/>
	<!-- Trigger the modal with a button -->
	<button type="button" class="tombol_add" data-toggle="modal" data-target="#myModal">+ Add Stock Exchange</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Stock</h4>
			</div>
			<form action="process_add_saham.php" method="post">
				<div class="form-group">
					<label for="kode_saham">Kode Saham</label>
					<input type="text" name="kode_saham" class="form-control" id="kode_saham" value="<?php echo @$_SESSION['kode_saham']?>" aria-describedby="kode_saham" autocomplete="off">

				</div>
				<div class="form-group">
					<label for="nama_saham">Nama Saham</label>
					<input type="text" name="nama_saham" class="form-control" id="nama_saham" value="<?php echo @$_SESSION['nama_saham']?>" aria-describedby="nama_saham" autocomplete="off">

				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="harga" name="harga" class="form-control" id="harga" value="<?php echo @$_SESSION['harga']?>">
				</div>

                <button type="submit" class="tombol_add_modal">Add</button>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	<script>        
		$(document).ready(function(){
			$(".table").load("auto_update_saham.php");
			setInterval(function() {
				$(".table").load("auto_update_saham.php");
			},3000);
		});
	</script>

	<div class = "table"></div>