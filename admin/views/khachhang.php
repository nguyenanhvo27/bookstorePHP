<div class="container">


    <div class="row d-flex justify-content-end ">
        <div class="col-sm-4">

            <div class="col-sm-12">
                <form class="form-inline my-2 my-lg-3" action='index.php' method='get'>
                    <input type="hidden" name='controller' value='khachhang'>
                    <input type="hidden" name='action' value='search'>
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm theo email" name='kw'>
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table table-info">
    <thead class="thead-success">
        <th scope="col">Email</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">SĐT</th>
    </thead>
    <?php
    foreach ($data as $r) {
    ?>
        <tr>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['tenkh']; ?></td>
            <td><?php echo $r['diachi']; ?></td>
            <td><?php echo $r['dienthoai']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>