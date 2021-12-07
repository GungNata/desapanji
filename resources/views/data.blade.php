@extends('layout.layout');

@section('datapenduduk');

<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="search-box pull-left">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..." required>
                        <i class="ti-search"></i>
                    </form>
                </div>
            </div>
            <!-- profile info & task notification -->
        </div>
    </div>
    <!-- header area end -->
    <!-- page title area start -->
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Penduduk Desa Panji</h4>

                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Agama</th>
                                        <th>Status</th>
                                        <th>Pekerjaan</th>
                                        <th>No HP</th>
                                        <th>Kewarganegaraan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penduduk as $row)
                                    <tr>
                                        <td scope="row">{{ $row->id }}</td>
                                        <td scope="row">{{ $row->nik }}</td>
                                        <td scope="row">{{ $row->nama }}</td>
                                        <td scope="row">{{ $row->tempat_lahir }}</td>
                                        <td scope="row">{{ $row->tgl_lahir }}</td>
                                        <td scope="row">{{ $row->jk }}</td>
                                        <td scope="row">{{ $row->alamat }}</td>
                                        <td scope="row">{{ $row->agama }}</td>
                                        <td scope="row">{{ $row->status }}</td>
                                        <td scope="row">{{ $row->pekerjaan }}</td>
                                        <td scope="row">{{ $row->hp }}</td>
                                        <td scope="row">{{ $row->kewarganegaraan }}</td>
                                        <td scope="row">
                                            <a href="/edit/{{ $row->id }}" class="btn btn-warning">Edit</a>
                                            <a href="/hapus/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table end -->

        </div>
    </div>
</div>
@endsection