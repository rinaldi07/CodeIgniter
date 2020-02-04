<div class="box-header with-border">
              <h3 class="box-title">Tambah Data Produk</h3>
            </div>
            <form action="<?php echo base_url(); ?>AdminMain/simpan_produk" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $data_produk['id']; ?>">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" class="form-control" name="tshirt_name" id="exampleInputtext1" placeholder="Nama Produk" value="<?php echo $data_produk["tshirt_name"]; ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Url Produk/Slug</label>
                  <input type="text" class="form-control" name="sluga" id="exampleInputtext1" placeholder="Masukan url Produk/slug" value="<?php echo $data_produk["sluga"]; ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Produk</label>
                  <input type="text" class="form-control" name="tshirt_price" id="exampleInputtext1" placeholder="Harga Produk"  value="<?php echo $data_produk["tshirt_price"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Produk Coret</label>
                  <input type="number" class="form-control" name="harga_coret" id="exampleInputtext1" placeholder="Harga Produk exp=10000"  value="<?php echo $data_produk["harga_coret"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Name</label>
                    <select class="form-control" name="brand_id">
                       <option value=''>- Pilih -</option>
                        <?php foreach ($cetakbrand as $data) { ?>
                            <?php if ($data_produk['brand_name'] ==$data["brand_name"]) { ?>
                         <option value="<?php echo $data["brand_id"]; ?>" selected><?php echo $data["brand_name"]; ?></option>
                            <?php }else{ ?>
                                <option value="<?php echo $data["brand_id"]; ?>"><?php echo $data["brand_name"]; ?></option>
                        <?php } } ?>
                   
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi Produk</label>
                  <textarea name="product_description" class="form-control ckeditor" id="ckeditor" rows="3"><?php echo $data_produk["product_description"]; ?></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control" type="file" name="tshirt_image" id="exampleInputFile" >
                  <p class="help-block">SILAHKAN UPLOAD GAMBAR PRODUK </p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Are you sure to add?
                  </label>
                </div>
              </div>
              
              <div class="box-footer">
                <input type="submit" class="btn btn-primary nilai"  name="submit" value="simpan">
               
              </div>
            </form>