@extends('layouts.main')
@section('container')
    <div class="main-content">
          <section class="section">
            <div class="section-header">
                <h1>{{ ($label === 'tugas') ? 'Tugas ' . $role : '' }}</h1>
            </div>
            <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Pilih Hari : </h4>
                <div class="dropdown d-inline mr-2">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Senin
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Senin</a>
                        <a class="dropdown-item" href="#">Selasa</a>
                        <a class="dropdown-item" href="#">Rabu</a>
                        <a class="dropdown-item" href="#">Kamis</a>
                        <a class="dropdown-item" href="#">Jumat</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Judul Tugas</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>Apa itu MikroController</td>
                            <td>Senin, 03-04-01</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">Masuk</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
            <div class="row">

            </div>
          </section>
        </div>
@endsection
