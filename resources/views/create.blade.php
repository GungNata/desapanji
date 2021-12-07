@extends('layout.layout');

@section('datapenduduk');

<!-- Textual inputs start -->
<div class="row">
    <form action="/simpan" method="POST">
        @csrf
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Tabel Input Data Penduduk</h4>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">NIK</label>
                <input class="form-control" type="number" name="nik">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label class="col-form-label">Jenis Kelamin</label>
                <select class="form-control" name="jk">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                    <option>Custom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Alamat</label>
                <input class="form-control" type="textarea" name="alamat">
            </div>
            <div class="form-group">
                <label class="col-form-label">Agama</label>
                <select class="form-control" name="agama">
                    <option>Hindu</option>
                    <option>Islam</option>
                    <option>Budha</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Konghuchu</option>
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Status</label>
                <select class="form-control" name="status">
                    <option>Menikah</option>
                    <option>Belum Menikah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Pekerjaan</label>
                <input class="form-control" type="textarea" name="pekerjaan">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">No HP</label>
                <input class="form-control" type="textarea" name="hp">
            </div>
            <div class="form-group">
                <label class="col-form-label">Kewarganegaraan</label>
                <select class="form-control" name="kewarganegaraan">
                    <option>Indonesia</option>
                    <option>WNA</option>
                </select>
            </div>
        </div>
    </div>
    <div class="button">
        <input type="submit" value="Simpan" class="btn btn-primary">
          </div>
        </form>
</div>

</div>
@endsection