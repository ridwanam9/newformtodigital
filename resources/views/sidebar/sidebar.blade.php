<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Menu</span>
                </li>
                

                <li class="submenu">
                    <a href="#"><i class="la la-file-text-o"></i> <span> Buat Form </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{ set_active(['form/input/page']) }}" href="{{ route('form/input/page') }}">Transfer Intra Rumah Sakit</a></li>
                        <li><a class="{{ set_active(['form/input2/page']) }}" href="{{ route('form/input2/page') }}">Asesment Pasien Kondisi Terminal</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-server"></i> <span> Laporan Form </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{ set_active(['form/page/view']) }} {{ request()->is('form/input/edit/*') ? 'active' : '' }}" href="{{ route('form/page/view') }}">Transfer Intra Rumah Sakit</a></li>
                        <li><a class="{{ set_active(['form/page2/view']) }} {{ request()->is('form/input2/edit/*') ? 'active' : '' }}" href="{{ route('form/page2/view') }}">Asesment Pasien Kondisi Terminal</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->