<ul id="menu" class="page-sidebar-menu">
    <li >
        <a href="{{ url('index') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li {!! (Request::is() ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Pengajuan</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is() ? 'class="active"' : '') !!}>
                <a href="{{ url('pengadaan') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Pengadaan
                </a>
            </li>
            <li {!! (Request::is('dropzone') ? 'class="active"' : '') !!}>
                <a href="{{ url('complain') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Komplain
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('sub/form_builder') || Request::is('sub/form_builder2') || Request::is('sub/buttonbuilder') || Request::is('sub/gridmanager') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Asset</span>
        </a>
    </li>
    <li {!! (Request::is('admin/form_examples') || Request::is('admin/editor') || Request::is('admin/editor2') || Request::is('admin/form_layout') || Request::is('admin/validation') || Request::is('admin/formelements') || Request::is('admin/form_layouts') || Request::is('admin/formwizard') || Request::is('admin/accordionformwizard') || Request::is('admin/datepicker')? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="doc-portrait" data-c="#67C5DF" data-hc="#67C5DF"
               data-size="18" data-loop="true"></i>
            <span class="title">Laporan</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/form_examples') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/form_examples') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Laporan Pengadaan
                </a>
            </li>
            <li {!! (Request::is('admin/editor') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/editor') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Laporan Mutasi Barang
                </a>
            </li>
            <li {!! (Request::is('admin/editor') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/editor') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Laporan Akhir Tahun
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/animatedicons') || Request::is('admin/buttons') || Request::is('admin/advanced_buttons') || Request::is('admin/tabs_accordions') || Request::is('admin/panels') || Request::is('admin/icon') || Request::is('admin/color') || Request::is('admin/grid') || Request::is('admin/carousel') || Request::is('admin/advanced_modals') || Request::is('admin/tagsinput') || Request::is('admin/nestable_list') || Request::is('admin/sortable_list') || Request::is('admin/toastr') || Request::is('admin/notifications') || Request::is('admin/session_timeout') || Request::is('admin/portlet_draggable') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18"
               data-loop="true"></i>
            <span class="title">User</span>
        </a>
    </li>
</ul>