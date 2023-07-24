<?= $this->extend('backend/layouts/overview') ?>

<?= $this->section('content') ?>

<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      <h3><strong>Sub Categories</strong></h3>
    </div>

    <div class="col-auto ms-auto text-end mt-n1">
      <button type="button" onclick="newModal()" class="btn btn-primary">
        <i class="fa fa-plus-square fa-fw"></i> New Sub Category
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <table id="dt_table" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="primary-header-modal" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formModal">
                <div class="modal-header modal-colored-header bg-primary text-white">
                    <h4 class="modal-title text-white"></h4>
                    <button type="button" onclick="cancelModal()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input name="id" id="id" type="hidden" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="mb-3">
                        <label for="categories_id" class="form-label">Category</label>
                        <select name="categories_id" id="categories_id" class="form-select">
                            <option value="">Select Category</option>
                            <?php foreach ($categories as $value) : ?>
                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="8"></textarea>
                    </div>
                    <div>
                        <label for="is_active" class="form-label">Status</label>
                        <select name="is_active" id="is_active" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="cancelModal()" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="submitModal" class="btn btn-light-primary text-primary font-weight-medium">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
