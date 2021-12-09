@extends('layouts.main')
@section('container')
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>{{ ($label === 'profile') ? 'Profile ' . $role : '' }}</h1>
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
                <label class="form-label">Nama : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-label">Sujiwo Tejo</label>
            </div>
            <div class="mb-3">
                <label class="form-label">NIP : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-label">194101010310</label>
            </div>
            <div class="mb-3">
                <label class="form-label">ALAMAT : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-label">Raya Agung Magetan Selatan 2A Kota Jambi</label>
            </div>
            <div class="mb-3">
                <label class="form-label">TTL : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-label">Mojokerto, 19-09-1994</label>
            </div>
            <div class="mb-3">
                <label class="form-label">Wali kelas : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-label"> - </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Status : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-label">Wakil Kepala Sekolah</label>
            </div>
        </div>
    </div>
    </div>
    <div class="row">

    </div>
    </section>
</div>
@endsection
