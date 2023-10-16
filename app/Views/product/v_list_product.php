<div class="col-sm-12">
<a href="<?= base_url('Product/tambah')?>" class="btn btn-primary">Tambah Data</a>
<br><br>
<?php
    if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
    <?= session()->getFlashdata('success'); ?>
</div>
   <?php } ?>

<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Product</th>
            <th>Deskripsi Product</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($product as $key => $value) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $value['product_name']; ?></td>
            <td><?= $value['product_description']; ?></td>
            <td>
                <a href="<?= base_url('product/edit/'.$value['product_id']) ?>" class="btn-warning">Edit</a>
                <a href="<?= base_url('product/delete/'.$value['product_id']) ?>" class="btn-danger" onClick="return confirm('Apakah Ingin Hapus Data..?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
 </table>   
 </div>