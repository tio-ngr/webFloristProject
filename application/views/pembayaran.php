<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total=0;
                if($keranjang=$this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total=$grand_total+$item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda : Rp".number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url('dashboard/prosesPesanan') ?> ">
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="nomorHP" placeholder="Nomor HP Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>J&T</option>
                        <option>JNE</option>
                        <option>SICEPAT</option>
                        <option>POS INDONESIA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select class="form-control">
                        <option class="sub">Transfer BANK</option>
                        <option>GOPAY</option>
                        <option>OVO</option>
                        <option>DANA</option>
                        <option>LINK AJA</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">PESAN</button>
            </form>
            <?php
                } else{
                    echo "<h4>Anda belum menambah apapun ke keranjang";
                }
                ?>
        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>