@extends('layout.mainAdmin')

@section('content')


<div id="page_top" class="section-body">
    <div class="page-header">
        <div class="left">
            <h1 class="page-title">Log Validasi</h1>
        </div>
    </div>
    <br>

    <div id="page_top" class="section-body">
        <div class="row clearfix">
            <div class="col-12">
                <div class="table-responsive card">
                    <table style="margin-left: auto; margin-right:auto" class="table header-border table-hover">
                        <thead>
                            <tr>
                                <th style="width: 100px">No</th>
                                <th style="width: 380px">Nama Siswa</th>
                                <th style="width: 180px">Validation (Old)</th>
                                <th style="width: 180px">Validation (New)</th>
                                <th style="width: 200px">Date Modified</th>
                                <th style="width: 180px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w60">1</td>
                                <td>AGATHA RUTH TJAHJASARI</td>
                                <td>Rejected</td>
                                <td>Accepted</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">2</td>
                                <td>ALDRICH THEODORE TJAHJASARI</td>
                                <td>Accepted</td>
                                <td>Rejected</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">3</td>
                                <td>ARETHA QUINN TANDJO</td>
                                <td>Rejected</td>
                                <td>Accepted</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">4</td>
                                <td>AVELYN SUKA</td>
                                <td>Accepted</td>
                                <td>Rejected</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">5</td>
                                <td>CAYLEB DARIUS SIMJAYA</td>
                                <td>Rejected</td>
                                <td>Accepted</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">6</td>
                                <td>CHRICELYN LOUIS ANDITIO</td>
                                <td>Accepted</td>
                                <td>Rejected</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">7</td>
                                <td>CLAIRE TANAKA</td>
                                <td>Rejected</td>
                                <td>Accepted</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td class="w60">8</td>
                                <td>EVANO YOSAFAT NATHANAEL PANJAITAN</td>
                                <td>Accepted</td>
                                <td>Rejected</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="paginationmain">
            <div class="pagination">
                <span>
                    <div class="index">1</div>
                    <div class="index">2</div>
                    <div class="index">3</div>
                    <div class="index">4</div>
                    <div class="index">5</div>
                </span>
                <svg viewBox="0 0 100 100">
                    <path
                        d="m 7.1428558,49.999998 c -1e-7,-23.669348 19.1877962,-42.8571447 42.8571442,-42.8571446 23.669347,0 42.857144,19.1877966 42.857144,42.8571446" />
                </svg>
                <svg viewBox="0 0 100 100">
                    <path
                        d="m 7.1428558,49.999998 c -1e-7,23.669347 19.1877962,42.857144 42.8571442,42.857144 23.669347,0 42.857144,-19.187797 42.857144,-42.857144" />
                </svg>
            </div>
        </div>
    </div>

    <div id="listbutton">
        <button class="listbutton" type="button">Export</button>
        <button class="listbutton" type="button">Export as CSV</button>
    </div>
  

    @endsection