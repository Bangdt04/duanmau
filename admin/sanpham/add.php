<div class="row">
            <div class="row formtitle"><H1>THÊM MỚI SẢN PHẨM</H1></div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh mục <br>
                        <select name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($listdanhmuc);
                                    echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                                }
                                ?>
                        </select>
                    </div>

                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" >
                    </div>
                    
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="giasp" >
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="hinh">
                    </div>

                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI" >
                        <input type="reset" name="reset" value="Nhập lại" >
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao)){
                    echo $thongbao;
                }
                    ?>
                </form>
            </div>
        </div>
    </div>