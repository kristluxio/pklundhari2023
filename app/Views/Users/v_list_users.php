<div class="col-sm-12">
    <a href="<?= base_url('users/tambah') ?>" class="btn btn-primary">Tambah Data</a>
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
                <th>Nip</th>
                <th>Nama</th>
                <th>No_Hp</th>
                <th>Password</th>
                <th>Role</th>
                <th>Email</th>
                <th>Action</th> 
        </tr>
        <thead>
        <tbody>
        <?php $no=1; foreach ($users as $key => $value) { ?>
            <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['nip']; ?></td>
        <td><?= $value['nama']; ?></td>
        <td><?= $value['no_hp']; ?></td>
        <td><?= $value['password']; ?></td>
        <td><?= $value['role']; ?></td>
        <td><?= $value['email']; ?></td>
        <td>
            <a href="<?= base_url('users/edit/'.$value['nip']) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url('users/delete/'.$value['nip']) ?>" class="btn btn-danger" onClick="return confirm('Apakah Ingin Hapus Data...?') ">Delete</a>
        </td>
    </tr>
    <?php } ?>
</tbody> 
</table>
</div>