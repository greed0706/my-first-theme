<div class="container-fluid p-0 justify-content-between align-items-center main-menu collapse" id="collapseExample">
    <?php get_template_part('template-parts/svg-sprite'); ?>

    <!-- Header menu -->
    <div class="d-flex justify-content-between align-items-center p-3 bg-light border-bottom">
        <span class="h5 mb-0">Tất cả chuyên mục</span>
        <a class="text-danger" data-bs-toggle="collapse" href="#collapseExample" title="Đóng">
            Đóng <span class="icon-close"></span>
        </a>
    </div>

    <!-- Content menu -->
    <div class="container-fluid p-0 main-menu">
        <div class="row p-3 justify-content-center align-items-center w-85" id="content-menu">
            <!-- Cột trái: Category chính + subcategory -->
            <div class="col-12 col-md-6 mb-3 mb-md-0 overflow-auto " style="max-height: 700px;">
                <ul class="category-list list-unstyled d-flex row">
                    <?php
                    $categories = get_categories([
                        'parent' => 0,
                        'hide_empty' => false,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    ]);

                    foreach ($categories as $cat) {
                        echo '<li class="category-item mb-3 col-2">';
                        echo '<a href="' . get_category_link($cat->term_id) . '" class="fw-bold text-primary d-block mb-1">'
                            . esc_html($cat->name) . '</a>';

                        // Subcategories
                        $subcategories = get_categories([
                            'parent' => $cat->term_id,
                            'hide_empty' => false
                        ]);

                        if (!empty($subcategories)) {
                            echo '<ul class="subcategory-list list-unstyled ps-3">';
                            foreach ($subcategories as $subcat) {
                                echo '<li class="subcategory-item">';
                                echo '<a href="' . get_category_link($subcat->term_id) . '" class="text-secondary">'
                                    . esc_html($subcat->name) . '</a>';
                                echo '</li>';
                            }
                            echo '</ul>';
                        }

                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <!-- Cột phải: Spotlight, link phụ, Liên hệ, Ứng dụng -->
            <div class="col-4 col-md-6 w-15">

                <!-- Spotlight -->
                <ul class="list-unstyled mb-3">
                    <li><a href="#" class="text-dark">Spotlight</a></li>
                    <li><a href="#" class="text-dark">Ảnh</a></li>
                    <li><a href="#" class="text-dark">Infographics</a></li>
                </ul>

                <!-- Mới nhất, Xem nhiều… -->
                <ul class="list-unstyled mb-3">
                    <li><a href="#" class="text-dark">Mới nhất</a></li>
                    <li><a href="#" class="text-dark">Xem nhiều</a></li>
                    <li><a href="#" class="text-dark">Tin nóng</a></li>
                    <li><a href="#" class="text-dark">Lịch vạn niên</a></li>
                </ul>

                <!-- Link phụ -->
                <ul class="list-unstyled mb-3">
                    <li><a href="#" class="text-dark">Rao vặt</a></li>
                </ul>

                <!-- Liên hệ -->
                <div class="mt-4">
                    <p class="fw-bold">Liên hệ</p>
                    <a href="#" class="d-block text-dark">
                        <svg class="ic ic-mail me-2">
                            <use xlink:href="#Mail"></use>
                        </svg>
                        Tòa soạn
                    </a>
                </div>

                <!-- Tải ứng dụng -->
                <div class="mt-4">
                    <p class="fw-bold">Tải ứng dụng</p>
                    <a href="#" class="d-block text-dark">
                        <svg class="ic ic-vne me-2" width="20" height="20">
                            <use xlink:href="#letter-E"></use>
                        </svg>
                        VnExpress
                    </a>
                    <a href="#" class="d-block text-dark">
                        <svg class="ic ic-vne me-2" width="20" height="20">
                            <use xlink:href="#letter-E"></use>
                        </svg>
                        International
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>