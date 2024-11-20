<div class="docs-wrapper">
    <div id="docs-sidebar" class="docs-sidebar">
        <div class="top-search-box d-lg-none p-3">
            <form class="search-form">
                <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <nav id="docs-nav" class="docs-nav navbar">
            <ul class="section-items list-unstyled nav flex-column pb-3">
                <?php foreach ($sections as $section): ?>
                    <?php
                    $items = $this->MItem->getByIdSectionAndSortByNumber($section['id_section']);
                    $name_lower = strtolower(str_replace(' ', '_', $section['name_section']));
                    ?>
                    <li class="nav-item section-title"><a class="nav-link scrollto " href="#<?= $name_lower ?>"><span class="theme-icon-holder me-2"><i class="fas <?= $section['icon_section'] ?>"></i></span><?= $section['name_section'] ?></a></li>
                    <?php foreach ($items as $item): ?>
                        <?php
                        $name_lower_item = strtolower(str_replace(' ', '_', $item['name_item']));
                        ?>
                        <li class="nav-item"><a class="nav-link scrollto" href="#<?= $name_lower_item ?>"><?= $item['name_item'] . " " . $section['number_section'] . "." . $item['number_item'] ?></a></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>

        </nav><!--//docs-nav-->
    </div><!--//docs-sidebar-->
    <div class="docs-content">
        <div class="container">
            <?php foreach ($sections as $section2): ?>
                <?php
                $items2 = $this->MItem->getByIdSectionAndSortByNumber($section2['id_section']);
                $name_lower2 = strtolower(str_replace(' ', '_', $section2['name_section']));
                ?>
                <header class="docs-header">
                    <h1 class="docs-heading"><?= $section2['name_section'] ?> <span class="docs-time">Last updated: <?= date('d M Y', strtotime($section2['updated_at'])) ?></span></h1>
                    <section class="docs-intro">
                        <?= $section2['text_section'] ?>
                    </section>
                </header>
                <?php foreach ($items2 as $item2) : ?>
                    <?php
                    $name_lower_item2 = strtolower(str_replace(' ', '_', $item2['name_item']));
                    ?>
                    <article class="docs-article" id="<?= $name_lower2 ?>">

                        <section class="docs-section" id="<?= $name_lower_item2 ?>">
                            <h2 class="section-heading"><?= $item2['name_item'] . " " . $section2['number_section'] . "." . $item2['number_item'] ?></h2>

                            <?= $item2['text_item'] ?>

                        </section><!--//section-->
                    </article>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div><!--//docs-wrapper-->