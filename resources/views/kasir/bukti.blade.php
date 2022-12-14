@extends('layout.mainKasir')

@section('content')


<div id="page_top" class="section-body">
    <div class="page-header">
        <div class="left">
            <h1 class="page-title">Bukti Transfer Murid</h1>
        </div>
    </div>
    <div id="page-top" class="section-body"> Details </div>
    <div class="row clearfix">
        <div class="col-12">
            <div class="table-responsive card">
                <table style="margin-left: auto; margin-right:auto" class="table header-border table-hover">
                    <thead>
                        <tr>
                            <th style="width: 300px">Nama Siswa</th>
                            <th style="width: 200px">Buku</th>
                            <th style="width: 70px">JLH</th>
                            <th style="width: 100px">Harga</th>
                            <th style="width: 100px">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> AARON ADHIGUNA </td>
                            <td> Pendidikan Pancasila dan Kewarganegaraan 1 (E)</td>
                            <td> 1 </td>
                            <td> 75,000 </td>
                            <td> 75,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive card">
                <table style="margin-left: auto; margin-right:auto" class="table header-border table-hover">
                    <thead>
                        <img class="proof" src="{{ asset('images/buktitf.jpg')}}" alt="Butki Transfer"/>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <center>
                            <button class="btn btn-primary"><i class="fa fa-check-circle-o"></i> Accept</button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i> Reject</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection