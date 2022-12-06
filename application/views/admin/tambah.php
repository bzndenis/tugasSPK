<?php $this->load->view('template/header'); ?>

<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data Admin</h3>
	</div>
	<form class="form-horizontal" action="<?php echo site_url('admin/tambah'); ?>" method="post" >
		<div class="box-body">

            <?php echo validation_errors('<div class="alert bg-danger" role="alert">', '</div>'); ?>

			<div class="form-group">
				<label for="username" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-4">
					<input name="username" id="username" class="form-control" required type="text" value="<?php echo set_value('username'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-4">
					<input name="password" id="password" required type="password" class="form-control" value="<?php echo set_value('password'); ?>">
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