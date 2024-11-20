<div class="page-header theme-bg-dark py-5 text-center position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h1 class="page-heading single-col-max mx-auto">Documentation / Manual Book</h1>
        <div class="page-intro single-col-max mx-auto">Semua yang anda butuhkan kini tersedia secara online.</div>
        <div class="main-search-box pt-3 d-block mx-auto">
            <form class="search-form w-100">
                <!-- <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button> -->
            </form>
        </div>
    </div>
</div><!--//page-header-->
<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                <?php foreach ($sections as $section): ?>
                    <?php
                    $name_lower = strtolower(str_replace(' ', '_', $section['name_section']));
                    ?>
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas <?= $section['icon_section'] ?>"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text"><?= $section['name_section'] ?></span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                </div>
                                <a class="card-link-mask" href="<?= base_url('docs') ?>#<?= $name_lower ?>"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                <?php endforeach; ?>
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//container-->
</div><!--//page-content-->

<section class="cta-section text-center py-5 theme-bg-dark position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h3 class="mb-2 text-white mb-3">Manual Book Aresprj</h3>
        <div class="section-intro text-white mb-3 single-col-max mx-auto"></div>
        <div class="pt-3 text-center">
            <a class="btn btn-light" href="https://aresprj.com/" target="__blank">Buka Aresprj <i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
        </div>
    </div>
</section><!--//cta-section-->