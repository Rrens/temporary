@extends('layouts.main')

@section('container')
<!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
            <h1>{{ ($label === 'pengumuman') ? 'Pengumuman' : '' }}</h1>
          </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header mt-3">
                            <h4 style="color:black; font-size: 27px">What is Lorem Ipsum?</h4>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur velit sint repellat, vero corrupti nemo in. Nemo dicta iure labore, quasi aspernatur enim excepturi ea! Libero, sunt deleniti. Ipsam enim aliquid tenetur exercitationem error dolorum tempore molestiae impedit officia, fuga, repudiandae veritatis inventore commodi consequatur reiciendis iure? Adipisci vitae ad exercitationem, maxime dolorum odio illum consequuntur? Aliquid distinctio blanditiis cumque officia debitis quisquam dignissimos, optio maiores dolore veritatis, necessitatibus quos velit quam dicta fugiat ab modi, ipsum rerum? Magnam nulla pariatur laboriosam consequatur, maxime quia ipsum quae dolorum perferendis cum ea iusto eos alias quibusdam expedita mollitia voluptates veniam! Suscipit provident nostrum dignissimos doloribus voluptate. Fugiat modi asperiores reiciendis. Ad velit consequatur nihil quas veritatis nesciunt exercitationem fugit non, dolor beatae deleniti quia facere possimus, nulla nisi dolorem libero quibusdam earum officia modi corporis distinctio, minima provident? Aperiam est odit ex, iusto ipsam voluptates illo dolore doloremque sit ipsum voluptatibus minus natus aliquam iste id blanditiis animi, laborum nam eum dolorum libero. Dolores, fugiat nesciunt iure aliquam dignissimos neque provident iusto, explicabo reprehenderit nostrum accusantium animi doloremque, hic placeat natus accusamus vel laudantium suscipit. Reiciendis mollitia laboriosam architecto modi, consectetur hic omnis aliquam nihil pariatur repudiandae fugiat exercitationem animi commodi. Adipisci enim sint laborum dignissimos necessitatibus odit ipsum illum architecto dolore placeat repellendus, aspernatur eius ex iste consectetur nostrum saepe libero officiis similique temporibus hic nemo fugit. Neque, perspiciatis consequatur vero illum quo qui molestiae dolore saepe, alias debitis quibusdam rem molestias iure perferendis delectus. Animi hic voluptates mollitia ratione saepe libero nemo impedit at laboriosam voluptatibus in ullam nihil voluptatum sit dolorum velit, atque necessitatibus delectus voluptate quidem expedita et. Sint quis rem officiis, animi mollitia obcaecati cum quod omnis consequatur at quaerat sapiente odio numquam nisi id quisquam. Rem veniam molestias autem distinctio dolorum deserunt, laborum laudantium repudiandae!</p>
                        </div>
                    </div>
                </div>
              <div class="col-lg-3">
                <div class="card gradient-bottom">
                  <div class="card-header">
                    <h4>Daftar Pengumuman</h4>
                  </div>
                  <div class="card-body" id="top-5-scroll">
                    <center>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                                <tr>
                                    <th scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde?</th>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@endsection
