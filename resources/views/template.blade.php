@extends('layar/bar')

@section('halaman')
    


    <!-- Background -->
    <section class="background">
        <section class="profil text-center">
        <h2 style="color: aqua" style="margin-top: 1%">Lorem, ipsum dolor.</h2>
        <h3><img src="gambar/elco.png" alt="" 
            style="margin-top: 10px" width="25%" style="margin-block-start: -30%"
            class="rounded-circle img-thumbnail"></h3>
        <h2 style="color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
    </section>
    </section>
    

    <!--template-->
    <!--border-->
    <div class="container">
      <h3 style="color: aqua">border</h3>
      <p style="color: aliceblue">
        Gunakan utilitas batas untuk mengatur gaya batas dan radius batas elemen dengan cepat. 
        Bagus untuk gambar, tombol, atau elemen lainnya.
        <br>
        Gunakan utilitas batas untuk menambah atau menghapus batas elemen. Pilih dari semua batas atau satu per satu.
      </p>
    </div>

    <div class="container">
      <h4 style="color: aqua">Additive</h4>
      <span class="border">border</span>
      <span class="border-top">border-top</span>
      <span class="border-end">border-end</span>
      <span class="border-bottom">border-bottom</span>
      <span class="border-start">border-start</span>
    </div>
    <!----------------------------------------->
    <div class="container">
      <h4 style="color: aqua">Subtractive</h4>
      <span class="border-0">border-0</span>
      <span class="border-top-0">border-top-0</span>
      <span class="border-end-0">border-end-0</span>
      <span class="border-bottom-0">border-bottom-0</span>
      <span class="border-start-0">border-start-0</span>
    </div>
    <!----------------------------------------->
    <div class="container" style="color: aliceblue">
      <h4 style="color: aqua">Border color</h4>
      <p style="color: aliceblue">
        Ubah warna batas menggunakan utilitas yang dibangun di atas warna tema kami.
      </p>
      <span class="border border-primary">1-border-primary</span>
      <span class="border border-secondary">2-border-secondary</span>
      <span class="border border-success">3-border-success</span>
      <span class="border border-danger">4-border-danger</span>
      <span class="border border-warning">5-border-warning</span>
      <span class="border border-info">6-border-info</span>
      <span class="border border-light">7-border-light</span>
      <span class="border border-dark">8-border-dark</span>
      <span class="border border-white">9-border-white</span>
    </div>
    <!----------------------------------------->
    <div class="container">
      <h4 style="color: aqua">Border-width</h4>
      <span class="border border-1">border border-1</span>
      <span class="border border-2">border border-2</span>
      <span class="border border-3">border border-3</span>
      <span class="border border-4">border border-4</span>
      <span class="border border-5">border border-5</span>
    </div>
    <!----------------------------------------->
    <div class="container">
      <h4 style="color: aqua">Border-radius</h4>
      <p style="color: aliceblue">
        Tambahkan kelas ke elemen untuk dengan mudah membulatkan sudutnya.
      </p>
      <img src="gambar/tesgambar1.jpg" class="rounded" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-top" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-end" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-bottom" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-start" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-circle" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-pill" alt="" width="10%">
    </div>
    <!----------------------------------------->
    <div class="container">
      <h4 style="color: aqua">Sizes</h4>
      <p style="color: aliceblue">
        Gunakan kelas penskalaan untuk sudut membulat yang lebih besar atau lebih kecil. 
        Ukuran berkisar dari 0 hingga 3, dan dapat dikonfigurasi dengan memodifikasi API utilitas.
      </p>
      <img src="gambar/tesgambar1.jpg" class="rounded-0" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-1" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-2" alt="" width="10%">
      <img src="gambar/tesgambar1.jpg" class="rounded-3" alt="" width="10%">
    </div>
    <!----------------------------------------->
    <div class="container">
      <h4 style="color: aqua">Subtractive</h4>
      
    </div>
    


    <section id="icons">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4 style="color: aqua">halaman sosmed</h4>
          </div>
        <div class="row">
          <div class="col-2">
            <a href="#">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/telepon.jpg" alt="" width="30px" class="rounded-circle"></div>
                <div class="col"><h4 style="color: white">telepon</h4></div>
              </div>
            </a>
          </div>
          <div class="col-2">
            <a href="#">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/fb.jpg" alt="" width="30px" class="rounded-circle"></div>
                <div class="col"><h4 style="color: white">facebook</h4></div>
              </div>
            </a>
          </div>
          <div class="col-2">
            <a href="#">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/ig.jpg" alt="" width="30px" class="rounded-circle"></div>
                <div class="col"><h4 style="color: white">instagram</h4></div>
              </div>
            </a>
          </div>
          <div class="col-2">
            <a href="#">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/twit.jpg" alt="" width="30px" class="rounded-circle"></div>
                <div class="col"><h4 style="color: white">twiter</h4></div>
              </div>
            </a>
          </div>
          <div class="col-2">
            <a href="#">
                <h4 style="color: white">dll.</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--pertani kode-->
    <div class="container" style="color: aqua"><h4>list1</h4></div>
    <div class="container" style="background-color: darkgray">
      <h4>Buah Favoritku: (ol)</h4>
    <ol>
        <li>Jeruk</li>
        <li>Durian</li>
        <li>Pisang</li>
        <li>Pepaya</li>
        <li>Mangga</li>
    </ol>
    </div>

    <div class="container" style="color: aqua"><h4>list2</h4></div>
    <div class="container" style="background-color: darkgray">
      <h4>List dengan type alfabet (ol type='a')</h4>
    <ol type='a'>
        <li>Tutorial List di HTML</li>
        <li>Tutorial Link di HTML</li>
        <li>Tutorial Tabel di HTML</li>
    </ol>
    <h4>List dengan type alfabet kapital/huruf besar (ol type='A')</h4>
    <ol type='A'>
        <li>Tutorial List di HTML</li>
        <li>Tutorial Link di HTML</li>
        <li>Tutorial Tabel di HTML</li>
    </ol>
    <h4>List dengan type romawi (ol type='i')</h4>
    <ol type='i'>
        <li>Tutorial List di HTML</li>
        <li>Tutorial Link di HTML</li>
        <li>Tutorial Tabel di HTML</li>
    </ol>
    <h4>List dengan type romawi kapital (ol type='I')</h4>
    <ol type='I'>
        <li>Tutorial List di HTML</li>
        <li>Tutorial Link di HTML</li>
        <li>Tutorial Tabel di HTML</li>
    </ol>
    </div>

    <div class="container" style="color: aqua"><h4>list3</h4></div>
    <div class="container" style="background-color: darkgray">
      <h4>Bahasa Pemrograman untuk dipelajari: (ul)</h4>
    <ul>
        <li>Javascript</li>
        <li>PHP</li>
        <li>Java</li>
        <li>Python</li>
        <li>Kotlin</li>
    </ul>
    </div>

    <div class="container" style="color: aqua"><h4>list4</h4></div>
    <div class="container" style="background-color: darkgray">
      <h4>Bahasa Pemrograman untuk dipelajari: (ul type="square")</h4>
    <ul type="square">
        <li>Javascript</li>
        <li>PHP</li>
        <li>Java</li>
        <li>Python</li>
        <li>Kotlin</li>
    </ul>
    <h4>Framework untuk dipelajari: (ul type="circle")</h4>
    <ul type="circle">
        <li>Vuejs</li>
        <li>Svelte</li>
        <li>Reactjs</li>
    </ul>
    <h4>Tools untuk dipelajari: (ul type="none")</h4>
    <ul type="none">
        <li>Gulp</li>
        <li>NPM</li>
        <li>Js Lint</li>
    </ul>
    <h4>Pelajari juga: (ul type="disc")</h4>
    <ul type="disc">
        <li>JSON</li>
        <li>XML</li>
        <li>Markdown</li>
    </ul>
    </div>

    <div class="container" style="color: aqua"><h4>list5</h4></div>
    <div class="container" style="background-color: darkgray">
      <h4>Bahasa Pemrograman untuk dipelajari: 
        (ul style="list-style-image: url(https://assets.ubuntu.com/sites/ubuntu/latest/u/img/favicon.ico)")</h4>
    <ul style="list-style-image: url(https://assets.ubuntu.com/sites/ubuntu/latest/u/img/favicon.ico)">
        <li>Javascript</li>
        <li>PHP</li>
        <li>Java</li>
        <li>Python</li>
        <li>Kotlin</li>
    </ul>
    </div>


    <!--getbotsrap grid-->
    <div class="container">
      <h3 style="color: cyan">Alignment</h3>
      <p style="color: aliceblue">
        Gunakan utilitas perataan flexbox untuk menyelaraskan kolom secara vertikal dan horizontal.
      </p>
      <h3 style="color: cyan">Vertical alignment</h3>
      <p style="color: cadetblue">Alignment 1</p>
      <div class="row align-items-start" style="background-color: darkgrey">
        <div class="col">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Similique harum id commodi velit, ipsam minima sed ea, deserunt, 
          voluptatem ipsa architecto tempora quibusdam accusantium. 
          Quidem laboriosam officia similique adipisci quisquam.
        </div>
        <div class="col">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Eveniet, qui. Tenetur harum deleniti impedit, maiores voluptatum neque ut accusantium voluptatibus!
        </div>
        <div class="col">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, similique?
        </div>
      </div>
      <p>---2</p>
      <div class="row align-items-center" style="background-color: darkgrey">
        <div class="col">
          One of three columns Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Officiis, earum natus sit aliquam ab perspiciatis ratione ipsa molestiae, quae, 
          in laborum possimus! Rerum repellat illo quibusdam explicabo ullam corrupti neque!
        </div>
        <div class="col">
          One of three columns Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Eos voluptatem consequuntur dolores aperiam obcaecati commodi facilis veniam pariatur id animi!
        </div>
        <div class="col">
          One of three columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quisquam.
        </div>
      </div>
      <p>---3</p>
      <div class="row align-items-end" style="background-color: darkgrey">
        <div class="col">
          One of three columns Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Tenetur, animi? Ipsum aperiam veniam laudantium, 
          illum dicta aspernatur eveniet eligendi laboriosam vero expedita, blanditiis accusantium voluptas, 
          rem temporibus dignissimos voluptatem suscipit?
        </div>
        <div class="col">
          One of three columns Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Velit placeat cumque, dolor cupiditate quidem rem suscipit temporibus laborum quod deserunt!
        </div>
        <div class="col">
          One of three columns Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nemo!
        </div>
      </div>
    </div>
    <!------------------------------------------>
    
    <div class="container">
      <p style="color: cadetblue">Alignment 2</p>
      <div class="row"  style="background-color: darkgray">
        <div class="col align-self-start">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur expedita nesciunt ipsa totam vitae. 
          Est ducimus, corrupti illo itaque velit ipsa deleniti assumenda odio eveniet, 
          nesciunt reprehenderit rem repellat consequatur.One of three columns
        </div>
        <div class="col align-self-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio ducimus, 
          molestiae maiores dolorum aspernatur magnam sapiente dolore? Et, non?One of three columns
        </div>
        <div class="col align-self-end">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, temporibus!One of three columns
        </div>
      </div>
    </div>
    <!------------------------------------------->
    <div class="container">
      <h3 style="color: cyan">Horizontal alignment</h3>
      <div class="row justify-content-start" style="background-color: darkgrey">
        <div class="col-4">
          One of two columns Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, labore?
        </div>
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, maiores.
        </div>
      </div>
      <p>---2</p>
      <div class="row justify-content-center" style="background-color: darkgrey">
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, veritatis.
        </div>
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, natus?
        </div>
      </div>
      <p>---3</p>
      <div class="row justify-content-end" style="background-color: darkgrey">
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, laudantium.
        </div>
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, asperiores.
        </div>
      </div>
      <p>---4</p>
      <div class="row justify-content-around" style="background-color: darkgrey">
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, deserunt?
        </div>
        <div class="col-4">
          One of two columns Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, optio.
        </div>
      </div>
      <p>---5</p>
      <div class="row justify-content-between" style="background-color: darkgrey">
        <div class="col-4">
          One of two columns Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla, similique.
        </div>
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, a?
        </div>
      </div>
      <p>---6</p>
      <div class="row justify-content-evenly" style="background-color: darkgrey">
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, omnis.
        </div>
        <div class="col-4">
          One of two columns Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quaerat?
        </div>
      </div>
    </div>
    <!-------------------------------------------->
    <div class="container">
      <h3 style="color: cyan">Column wrapping</h3>
      <p style="color: aliceblue">
        Jika lebih dari 12 kolom ditempatkan dalam satu baris, setiap kelompok kolom tambahan akan, 
        sebagai satu unit, membungkus ke baris baru.
      </p>
      <div class="row" style="background-color: darkgray">
        <div class="col-9">.col-9</div>
        <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
        <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
      </div>
    </div>
    <!------------------------------------------>
    <div class="container">
      <h3 style="color: cyan">Column breaks</h3>
      <p style="color: aliceblue">Memecah kolom ke baris baru di flexbox memerlukan sedikit peretasan: 
        tambahkan elemen dengan lebar: 100% di mana pun Anda ingin membungkus kolom Anda ke baris baru.
        Biasanya ini dilakukan dengan beberapa baris ., tetapi tidak setiap metode implementasi 
        dapat menjelaskan hal ini.
      </p>
      <div class="row" style="background-color: darkgray">
        <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
        <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    
        <!-- Force next columns to break to new line -->
        <!--Paksa kolom berikutnya untuk berpindah ke baris baru-->
        <div class="w-100"></div>
    
        <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
        <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
      </div>
    </div>
    
    <div class="container">
      <p style="color: aliceblue">
        Anda juga dapat menerapkan jeda ini pada titik henti sementara 
        tertentu dengan utilitas tampilan responsif kami.
      </p>
      <div class="row" style="background-color: darkgray">
        <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    
        <!-- Force next columns to break to new line at md breakpoint and up 
        Paksa kolom berikutnya untuk berpindah ke baris baru di md breakpoint dan ke atas-->
        <div class="w-100 d-none d-md-block"></div>
    
        <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
      </div>
    </div>
  
    <!--kaki-->
@endsection