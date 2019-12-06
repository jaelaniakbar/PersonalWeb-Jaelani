@extends('layout.main')

@section('content')

    <div class="site-blocks-cover overlay bg-light" id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="text-black">Muhamad Jaelani Akbar</h1>
                <p class="lead">Saya adalah mahasiswa Universitas Gunadarma jurusan teknik informatika tahun angkatan 2016 dengan ipk sementara 3.50. Saya lahir di Pemalang 26 Juni 1998, dan memiliki tinggi badan 183 cm dan berat badan 79 kg. Saya adalah orang yang bertanggung jawab, berkomitmen tinggi, serta bisa memanage waktu dengan baik dan mampu bekerja secara individu maupun tim. Saya memiliki ketertarikan dalam bidang it support, database, dan aplikasi mobile.</p>
                <p><a href="#pencapaian" class="btn smoothscroll btn-primary">Pencapaian</a></p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

      <img src="images/74.jpg" alt="Image" class="img-face" data-aos="fade">

      
    </div>  

    

    
    <div class="site-section" id="keahlian-saya">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Keahlian Saya</h2>
          </div>
          @foreach($keahlians ?? '' as $data)
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-menu"></span></div>
              <div class="service-about">
                <h3></h3>
                <p>{{$data->title}}</p>
                <img src="{{$data->gambar}}">
                <p class="lead">{{$data->content}}</p>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-menu"></span></div>
              <div class="service-about">
                <h3></h3>
                <p>Python</p>
                <img src="images/python.jpg">
                <p class="lead">Python adalah bahasa pemrograman interpretatif multiguna dengan filosofi perancangan yang berfokus pada tingkat keterbacaan kode. Python diklaim sebagai bahasa yang menggabungkan kapabilitas, kemampuan, dengan sintaksis kode yang sangat jelas, dan dilengkapi dengan fungsionalitas pustaka standar yang besar serta komprehensif. Python juga didukung oleh komunitas yang besar.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-menu"></span></div>
              <div class="service-about">
                <h3></h3>
                <p>Adobe Photoshop</p>
                <img src="images/photoshop.jpg">
                <p class="lead">Adobe Photoshop, atau biasa disebut Photoshop, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek. Perangkat lunak ini banyak digunakan oleh fotografer digital dan perusahaan iklan sehingga dianggap sebagai pemimpin pasar (market leader) untuk perangkat lunak pengolah gambar/foto, dan, bersama Adobe Acrobat, dianggap sebagai produk terbaik yang pernah diproduksi oleh Adobe Systems.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-menu"></span></div>
              <div class="service-about">
                <h3></h3>
                <p>Adobe Premiere</p>
                <img src="images/premiere.jpg">
                <p class="lead">Adobe Premiere Pro adalah sebuah program penyunting video berbasis non-linier (non-linear editor / NLE) dari Adobe Systems. Itu adalah salah satu produk software dari Adobe Creative Suite, tetapi juga bisa dibeli personal. Bahkan kalau dibeli personal, itu termasuk Adobe Encore dan Adobe OnLocation.</p>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
    </div>


    <section class="site-section block__62272" id="pencapaian">
      

      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">Pencapaian Saya</h2>
          </div>
        </div>

        <!---Tempat mengisi pencapaian menggunakan gambar-->
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/1.jpg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/2.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/3.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/4.jpg">
            </a>

          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/5.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/6.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/7.jpg">
            </a>
          </div>
          
        </div>
      </div>

    </section>

    <section class="site-section"  id="pengalaman-kerja">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center">Pengalaman Kerja</h2>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/ilab.png" alt="Image" class="img-fluid"> Integrated Laboratory
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/kn.png" alt="Image" class="img-fluid">
            <p>Koding Next</p>
          </div> 
        </div>
      </div>
    </section>


    

  </div> <!-- .site-wrap -->
  @endsection