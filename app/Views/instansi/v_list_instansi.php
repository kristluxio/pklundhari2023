<div class="col-sm-12">
    <a href="<?= base_url('instansi/tambah') ?>" class="btn btn-primary">Tambah Data</a>
 <br><br>
 <?php
    if(!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
<?= session()->getFlashdata('success'); ?>
    </div>
    <?php } ?>
 
         <table id="examplel" class="table table-bordered table-striped">
         <thead>
            <tr>
                <th>No</th>
                <th>Nama Instansi</th>
                <th>Ket Instansi</th>
                <th>Logo Instansi</th>
                <th>Action</th> 
        </tr>
        <thead>
        <tbody>
        <?php $no=1; foreach ($instansi as $key => $value) { ?>
            <tr>
         <td><?= $no++; ?></td>
        <td><?= $value['nama_instansi']; ?></td>
        <td><?= $value['ket_instansi']; ?></td> 
        <td><?= $value['logo_instansi']; ?></td>
        <td>
            <a href="<?= base_url('instansi/edit/'.$value['id_instansi']) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url('instansi/delete/'.$value['id_instansi']) ?>" class="btn btn-danger" onClick="return confirm('Apakah Ingin Hapus Data...?') ">Delete</a>
        </td>
    </tr>
    <?php } ?>
</tbody> 
</table>
</div>