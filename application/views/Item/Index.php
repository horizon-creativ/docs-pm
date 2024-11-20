<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                <div class="card p-3">
                    <div class="">
                        <a href="<?= base_url('item/form') ?>" class="btn btn-primary float-end">Add Item</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Section</th>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($items as $item): ?>
                                <?php
                                $getSection = $this->MSection->getById($item['id_section']);
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $getSection['name_section'] ?></td>
                                    <td><?= $item['number_item'] ?></td>
                                    <td><?= $item['name_item'] ?></td>
                                    <td>
                                        <a href="<?= base_url('item/form/') . $item['id_item'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('item/delete/') . $item['id_item'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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