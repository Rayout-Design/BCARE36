<!doctype html>
<html lang="en">

<head>
    
    <?php
        $page = "home";

        require_once "head.php";
    ?>

</head>

<body>
    
    <?php require_once "header.php"; ?>

    <section class="header-home">
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="mb-5"><i>bcare auto<br>service center</i></h1>
                    <h5 class="text-white fs-3"><i>ที่นี่ &nbsp; <span class="text-orange">บีแคร์</span> &nbsp; ได้หมดทุกเรื่องรถ</i></h5>
                </div>
            </div>
        </div>
        <div class="header-services bg-gradient-2 position-absolute top-100 start-50 translate-middle p-4 w-75">
            <div class="row">
                <div class="col-auto my-auto">
                    <img src="./images/our-service-title.svg" alt="our services" class="header-services-title mx-3">
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-1.svg" alt="แม็ก-ยาง" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">แม็ก-ยาง</p>
                        </div>
                    </a>
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-2.svg" alt="ตั้งศูนย์" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">ตั้งศูนย์</p>
                        </div>
                    </a>
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-3.svg" alt="น้ำมันเครื่อง" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">น้ำมันเครื่อง</p>
                        </div>
                    </a>
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-4.svg" alt="เบรค" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">เบรค</p>
                        </div>
                    </a>
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-5.svg" alt="แบตเตอรี่" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">แบตเตอรี่</p>
                        </div>
                    </a>
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-6.svg" alt="ช่วงล่าง" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">ช่วงล่าง</p>
                        </div>
                    </a>
                </div>
                <div class="col header-services-list p-1">
                    <a href="<?=rootURL();?>">
                        <div class="border border-dark text-center pt-3 pb-2">
                            <img src="./images/service-icon-7.svg" alt="อะไหล่" class="w-100 mb-3">
                            <p class="mb-0 text-white fs-5">อะไหล่</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row my-5">
                <div class="col text-center">
                    <h2 class="fs-1">About <span class="fw-bold text-brown">BCARE</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md my-auto">
                    <img src="https://img.freepik.com/free-photo/auto-mechanic-checking-car_1303-14042.jpg?w=1380&t=st=1684523862~exp=1684524462~hmac=2f26d7c1adaaf9bdf0ffc866646db26dd6170d4e131b3d1cbfaf459d8160dc5d" alt="about bcare" class="w-100">
                </div>
                <div class="col-12 col-md my-auto offset-0 offset-md-1">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore veritatis repudiandae quos, obcaecati illo distinctio cum explicabo facere rerum earum at, iusto quae nemo enim soluta qui impedit doloremque aliquid.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, incidunt sunt voluptates architecto in qui error animi illum deleniti. Accusantium, quae. Est, inventore ex. Veniam incidunt eligendi in eum libero.</p>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi facere earum culpa magnam consectetur natus, nihil eaque est rerum suscipit quis sapiente commodi atque alias enim, omnis ab, neque repudiandae?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-brown">
        <div class="container">
            <div class="row my-5">
                <div class="col">
                    <h3 class="fs-1 text-white">BCARE Services</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="nav flex-column naservices me-3" id="services-tab" role="tablist" aria-orientation="vertical">
                        <div class="row services-nav my-1 py-2 active" id="services-1-tab" data-bs-toggle="pill" data-bs-target="#services-1" type="button" role="tab" aria-controls="services-1" aria-selected="true">
                            <div class="col-3">
                                <img src="./images/service-icon-1.svg" alt="แม็ก-ยาง" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">แม็ก-ยาง</h5>
                            </div>
                        </div>
                        <div class="row services-nav my-1 py-2" id="services-2-tab" data-bs-toggle="pill" data-bs-target="#services-2" type="button" role="tab" aria-controls="services-2" aria-selected="false">
                            <div class="col-3">
                                <img src="./images/service-icon-2.svg" alt="ตั้งศูนย์" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">ตั้งศูนย์</h5>
                            </div>
                        </div>
                        <div class="row services-nav my-1 py-2" id="services-3-tab" data-bs-toggle="pill" data-bs-target="#services-3" type="button" role="tab" aria-controls="services-3" aria-selected="false">
                            <div class="col-3">
                                <img src="./images/service-icon-3.svg" alt="น้ำมันเครื่อง" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">น้ำมันเครื่อง</h5>
                            </div>
                        </div>
                        <div class="row services-nav my-1 py-2" id="services-4-tab" data-bs-toggle="pill" data-bs-target="#services-4" type="button" role="tab" aria-controls="services-4" aria-selected="false">
                            <div class="col-3">
                                <img src="./images/service-icon-4.svg" alt="เบรค" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">เบรค</h5>
                            </div>
                        </div>
                        <div class="row services-nav my-1 py-2" id="services-5-tab" data-bs-toggle="pill" data-bs-target="#services-5" type="button" role="tab" aria-controls="services-5" aria-selected="false">
                            <div class="col-3">
                                <img src="./images/service-icon-5.svg" alt="แบตเตอรี่" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">แบตเตอรี่</h5>
                            </div>
                        </div>
                        <div class="row services-nav my-1 py-2" id="services-6-tab" data-bs-toggle="pill" data-bs-target="#services-6" type="button" role="tab" aria-controls="services-6" aria-selected="false">
                            <div class="col-3">
                                <img src="./images/service-icon-6.svg" alt="ช่วงล่าง" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">ช่วงล่าง</h5>
                            </div>
                        </div>
                        <div class="row services-nav my-1 py-2" id="services-7-tab" data-bs-toggle="pill" data-bs-target="#services-7" type="button" role="tab" aria-controls="services-7" aria-selected="false">
                            <div class="col-3">
                                <img src="./images/service-icon-7.svg" alt="อะไหล่" class="w-100">
                            </div>
                            <div class="col my-auto">
                                <h5 class="mb-0">อะไหล่</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md offset-0 offset-md-1">
                    <div class="tab-content" id="services-tabContent">
                        <div class="tab-pane fade show active" id="services-1" role="tabpanel" aria-labelledby="services-1-tab" tabindex="0">
                            <img src="https://img.freepik.com/free-photo/technician-with-blue-workwear-holding-wrench-tire-while-showing-thumb-up_146671-19614.jpg?w=1380&t=st=1684534734~exp=1684535334~hmac=e5ee3636d090c7bf89607b8a58b9afa72391457faa863e579a24c0bd27dad4dc" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                        <div class="tab-pane fade" id="services-2" role="tabpanel" aria-labelledby="services-2-tab" tabindex="0">
                            <img src="https://img.freepik.com/free-photo/auto-mechanic-checking-car_1303-14042.jpg?w=1380&t=st=1684534628~exp=1684535228~hmac=c9a6f410dc5d987a5de48cf2b69a923acb06c9eaaec1670c931df7c4ed5fae3d" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                        <div class="tab-pane fade" id="services-3" role="tabpanel" aria-labelledby="services-3-tab" tabindex="0">
                            <img src="https://img.freepik.com/premium-photo/asian-car-mechanic-auto-repair-shop-is-checking-engine-customers-who-use-cars-repair-services-mechanic-will-work-garage_140555-248.jpg?w=1380" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                        <div class="tab-pane fade" id="services-4" role="tabpanel" aria-labelledby="services-4-tab" tabindex="0">
                            <img src="https://img.freepik.com/free-photo/mechanic-working-car-suspension-repair-shop_52683-107770.jpg?w=1380&t=st=1684534990~exp=1684535590~hmac=334b985d67349696a2bd96e46a10afea3dc90eaf9af18b0630a87b110626472a" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                        <div class="tab-pane fade" id="services-5" role="tabpanel" aria-labelledby="services-5-tab" tabindex="0">
                            <img src="https://img.freepik.com/free-photo/muscular-car-service-worker-repairing-vehicle_146671-19705.jpg?w=1380&t=st=1684534713~exp=1684535313~hmac=1477289534bed7ef03e034f508f6c94c920decdc2b1b3e51eade8e0236286a6a" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                        <div class="tab-pane fade" id="services-6" role="tabpanel" aria-labelledby="services-6-tab" tabindex="0">
                            <img src="https://img.freepik.com/premium-photo/auto-car-repair-service-center-mechanic-examining-car-suspension_136930-6.jpg?w=1380" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                        <div class="tab-pane fade" id="services-7" role="tabpanel" aria-labelledby="services-7-tab" tabindex="0">
                            <img src="https://img.freepik.com/free-photo/various-work-tools-worktop_1170-1505.jpg?w=1380&t=st=1684535062~exp=1684535662~hmac=2737dce70958ebe696094d2d6008bf6521aadf9a62334cfb662d6c615c18567d" alt="" class="w-100 mb-3">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum aliquam dolores, praesentium est ipsam provident quia voluptatibus, laboriosam laborum reprehenderit facilis, error dignissimos. Necessitatibus pariatur cumque delectus et ab.</p>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi aliquid laborum ratione quos libero? Ut maiores impedit quae laboriosam molestiae dicta, sunt, reprehenderit minima explicabo fugit vero voluptatibus libero!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row my-5">
                <div class="col">
                    <h4 class="fs-1">News</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 my-3">
                    <div class="card text-bg-danger shadow">
                        <img src="https://img.freepik.com/free-photo/mechanic-hand-checking-fixing-broken-car-car-service-garage_146671-19718.jpg?w=1380&t=st=1684535384~exp=1684535984~hmac=4e21128721f6b8d72828663dca603fd5cd5c71a0d1225a8c16098b700594336f" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-overflow">News #1</h5>
                            <p class="card-text text-overflow overflow-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos beatae distinctio optio laborum enim error aperiam corporis eos corrupti repellat accusantium neque quas nemo alias quia, rerum consequuntur suscipit.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-light w-100">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card text-bg-danger shadow">
                        <img src="https://img.freepik.com/free-photo/car-repair-maintenance-theme-mechanic-uniform-working-auto-service_627829-3918.jpg?w=1380&t=st=1684535561~exp=1684536161~hmac=876e621ec7693039712e8a65ecae62f8bf023a3b49557e44db83362491daf240" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-overflow">News #2</h5>
                            <p class="card-text text-overflow overflow-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos beatae distinctio optio laborum enim error aperiam corporis eos corrupti repellat accusantium neque quas nemo alias quia, rerum consequuntur suscipit.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-light w-100">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card text-bg-danger shadow">
                        <img src="https://img.freepik.com/premium-photo/mechanic-working-car-maintenance_41050-2402.jpg?w=1380" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-overflow">News #3</h5>
                            <p class="card-text text-overflow overflow-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos beatae distinctio optio laborum enim error aperiam corporis eos corrupti repellat accusantium neque quas nemo alias quia, rerum consequuntur suscipit.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-light w-100">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card text-bg-danger shadow">
                        <img src="https://img.freepik.com/free-photo/car-repairman-wearing-white-uniform-standing-holding-wrench-that-is-essential-tool-mechanic_1150-16589.jpg?w=1380&t=st=1684535583~exp=1684536183~hmac=632139e133ab1c79415a8258df065eff65b27ec20f1584af0fc024b3e3704d14" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-overflow">News #4</h5>
                            <p class="card-text text-overflow overflow-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos beatae distinctio optio laborum enim error aperiam corporis eos corrupti repellat accusantium neque quas nemo alias quia, rerum consequuntur suscipit.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-light w-100">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "footer.php"; ?>
    <?php require_once "js.php"; ?>

</body>

</html>