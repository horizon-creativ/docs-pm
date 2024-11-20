<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                <div class="card p-3">
                    <div class="">
                        <a href="<?= base_url('section/form') ?>" class="btn btn-primary float-end">Add Section</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Icon</th>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($sections as $section): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><i class="fas <?= $section['icon_section'] ?>"></i></td>
                                    <td><?= $section['number_section'] ?></td>
                                    <td><?= $section['name_section'] ?></td>
                                    <td>
                                        <a href="<?= base_url('section/form/') . $section['id_section'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('section/delete/') . $section['id_section'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//container-->
</div><!--//page-content-->