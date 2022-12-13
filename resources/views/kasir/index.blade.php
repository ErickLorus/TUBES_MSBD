@extends('layout.mainKasir')

@section('content')
<div id="page_top" class="section-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <h1 class="page-title">Dashboard Kasir</h1>                                               
            </div>
            <div class="right">
                <div class="notification d-flex">
                    <button type="button" class="btn btn-facebook"><i class="fa fa-info-circle mr-2"></i>Need Help</button>
                    <button type="button" class="btn btn-facebook"><i class="fa fa-file-text mr-2"></i>Data export</button>
                    <button type="button" class="btn btn-facebook"><i class="fa fa-power-off mr-2"></i>Sign Out</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div>Total Buku</div>
                        <div class="py-4 m-0 text-center h1 text-success">95</div>
                        <div class="d-flex">
                            <small class="text-muted">Penjualan</small>
                            <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                        </div>
                    </div>
                </div>
            </div>                
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div>Total Murid SMP</div>
                        <div class="py-4 m-0 text-center h1 text-info">24</div>
                        <div class="d-flex">
                            <small class="text-muted">New students</small>
                            <div class="ml-auto">0%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div>Total Murid SMA</div>
                        <div class="py-4 m-0 text-center h1 text-warning">24</div>
                        <div class="d-flex">
                            <small class="text-muted">New students</small>
                            <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>0%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div>Total Murid SMK</div>
                        <div class="py-4 m-0 text-center h1 text-danger">9</div>
                        <div class="d-flex">
                            <small class="text-muted">New students</small>
                            <div class="ml-auto"><i class="fa fa-caret-down text-danger"></i>0%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-12">
                <div class="table-responsive card">
                    <table class="table header-border table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Books</th>
                                <th>Popularity</th>
                                <th>Sales</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="w60">1</th>
                                <td>Science Matters Vol. A (mc)</td>
                                <td>
                                    <div class="progress progress-xxs progress-transparent custom-color-cyan mb-0 mt-0">
                                        <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47" style="width: 47%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-primary">40%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>New Syllabus Maths 1 (S)</td>
                                <td>
                                    <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                        <div class="progress-bar" data-transitiongoal="88" aria-valuenow="88" style="width: 88%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">90%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>ESPS IPA - Fisika 1 (E)</td>
                                <td>
                                    <div class="progress progress-xxs progress-transparent custom-color-white mb-0 mt-0">
                                        <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47" style="width: 47%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-dark">35%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>ESPS IPA - Biologi 1 (E)</td>
                                <td>
                                    <div class="progress progress-xxs progress-transparent custom-color-red mb-0 mt-0">
                                        <div class="progress-bar" data-transitiongoal="62" aria-valuenow="62" style="width: 62%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-danger">50%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>IPS 1 (E)</td>
                                <td>
                                    <div class="progress progress-xxs progress-transparent custom-color-orange mb-0 mt-0">
                                        <div class="progress-bar" data-transitiongoal="21" aria-valuenow="21" style="width: 21%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-warning">20%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>               
        </div>
    </div>            
</div>
@endsection
