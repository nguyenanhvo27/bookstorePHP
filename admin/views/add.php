<div class="container">
  <form action='index.php?controller=sach&action=addBook'method='POST' enctype='multipart/form-data'>
    <div class="row">
      <div class="col-6 col-sm-6">
        Mã sách<input type="text" name='masach' class="form-control">
      </div>
      <div class="col-6 col-sm-6">
        Tên sách <input type="text" name='tensach' class="form-control">
      </div>

      <!-- Force next columns to break to new line -->
      <div class="w-100"></div>

      <div class="col-6 col-sm-6">
        Giá sách <input type="number" name='gia' class="form-control">
      </div>
      <div class="col-6 col-sm-6">
        Hình sách <input type="file" name='hinh' class="form-control"> <br>
      </div>
      <div class="col-6 col-sm-6">
        Loại <select name="maloai" id="" class="form-control">
          <?php foreach ($dataloai as $r) {
          ?>
            <option value="<?php echo $r['maloai'] ?>"><?php echo $r['tenloai'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="col-6 col-sm-6">
        Nhà xuất bản <select name="manxb" id="" class="form-control">
          <?php foreach ($datanxb as $r) {
          ?>
            <option value="<?php echo $r['manxb'] ?>"><?php echo $r['tennxb'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    Mô tả <textarea class="form-control" name="mota" id="" rows="3"></textarea> <br>
    <button type="submit" class="btn btn-primary" value='Thêm mới'>Thêm sách</button>

  </form>
</div>