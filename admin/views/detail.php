

    <div class="bg-success p-2 text-white text-center">
        <h2>THÔNG TIN SÁCH của admin </h2>
    </div>
    <div class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <div class="container">
    <div class="row">
        <div class="col-6 col-sm-8">
            <img class="col-sm-6" src="../assets/img/book/<?php echo $data['hinh'];?>">
        </div>
        <div class="col-6 col-sm-4">
            <ul class="col-sm-9">
                <li>Mã sách: <td><?php echo $data['masach'];?></td>
                </li>
                <li>Tên sách: <td><?php echo $data['tensach'];?></td>
                </li>
                <li>Giá: <td><?php echo $data['gia'];?>VNĐ</td>
                </li>
                <li>Loại sách: <td><?php echo $data['maloai'];?></td>
                </li>
                <li>Nhà xuất bản: <td><?php echo $data['manxb'];?></td>
                </li>
                <li>Mô tả: <td><?php echo $data['mota'];?></td>
                </li>
            </ul>
        </div>
    </div>
    </div>