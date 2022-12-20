<li <?php echo ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'class="active"' : ''; ?>><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>

<li class="treeview">
    <a>
        <i class="fa fa-gear"></i> <span>Metode SAW</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu menu-open" style="display: none;">

        <li <?php echo $this->uri->segment(1) == 'saw/data' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('saw/data'); ?>"><i class="fa fa-child"></i> <span>Alternatif</span></a></li>
        <li <?php echo $this->uri->segment(1) == 'saw' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('saw'); ?>"><i class="fa fa fa-clipboard"></i> <span>Penilaian dan Hasil</span></a></li>
        <!-- <li <?php echo $this->uri->segment(1) == 'saw/saw_hasil' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('saw/saw_hasil'); ?>"><i class="fa fa fa-clipboard"></i> <span>Hasil</span></a></li> -->

    </ul>
</li>

<li class="treeview">
    <a>
        <i class="fa fa-gear"></i> <span>Metode WP</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu menu-open" style="display: none;">

        <li <?php echo ($this->uri->segment(1) == 'kriteria' || $this->uri->segment(1) == 'subkriteria') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('kriteria'); ?>"><i class="fa fa-bar-chart"></i> <span>Kriteria</span></a></li>
        <li <?php echo $this->uri->segment(1) == 'alternatif' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('alternatif'); ?>"><i class="fa fa-child"></i> <span>Alternatif</span></a></li>
        <li <?php echo $this->uri->segment(1) == 'penilaian' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('penilaian'); ?>"><i class="fa fa fa-clipboard"></i> <span>Penilaian</span></a></li>
        <li <?php echo $this->uri->segment(1) == 'hasil' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('hasil'); ?>"><i class="fa fa-list"></i> <span>Hasil</span></a></li>


        <!-- <li><a href="<?= base_url('admin') ?>"><i class="fa fa-user"></i> Tambah Admin</a></li>
        <li><a href="<?= base_url('user') ?>"><i class="fa fa-user"></i> Tambah User</a></li> -->
    </ul>
</li>

<li class="treeview">
    <a>
        <i class="fa fa-gear"></i> <span>Metode TOPSIS</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu menu-open" style="display: none;">

        <li <?php echo $this->uri->segment(1) == '#' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('#'); ?>"><i class="fa fa-child"></i> <span>Commingsoon</span></a></li>
        <li <?php echo $this->uri->segment(1) == '#' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('#'); ?>"><i class="fa fa fa-clipboard"></i> <span>Commingsoon</span></a></li>
        

    </ul>
</li>



<!-- <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li> -->