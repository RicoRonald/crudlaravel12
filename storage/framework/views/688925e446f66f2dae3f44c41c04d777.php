<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel</title>
    </head>
    <body>
        
        <h3>Data Pegawai</h3>

        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($p->pegawai_nama); ?></td>
                <td><?php echo e($p->pegawai_jabatan); ?></td>
                <td><?php echo e($p->pegawai_umur); ?></td>
                <td><?php echo e($p->pegawai_alamat); ?></td>
                <td>
                    <a href="/pegawai/edit/<?php echo e($p->pegawai_id); ?>">Edit</a>

                    <a href="/pegawai/hapus/<?php echo e($p->pegawai_id); ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>    
</html><?php /**PATH C:\xampp1\htdocs\data-pegawai\resources\views/index.blade.php ENDPATH**/ ?>