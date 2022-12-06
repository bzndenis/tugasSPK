<?php $this->load->view('template/header'); ?>

<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Ubah Password</h3>
	</div>
	<form class="form-horizontal" action="<?php echo site_url('admin/password'); ?>" method="post">
		<div class="box-body">

            <?php echo validation_errors('<div class="alert bg-danger" role="alert">', '</div>'); ?>

            <?php echo $this->session->flashdata('sukses'); ?>

			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Password Lama</label>
				<div class="col-sm-4">
					<input name="password" id="password" class="form-control" required autofocus type="password" value="">
				</div>
			</div>
			<div class="form-group">
				<label for="password_baru" class="col-sm-2 control-label">Password Baru</label>
				<div class="col-sm-4">
					<input name="password_baru" id="password_baru" class="form-control" required type="password" value="">
				</div>
			</div>
			<div class="form-group">
				<label for="ulangi" class="col-sm-2 control-label">Ulangi Password Baru</label>
				<div class="col-sm-4">
					<input name="ulangi" id="ulangi" class="form-control" required type="password" value="">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="text-center col-sm-6">
				<button type="submit" name="save" class="btn btn-success">Simpan</button>
				<a href="<?php echo site_url('admin'); ?>" class="btn btn-danger">Batal</a>
			</div>
		</div>
	</form>
</div>

<?php $this->load->view('template/footer'); ?>