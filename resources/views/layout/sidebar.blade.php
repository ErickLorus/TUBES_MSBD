<div id="left-sidebar" class="sidebar">
    <div class="d-flex justify-content-between brand_name">
        <h5 class="brand-name">Methodist Charles Wesley</h5>
    </div>
    <div class="input-icon">
        <span class="input-fa fa-addon">
            <i class="fe fe-search"></i>
        </span>
        <input type="text" class="form-control" placeholder="Search...">
    </div>
    <ul class="nav nav-tabs b-none">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all-tab"><i class="fa fa-list-ul"></i> All</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="all-tab">
            <nav class="sidebar-nav">
                <ul class="metismenu ci-effect-1">
                    <li class="g_heading">Directories</li>
                    <li class="active">
                        <a href="admin" class="has-arrow"><i class="fa fa-home"></i><span data-hover="Dashboard">Dashboard</span></a>
                    </li>
                    <li><a href="#" aria-haspopup="true"><i class="fa fa-user"></i><span data-hover="Murid">Student</a>
                    <ul class="dropdown" aria-label="submenu">
                        <li><a href="smp">SMP</a></li>
                        <li><a href="sma">SMA</a></li>
                        <li><a href="smk">SMK</a></li>
                    </ul>
                    </li>
                    <li><a href="#" aria-haspopup="true"><i class="fa fa-book"></i><span data-hover="Buku">Book</span></a>
                    <ul class="dropdown" aria-label="submenu">
                        <li><a href="bukusmp">SMP</a></li>
                        <li><a href="bukusma">SMA</a></li>
                        <li><a href="bukusmk">SMK</a></li>
                    </ul>
                    </li>
                    <li><a href="transaksi"><i class="fa fa-money"></i><span data-hover="Transaksi">Transaction</span></a></li>
                    <li><a href="#" aria-haspopup="true"><i class="fa fa-file-pdf-o"></i><span data-hover="Log">Log Table</span></a>
                    <ul class="dropdown" aria-label="submenu">
                        <li><a href="/logtransaksi">Log Transaksi</a></li>
                        <li><a href="/logvalidasi">Log Validasi</a></li>
                        <li><a href="/logbuku">Log Buku</a></li>
                        <li><a href="/logstudent">Log Student</a></li>
                    </ul>
                    </li>
                </ul>
            </nav>
        </div>
            </div>
        </div>
    </div>
</div>

<script>
function student() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>