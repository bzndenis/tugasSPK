<li <?php echo ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('home_user'); ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>


<li <?php echo $this->uri->segment(1) == 'hasil' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('auth/user'); ?>"><i class="fa fa-list"></i> <span>Hasil</span></a></li>

<li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>