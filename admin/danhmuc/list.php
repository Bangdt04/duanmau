<div class="row">
            <div class="row formtitle">
                <H1>Danh sách loại hàng</H1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 frmdsloai">
             <table>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach($listdanhmuc as $danhmuc ){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo '    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a><a href="'.$xoadm.'"> <input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
             </table>
                </div>
                <div class="row mb10">
                    <input type="submit" name="submit" value="Chọn tất cả" >
                    <input type="reset" name="reset" value="Bỏ chọn tất cả" >
                    <input type="reset" name="reset" value="Xóa mục đã chọn" >
                    <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a>
                </div>
            </div>
        </div>
        </a>