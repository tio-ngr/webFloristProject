<div class="container-fluid">

    <div class="row text-center mt-5">

        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/produk/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nm_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge text-white bg-success mb-3">Rp<?php echo number_format($brg->harga,0,',','.')?></span>
                    <?php echo anchor('dashboard/tambahKeranjang/'.$brg->id_brg,'<div class="btn btn-primary btn-sm">Masukkan Keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-success btn-sm">Detail</div>') ?>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>