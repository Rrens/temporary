@extends('layouts.main')

@section('container')
<!-- Main Content -->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ ($label === 'sekolah') ? 'Profile Sekolah' : '' }}</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <a href="">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Sekolah : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">SDN Ketabang 1 No.288 Surabaya</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kepala Sekolah : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">Sri Rahayu</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kode Pos : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">31841</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NPSN : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">391999319</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Desa/Kelurahan : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">Ketabang</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kecamatan : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">Genteng</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kota : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-label">Surabaya</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </section>
</div>
@endsection
