<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          
          ><ul class="sidebar-menu" data-view="views/shell/shell_umum" style="" data-active-view="true">
            <li class="header">MENU UTAMA</li>
            <li>
              <a data-bind="attr: { href: dashboard()[0].hash }" href="#">
                <i class="glyphicon glyphicon-home"></i> 
                <span data-bind="text: dashboard()[0].title">Dashboard</span> <small class="label pull-right bg-red"></small>
              </a>
            </li>

            <?php 

              if($this->session->userdata('username')){
                ?>


            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-open"></i>
                <span>Master</span>
                <span class="label label-primary pull-right" data-bind="text: report().length"></span>
              </a>
              <ul class="treeview-menu">
              <!-- ko foreach: report -->          
                <li><a href="home/data_user"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Data User</span></a></li>
                        
                <li><a href="home/data_jenis"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Jenis Surat</span></a></li>
                        
               
              </ul>
            </li>                                   
                <?php
              }else{
                
              }

             ?>


            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-envelope"></i>
                <span>Surat</span>
                <span class="label label-primary pull-right" data-bind="text: report().length"></span>
              </a>
              <ul class="treeview-menu">
              <!-- ko foreach: report -->          
                <li><a  href="home/surat_masuk"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Surat Masuk</span></a></li>
                        
                <li><a href="home/surat_keluar"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Surat Keluar</span></a></li>
                        <!-- 
                <li><a href="home/arsip"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Arsip </span></a></li> -->
                        
              </ul>
            </li>                                    
            


            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-print"></i>
                <span>Laporan</span>
                <span class="label label-primary pull-right" data-bind="text: report().length"></span>
              </a>
              <ul class="treeview-menu">
              <!-- ko foreach: report -->          
                <li><a href="home/l_surat_masuk"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Surat Masuk</span></a></li>
                        
                <li><a data-bind="attr: { href: hash }" href="#suratselesaibyagendabulan"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Rekapitulasi per Agenda</span></a></li>
                        
                <li><a data-bind="attr: { href: hash }" href="#suratpelaksana"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Rekapitulasi per Pelaksana</span></a></li>
                        
                <li><a href="home/l_surat_keluar"><i class="fa fa-circle-o text-red"></i> <span data-bind="text: title">Surat Keluar</span></a></li>
              <!-- /ko -->         
              </ul>
            </li>                                    
                    
</ul><!--/ko-->                     
          
        </section>
        <!-- /.sidebar -->
      </aside>