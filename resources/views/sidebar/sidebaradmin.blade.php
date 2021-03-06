<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <h3 class="menu-title">Dashboard {{Auth::user()->name}}</h3><!-- /.menu-title -->
              <li class="menu-item-has-children dropdown">
              </li>
                <h3 class="menu-title">Mahasiswa</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Mahasiswa</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Lihat Data</a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Tambah Data</a></li>
                        {{-- <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                        <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li> --}}
                    </ul>
                </li>
                <h3 class="menu-title">Kriteria</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Data Kriteria</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-puzzle-piece"></i><a href="font-fontawesome.html">Daftar Kriteria</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Tambah Kriteria</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Surveyor</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Data Surveyor</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('view-surveyor')}}">Daftar Surveyor</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Tambah Surveyor</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Proses Perhitungan</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Perhitungan Moora</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Perhitungan 1</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Perhitungan 2</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Perhitungan 3</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Soft Delete</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Data Softdelete</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Data Mahasiswa</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Data Kriteria</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('surveyor')}}">Data Surveyor</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
