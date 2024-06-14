<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <a href="<?= base_url('dashboard'); ?>"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu" <?= $active = $judul = 'Arsip' ? 'active' : ''; ?>>
                    <a href="#"><i data-feather="file"></i> <span> Arsip Aktif</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="<?= $act = $subjudul = 'Berkas' ? 'active' : ''; ?>"><a href="<?= base_url('berkas'); ?>">Berkas</a></li>
                        <li class="<?= $act = $subjudul = 'Arsip' ? 'active' : ''; ?>"><a href="<?= base_url('arsip'); ?>">Item Berkas</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="folder"></i> <span> Arsip Inaktif</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="invoices.html">Berkas</a></li>
                        <li><a href="<?= base_url('arsip'); ?>">Item Berkas</a></li>
                    </ul>
                </li>

                <li>
                    <a href="profile.html"><i data-feather="shield"></i> <span>Arsip Vital</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Pengawasan</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?= base_url('pengawasan/IdDataUmum'); ?>">Data Umum</a></li>
                        <li><a href="<?= base_url('pengawasan/penciptaan'); ?>">Penciptaan</a></li>
                        <li><a href="<?= base_url('pengawasan/pemeliharaan'); ?>">Pemeliharaan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('user'); ?>"><i data-feather="user-plus"></i> <span>Profile</span></a>
                </li>
                <li>
                    <a href="<?= base_url('Auth/logout'); ?>"><i data-feather="log-out"></i> <span>Keluar</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">