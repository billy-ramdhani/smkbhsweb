 <!-- Hero Start -->
 <div class="container-fluid bg-primary hero-blog">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-12 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white text-center mb-4 animated slideInRight">Mading Sekolah</h1>
                    <nav aria-label="breadcrumb">
                    <p class="text-white mb-4 animated text-center slideInRight">"Kreativitas dan Pendidikan Berkolaborasi, Melangkah Bersama Menuju Masa Depan Terang di SMK BHS."</p>
                    </nav>
                </div>
               
            </div>
        </div>
 </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!--------------------Mading News ------------------------->
    <main >
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <div class="row py-3">
                <div class="main_title2 py-3">
                            <h2>Mading Terbaru</h2>
                </div>
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                     <?php if (!empty($lastNews)): ?>
                          <!-- Menampilkan data dari elemen pertama -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img case-item d-flex rounded">
                                <img style="max-width: auto; max-height: 500px;" src="<?= base_url('assets/images/posting/'.$lastNews[0]->photo); ?>" alt="">
                                <div class="trend-top-cap">
                                    <span class="bg-primary text-light  "><?= $lastNews[0]->category_name; ?></span>
                                    <h2><a href="<?= base_url("blog/read/".$lastNews[0]->seo_title) ?>"><?= $lastNews[0]->title; ?></a></h2>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                <div class="trend-top-cap">
                                    <h2><a href="details.html">Tidak Ada Berita</a></h2>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                    <?php foreach ($trending as $tr) :?> 
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= base_url("assets/images/posting/$tr->photo") ?>" style="width: 120px; height: 100px;" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="bg-primary text-white" style="border-radius: 5px;"><?= $tr->category_name ?></span>
                                <h4><a href="<?= base_url("blog/read/$tr->seo_title") ?>"><?= $tr->title ?></a></h4>
                            </div>
                        </div>
                    <?php endforeach ?> 
                        </div>

                </div>
            </div>
        </div>
    </div>
                    <!--  Recent Articles start -->
    <div class="recent-articles ">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_title2 py-2">
                            <h2>Mading Populer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                        <?php foreach ($lastNews as $ln) :?> 
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img style="max-width: auto; max-height: 200px;" src="<?= base_url("assets/images/posting/$ln->photo") ?>" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="bg-primary text-white" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;"><?= $ln->category_name ?></span>
                                    <h4 style="margin-left: 5px;"><a href="<?= base_url("blog/read/$ln->seo_title") ?>"><?= word_limiter($ln->title, 20) ?></a></h4>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->
   <!-- Whats New Start -->
    <section class="whats-news-area pt-10 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="main_title2 py-2" style="margin-left: 5px;">
                            <h3>Mading Pilihan</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    <?php foreach($navbar as $n) : ?>
                                    <a class="nav-item nav-link" id="<?= $n->category_name ?>" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?= $n->category_name ?></a>
                                    <?php endforeach ?>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php foreach($post as $p)  :?>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?= base_url("assets/images/posting/$p->photo") ?>" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1"><?= $p->category_name ?></span>
                                                    <a href="<?= base_url("blog/read/$p->seo_title") ?>" class="float-right"><i class="fa fa-calendar btn btn-sm px-3 mb-3" aria-hidden="true"> <?= mediumdate_indo($p->date) ?></i>
                  </a>
                                                    <h4><a href="<?= base_url("blog/read/$p->seo_title") ?>"><?= $p->title ?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    </div>
                                     <!-- Pagination -->
         <div class="row mt-5">
               <div class="col">
                     <?= $pagination ?>
               </div> 
            </div>
            <!-- End of Pagination -->
                                </div>
                            </div>
                            <!-- Card two -->
                            <?php foreach($navbar as $n) : ?>
                            <div class="tab-pane fade" id="<?= $n->category_name ?>" role="tabpanel" aria-labelledby="<?= $n->category_name ?>tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?= base_url('assets/depan/img/news/whatNews1.jpg')?>" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?= base_url('assets/depan/img/news/whatNews2.jpg')?> alt=">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?= base_url('assets/depan/img/news/whatNews3.jpg')?>" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?= base_url('assets/depan/img/news/whatNews4.jpg')?>" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php endforeach ?>
                            <!-- card Six -->
                        
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="main_title2 py-2">
                    <h3>Follow Us</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="<?= base_url('assets/depan/img/news/icon-fb.png')?>" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="<?= base_url('assets/depan/img/news/icon-tw.png')?>" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="<?= base_url('assets/depan/img/news/icon-ins.png')?>" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="<?= base_url('assets/depan/img/news/icon-yo.png')?>" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!-- Start Youtube 
    <div class="youtube-area video-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/iq0IWusoAIA?si=VeTwfSrzsMctHJcY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Politics</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <iframe  src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
  End Start youtube -->
    </main>
 <!--------------------- Mading End ----------------------->