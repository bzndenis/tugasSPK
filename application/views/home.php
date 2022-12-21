<?php $this->load->view('template/header'); ?>

<div class="box box-info">
    <div class="container">

        <div class="row justify-content-md-center ">
            <div class="box-header with-border">
                <div class="col-lg-5"></div>
                <h3 class="box-title"><b> Selamat Datang </b></h3> <br>
                <div class="col-lg-5"></div>
                <small>
                    <script type='text/javascript'>
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        //
                    </script>
                </small>

            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header"></div>
                <!-- Small boxes (Stat box) -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->

                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <p>Metode Simple Additive Weighting (SAW)</p><br><br>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <a href="saw" class="small-box-footer">Penilaian <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->

                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <p>Weighted Product (WP)</p><br><br>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <a href="hasil" class="small-box-footer">Penilaian <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-xs-6">
                                    <!-- small box -->

                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <p>Technique for Order. Preference by Similarity to Ideal Solution (TOPSIS)</p><br>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-list-alt"></i>
                                        </div>
                                        <a href="topsis" class="small-box-footer">Penilaian <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Kelompok</h3>
    <!-- Small boxes (Stat box) -->
    <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->

                            <div class="small-box bg-blue">
                                <div class="inner center">
                                    <p >Denis Akbar</p><br><br>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-male"></i>
                                </div>
                                <a href="#" class="small-box-footer">NPM (<b>201206040793</b>)</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->

                                <div class="small-box bg-blue">
                                <div class="inner center">
                                    <p >Isti Juliana Putri</p><br><br>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-female"></i>
                                </div>
                                <a href="#" class="small-box-footer">NPM (<b>191106041508</b>)</a>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-xs-6">
                                    <!-- small box -->

                                    <div class="small-box bg-blue">
                                <div class="inner center">
                                    <p >Refi Arizal Maryadi</p><br><br>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-male"></i>
                                </div>
                                <a href="#" class="small-box-footer">NPM (<b>191106041409</b>)</a>
                            </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        
    <!-- <br>- Pertama input kriteria
                    <br>- Lalu masukkan kode kriteria, bobot dan tipe kriteria ada 2 pilihan yaitu cost/benefit
                    <br>- Tambahkan data subkriteria
                    <br>- Masukkan data subkriteria, variabel dan bobot
                    <br>- Tambahkan data alternatif
                    <br>- Masukan nama alternatif lalu isi nilai alternatif sesuai dengan kriteria yang telah di input
                    <br>- Masuk ke halaman Penilaian untuk melihat proses penilaian
                    <br>- Setelah itu masuk ke halaman Hasil untuk mendapatkan data Ranking alternatif
                    <br>- Dihalaman Hasil admin dapat mencetak ke dalam pdf untuk hasil penilaiannya                     -->
</div>

<?php $this->load->view('template/footer'); ?>