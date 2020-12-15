<footer class="page-footer font-small mdb-color pt-4">

    <div class="container text-center text-md-left">

        <div class="row text-center text-md-left">

            <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Tên công ty</h6>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-2 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Thể loại</h6>
                <?php foreach ($categories as $category):?>
                <p>
                    <a href="index.php?controller=product&action=index&category_id=<?= $category['id']?>">
                        <?= $category['name']?>
                    </a>
                </p>
                <?php endforeach;?>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-3 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Hữu ích</h6>
                <p>
                    Tài khoản cá nhân
                </p>
                <p>
                    Đánh giá
                </p>
                <p>
                    Hỗ trợ
                </p>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-4 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="fas fa-home mr-3"></i> Hà Đông, Hà Nội</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> nguyenthienlinhptit@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 84376214299</p>
            </div>

        </div>

        <hr>

        <div class="row d-flex align-items-center">

            <div class="col-md-7 col-lg-8">

                <p class="text-center text-md-left">© 2020 Copyright Thien Linh
                </p>

            </div>

            <div class="col-md-5 col-lg-4 ml-lg-0">

                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

</footer>
