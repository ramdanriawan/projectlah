<!--HOME SECTION START-->
<div id="home" >
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                <div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">
                    <div class="carousel-inner">
                        <div class="item active">
                            <h3>
                            Komitmen Kami :
                            </h3>
                            <p>
                                Pertanggungjawaban terbesar adalah kepada Allah SWT
                            </p>
                        </div>
                        <div class="item">
                            <h3>
                            Komitmen Kami :
                            </h3>
                            <p>
                                Mengajak saudara seiman untuk senantiasa berbagi tanpa harus berkecukupan dulu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
                <p >
                    Smart dalam mengelola hal kecil untuk manfaat yang besar di masa depan
                </p>
                <div class="social">
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-google-plus "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-pinterest "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
                </div>
                <a href="#services" class=" btn button-custom btn-custom-two">See Service List </a>
            </div>
        </div>
    </div>
</div>
<!--HOME SECTION END-->
<!--SERVICE SECTION START-->
<section id="services" >
    <div class="container">
        <div class="row text-center header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                <h3>Profile</h3>
                <hr />
            </div>
        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="services-wrapper">
                    <?php
                    $image = $donatur->image;
                    if (!empty($image)){ ?>
                    <img style: width="100px" height="100px" src="<?php echo base_url(); ?>assets/img/donatur/<?php echo $donatur->image ;?>"/>
                    <?php } else {?>
                    <img style: width="100px" height="100px" src="<?php echo base_url(); ?>assets/img/donatur/default_user.jpg"/>
                    <?php } ?>
                    <h3>Profile Donatur</h3>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Nama Donatur
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo $donatur->nama_donatur; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Alamat
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo $donatur->alamat; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Daerah Asal
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo $donatur->daerah_asal; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Handphone
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo $donatur->no_hp; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Whats Apps No
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo $donatur->wa_number; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Pin BBM
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo $donatur->pin_bbm; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            MOJ
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            : <?php echo periode($donatur->MOJ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SERVICE SECTION END-->
<!--PRICING SECTION START-->
<section id="donasi">
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Donasi</h3>
                <hr/>
            </div>
        </div>
        <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="row db-padding-btm db-attached">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table  class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Periode</th>
                                    <th>ID No.</th>
                                    <th>Donatur</th>
                                    <th>Nominal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if ($listDonasi) {
                                foreach ($listDonasi as $donasi ) {
                                ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo periode($donasi->periode) ?></td>
                                    <td><?php echo $donasi->id_data ?></td>
                                    <td><?php echo $donasi->nama_donatur ?></td>
                                    <td><?php echo $donasi->pemasukan ?></td>
                                </tr>
                                <?php }
                                }?>
                            </tbody>
                        </table>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        </div>
    </div>
</div>
</section>
<!--PRIICING SECTION END-->
<!--WORK SECTION START-->
<section id="laporan">
<div class="container">
    <div class="row text-center header animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Laporan Keuangan</h3>
            <hr/>
        </div>
    </div>
    <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <div class="row db-padding-btm db-attached">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table  class="table table-bordered">
                        <?php if ($laporan) {
                        foreach ($laporan as $data ) {
                        ?>
                        <tr>
                            <th>Uraian</th>
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                        </tr>
                        <tr>
                            <td>Keuangan sampai Januari 2016</td>
                            <td>Rp. <?php echo $data->saldo_awal; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Agustus 2015</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Donasi</td>
                            <td>Rp. <?php echo $data->jumlah_donasi; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Penyaluran Bantuan</td>
                            <td></td>
                            <td>Rp. <?php echo $data->penyaluran; ?></td>
                        </tr>
                        <tr>
                            <td>Bea Transfer antar Bank</td>
                            <td></td>
                            <td>Rp. <?php echo $data->bea_transfer; ?></td>
                        </tr>
                        <tr>
                            <td>Bea admin Bank</td>
                            <td></td>
                            <td>Rp. <?php echo $data->bea_admin; ?></td>
                        </tr>
                        <tr>
                            <td>Bunga Bank</td>
                            <td>Rp. <?php echo $data->bunga_bank; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center"><strong><h4>Total</h4></strong></td>
                            <td><strong><h4>Rp. <?php echo $data->total_masuk; ?></h4></strong></td>
                            <td><strong><h4>Rp. <?php echo $data->total_keluar; ?></h4></strong></td>
                        </tr>
                        <tr>
                            <td align="center"><strong><h4>Saldo Akhir</h4></strong></td>
                            <td colspan="2"><strong><h4>Rp. <?php echo $data->saldo_akhir; ?></h4></strong></td>
                        </tr>
                        <?php  }
                        } ?>
                        
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        </div>
    </div>
</div>
</section>
<!--GRID SECTION END-->