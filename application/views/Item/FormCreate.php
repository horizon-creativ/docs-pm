<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="card-body">
                            <form action="<?= base_url('item/create') ?>" method="post">
                                <div class="form-group">
                                    <label for="">Section</label>
                                    <select name="id_section" id="" class="form-control">
                                        <option value="0">=== Pilih Section ===</option>
                                        <?php foreach ($sections as $section): ?>
                                            <option value="<?= $section['id_section'] ?>"><?= $section['name_section'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Number Item</label>
                                    <input type="number" name="number_item" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Name Item</label>
                                    <input type="text" name="name_item" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea name="text_item" class="form-control" id="editor-textarea" cols="30" rows="10">

                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//container-->
</div><!--//page-content-->