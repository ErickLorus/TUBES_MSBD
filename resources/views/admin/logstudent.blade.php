@extends('layout.mainAdmin')

@section('content')


<div id="page_top" class="section-body">
    <div class="page-header">
        <div class="left">
            <h1 class="page-title">Log Student</h1>
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
                                <th style="width: 350px">Nama Siswa (Old)</th>
                                <th style="width: 350px">Nama Siswa (New)</th>
                                <th style="width: 250px">No Virtual Account</th>
                                <th style="width: 200px">Date Modified</th>
                                <th style="width: 180px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>AGATHA RUTH TJAHJASARI</td>
                                <td>7770300722000430</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>ALDRICH THEODORE TJAHJASARI</td>
                                <td>7770300722000431</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>ARETHA QUINN TANDJO</td>
                                <td>7770300722000432</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>AVELYN SUKA</td>
                                <td>7770300722000433</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>CAYLEB DARIUS SIMJAYA</td>
                                <td>7770300722000434</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>CHRICELYN LOUIS ANDITIO</td>
                                <td>7770300722000435</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>CLAIRE TANAKA</td>
                                <td>7770300722000436</td>
                                <td>16/12/2022</td>
                                <td>Updated</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>EVANO YOSAFAT NATHANAEL PANJAITAN</td>
                                <td>7770300722000437</td>
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

        <div id="listbutton">
            <button class="listbutton" type="button">Export</button>
        </div>


        @endsection