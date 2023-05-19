<nav class="navbar navbar-expand-lg py-0 bg-black">
    <div class="row w-100 mx-0">
        <div class="col-12 col-md-auto my-auto py-3 d-flex h-100">
            <a href="<?=rootURL();?>" class="ms-0 ms-5">
                <img src="<?=rootURL();?>images/logo.svg" alt="<?=$MetaResult['header_title_'.$lang];?>" id="HeaderLogo" class="px-3 px-md-5">
            </a>
            <button class="navbar-toggler my-auto bg-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarHeader" aria-controls="NavbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md my-auto px-0">
            <div class="row mx-0 py-3 bg-white">
                <div class="col col-md-auto ms-auto text-center">
                    <a href="<?=rootURL();?>branches.php" class="text-dark fw-bold"><i class="fa-solid fa-magnifying-glass"></i> &nbsp; ค้นหาศูนย์บริการ</a>
                </div>
                <div class="col-auto text-center">
                    <a href="<?=rootURL();?>reservation.php" class="text-dark fw-bold"><i class="fa-solid fa-square-phone"></i> &nbsp; นัดหมาย</a>
                </div>
                <div class="col-auto text-center">
                    <span class="switch-lang <?php if($lang == "en") { echo "cursor-pointer text-decoration-underline fw-bold text-brown"; } ?>" data-language="th">ไทย</span>
                     &nbsp; | &nbsp; 
                    <span class="switch-lang <?php if($lang == "th") { echo "cursor-pointer text-decoration-underline fw-bold text-brown"; } ?>" data-language="en">ENG</span>
                </div>
            </div>
            <div class="collapse navbar-collapse bg-gray py-3" id="NavbarHeader">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="home") { echo "active"; } ?>" <?php if($page=="home") { echo 'aria-current="page"'; } ?> href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="about") { echo "active"; } ?>" <?php if($page=="about") { echo 'aria-current="page"'; } ?> href="#">เกี่ยวกับบีแคร์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="products") { echo "active"; } ?>" <?php if($page=="products") { echo 'aria-current="page"'; } ?> href="#">สินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="services") { echo "active"; } ?>" <?php if($page=="services") { echo 'aria-current="page"'; } ?> href="#">บริการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="promotions") { echo "active"; } ?>" <?php if($page=="promotions") { echo 'aria-current="page"'; } ?> href="#">โปรโมชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="privilledge") { echo "active"; } ?>" <?php if($page=="privilledge") { echo 'aria-current="page"'; } ?> href="#">สิทธิพิเศษ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="articles") { echo "active"; } ?>" <?php if($page=="articles") { echo 'aria-current="page"'; } ?> href="#">ข่าวสารและกิจกรรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="contact") { echo "active"; } ?>" <?php if($page=="contact") { echo 'aria-current="page"'; } ?> href="#">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>