<div class="col-sm-12">
    <a href="<?= base_url('tersangka/tambah') ?>" class="btn btn-primary">Tambah Data</a>
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
                <th>Id_berkas</th>
                <th>No_ktp</th>
                <th>Nama_tersangka</th>
                <th>Action</th> 
        </tr>
        <thead>
        <tbody>
        <?php $no=1; foreach ($tersangka as $key => $value) { ?>
            <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['id_berkas']; ?></td>
        <td><?= $value['no_ktp']; ?></td>
        <td><?= $value['nama_tersangka']; ?></td>
        <td>
            <a href="<?= base_url('tersangka/edit/'.$value['id_berkas']) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url('tersangka/delete/'.$value['id_berkas']) ?>" class="btn btn-danger" onClick="return confirm('Apakah Ingin Hapus Data...?') ">Delete</a>
        </td>
    </tr>
    <?php } ?>
</tbody> 
</table>
</div>