<div class="row">
            <div class="row formtitle mb">
                <H1>Danh sách loại hàng</H1>
            </div>
            <div class="row mb10 frmdsloai">
                    <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($listdanhmuc);
                                    echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                                }
                                ?>
                        </select>
                        <input type="submit" name="listok" value="Go">
                    </form>
            <div class="row formcontent">
                
             <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Gía</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php
                foreach($listsanpham as $sanpham ){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath = "../upload".$img;
                    if(is_file($hinhpath)){
                    $hinh = " <img src='".$hinhpath."' height='80'>";
                    }else{
                        echo "Không tìm thấy hình ảnh";
                    }
                    echo '    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a><a href="'.$xoasp.'"> <input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
             </table>
                </div>
                <div class="row mb10">
                    <input type="submit" name="submit" value="Chọn tất cả" >
                    <input type="reset" name="reset" value="Bỏ chọn tất cả" >
                    <input type="reset" name="reset" value="Xóa mục đã chọn" >
                    <a href="index.php?act=addsp"><input type="button" value="Thêm mới"></a>
                </div>
            </div>
        </div>
        </a>