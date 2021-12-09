@extends('layouts.main')

@section('container')
    <!-- Main Content -->

    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>{{ ($label === 'jadwal') ? 'Jadwal Pelajaran' : '' }}</h1>
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
                                <th scope="col">Kelas</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bahasa Indonesia</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Matematika</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bahasa Indonesia</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Matematika</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bahasa Indonesia</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Matematika</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bahasa Indonesia</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-success">Masuk</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Matematika</td>
                                <td>5a</td>
                                <td>07.00 - 09.00</td>
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
    </div>
    </div>

    <!-- General JS Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index.js"></script>
@endsection
