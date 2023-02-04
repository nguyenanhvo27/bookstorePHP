<div class="container">
  <form action='index.php?controller=sach&action=updateBook'method='POST' enctype='multipart/form-data'>
    <div class="row">
      <div class="col-6 col-sm-6">
        Mã sách<input type="text" name='masach' class="form-control" value="<?php echo $dataUpdate['masach'] ?>">

      </div>
      <div class="col-6 col-sm-6">
        Tên sách <input type="text" name='tensach' class="form-control"value="<?php echo $dataUpdate['tensach'] ?>">
      </div>

      <!-- Force next columns to break to new line -->
      <div class="w-100"></div>

      <div class="col-6 col-sm-6">
        Giá sách <input type="number" name='gia' class="form-control" value="<?php echo $dataUpdate['gia'] ?>">
      </div>
      <div class="col-6 col-sm-6">
        Hình sách <input type="file" name='hinh' class="form-control" value="<?php echo $dataUpdate['hinh'] ?>"> <br>
      </div>
      <div class="col-6 col-sm-6">
        Loại <select name="maloai" id="" class="form-control" >
          <?php foreach ($dataloai as $r) {
          ?>
            <option value="<?php echo $r['maloai'] ?>" <?=$dataUpdate["maloai"]==$r["maloai"] ? 'selected = "selected"':'' ;?>><?php echo $r['tenloai'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="col-6 col-sm-6">
        Nhà xuất bản <select name="manxb" id="" class="form-control">
          <?php foreach ($datanxb as $r) {
          ?>
            <option value="<?php echo $r['manxb'] ?>"<?=$dataUpdate["manxb"]==$r["manxb"] ? 'selected = "selected"':'' ;?>><?php echo $r['tennxb'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    Mô tả <textarea class="form-control" name="mota" id="" rows="3" ><?php echo $dataUpdate['mota'] ?></textarea> <br>
    <button type="submit" class="btn btn-primary" value='Thêm mới'>update</button>

  </form>
</div>