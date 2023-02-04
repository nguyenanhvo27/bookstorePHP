<form action='index.php?controller=sach&action=loc' method='POST' enctype='multipart/form-data'>
    <div class="row">

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
    <button type="submit" class="btn btn-primary" value='loc'>Lọc</button>

  </form>
<table class='table table-info'>
    <td class="columnTitle">Hình sách</td>
    <td class="columnTitle">Mã sách</td>
    <td class="columnTitle">Tên sách</td>
    <td class="columnTitle">Giá</td>
    <td class="columnTitle">Detail</td>
    <td class="columnTitle">Delete</td>
    <td class="columnTitle">Update</td>
    <?php
    foreach ($data as $r) {
    ?>
            <tr>
            <td class="columnND"><img src="../assets/img/book/<?php echo $r['hinh']; ?>"></td>
            <td class="columnND"><?php echo $r['masach']; ?></td>
            <td class="columnND"> <?php echo $r['tensach']; ?></td>
            <td class="columnND"><?php echo $r['gia']; ?>VNĐ</td>
            <td class="columnND">
            <a class="btn btn-info" href="./index.php?controller=sach&action=detail&id=<?php echo $r['masach'] ?>">
              Chi tiet
           </a>
            </td>
            <td class="columnND">
            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="./index.php?controller=sach&action=delete&id=<?php echo $r['masach'] ?>">
            Xóa
          </a>
            </td>
            <td class="columnND">
            <a class="btn btn-primary" href="./index.php?controller=sach&action=update&id=<?php echo $r['masach'] ?>">
            sửa
          </a>
            </td>
        </tr>
        <?php
    }
?>
</table>