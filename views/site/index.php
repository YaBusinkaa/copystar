<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <h1 class="display-4 mx-auto">Здравствуйте!</h1>

        <p class="lead">Мы занимаемся продажей копировального оборудования.</p>
        <div class="mx-auto" style="width: 400px;margin: 0; padding: 0">
      <div class="card" style="width: 25rem;margin: 0; padding: 0">
            <img src="/web/images/2.png" class="card-img-top" alt="писька">
            <div class="card-body">
                <p class="card-text">мы делаем самые ахуенные копировальные оборудования.</p>
            </div>

        </div>
     </div><br>
        <div id="carouselExampleCaptions" class="carousel slide w-50 mx-auto " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"data-interval="2000">
                    <img src="https://i.pinimg.com/564x/03/82/25/038225e6276d6ee6eeddd47fc6da92c7.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Новинки компании</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item " data-interval="2000">
                    <img src="https://i.pinimg.com/564x/43/15/0c/43150c3f59d588b87a1b0e7150048439.jpg" class="d-block w-100" alt="кошька">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Новинки компании</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item "data-interval="2000">
                    <img src="https://i.pinimg.com/564x/1c/31/aa/1c31aa239202b02c23a385380cc3826e.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Новинки компании</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item "data-interval="2000">
                    <img src="https://i.pinimg.com/564x/82/fc/7e/82fc7e5630e07748547455db966f0bd4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Новинки компании</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item "data-interval="2000">
                    <img src="https://i.pinimg.com/564x/e8/be/cf/e8becf75b955b6f11f61f31ac7c3355e.jpg" class="d-block w-100" alt="...", >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Новинки компании</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>
