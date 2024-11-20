<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="card-body">
                            <form action="<?= base_url('section/update/') . $section['id_section'] ?>" method="post">
                                <div class="form-group">
                                    <label for="">Icon Section</label>
                                    <input type="text" name="icon_section" id="" value="<?= $section['icon_section'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Number Section</label>
                                    <input type="number" name="number_section" id="" value="<?= $section['number_section'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Name Section</label>
                                    <input type="text" name="name_section" <?= $section['name_section'] ?> class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea name="text_section" class="form-control" id="editor-textarea" cols="30" rows="10">
                                        <?= $section['text_section'] ?>
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