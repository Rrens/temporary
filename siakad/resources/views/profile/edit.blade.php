@extends('layouts.main')

@section('container')
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>{{ $label }}</h1>
    </div>
    <div class="section-body">
    <div class="card">
        <div class="card-header">
            <h4>Edit Data Admin</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control col-sm-4" name="nama" value="Sujiwo Tejo" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIP</label>
                <input type="text" class="form-control col-sm-4" name="nip" value="194101010310" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control col-sm-4" name="alamat" value="Raya Agung Magetan Selatan 2A Kota Jambi" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control col-sm-4" name="tempat-lahir" value="Mojokerto" required>
            </div>

{{-- <div class="mb-3">
    <div class="col-4 col-4">
                  <input
                    type="text"
                    class="form-control datepicker"
                    name="tgl"
                    placeholder="Masukan Tanggal Lahir"
                    required
                  />
                  <script type="text/javascript">
                    $(function () {
                      $(".datepicker").datepicker({
                        format: "dd-mm-yy",
                        autoclose: true,
                        todayHighLight: true,
                      });
                    });
                  </script>
                </div>
</div> --}}

            <div class="mb-3">

				<label for="exampleFormControlInput1" class="form-label"
                  >TTL</label
                >
                <div class="row mr-5">
                    <div class="col" >
                    <input
                        type="text"
                        class="form-control"
                        id="exampleFormControlInput1"
                        name="tempat"
                        placeholder="Tempat lahir"
                        />
                    </div>
                    <div class="col">
                    <input
                        type="date"
                        class="form-control datepicker"
                        name="tgl"
                        placeholder="tanggal lahir"
                        required
                        />
                    </div>
                </div>
                {{-- <div class="row mb-2">
                    <div class="col-sm-4">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">

                    </div>
                </div> --}}
			<div>
            <!-- Tambah Ajax Tanngal lahir -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Wali Kelas</label>
                <input type="text" class="form-control col-sm-4" name="wali-kelas" value=" - " required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <input type="text" class="form-control col-sm-4" name="alamat" value="Wakil Kepala Sekolah" required>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit" data-toggle="modal" data-target="#exampleModal" id="modal-2">Simpan</button>
                <!-- <button class="btn btn-secondary" type="reset">Reset</button> -->
            </div>
        </div>
    </div>
    </div>

    </section>
</div>
@endsection
