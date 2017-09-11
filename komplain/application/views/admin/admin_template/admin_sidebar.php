<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="<?php echo base_url(); ?>admin/dashboard"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <!--<li><a href="#"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> User</a></li>-->
        <li><a href="<?php echo base_url(); ?>admin/pelanggan"><svg class="glyph stroked user"><use xlink:href="#stroked-line-graph"></use></svg> Pelanggan</a></li>
        <!--<li><a href="<?php echo base_url(); ?>admin/perusahaan"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Perusahaan</a></li>
        
        <li><a href="#"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
        <li><a href="#"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>-->
        <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg></span> Perusahaan 
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="<?php echo base_url(); ?>admin/perusahaan">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> List Perusahaan
                        </a>
                    </li>
            <li>
                <a class="" href="<?php echo base_url(); ?>admin/kategori">
                <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Kategori
            </a>
                    
                </ul>
        <li class="parent">
            
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="<?php echo base_url(); ?>admin/perusahaan">
                    <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> List Perusahaan
                </a>
            </li>
            <li>
                <a class="" href="<?php echo base_url(); ?>admin/kategori">
                <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Kategori
            </a>
        </li>
        <li>
            <a class="" href="#">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
        </a>
    </li>
</ul>
</li>
<li><a href="<?php echo base_url(); ?>admin/komplain"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Komplain</a></li>
</div><!--/.sidebar-->