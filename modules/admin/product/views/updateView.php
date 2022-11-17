<?php get_header('', 'Tạo mới sản phẩm') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa sản phẩm</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Form thông tin sản phẩm</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Tên sản phẩm</label>
<!--                            --><?php //var_dump($product);?>
<!--                                --><?php //var_dump($categoryOfProduct);?>
                            <input type="text" name="name" class="form-control" value="<?php echo $product['title']?>" />
                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label><br>
                            <select class="selectpicker" name="category_id">
                                <option value="<?php echo $categoryOfProduct['id']?> checked"><?php echo $categoryOfProduct['cate_name']?></option>
                                <?php foreach($list_cates as $cate):?>
                                    <?php if($cate['id'] != $categoryOfProduct['id']):?>
                                    <option value="<?php echo $cate['id']?>"><?php echo $cate['cate_name']?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Nhãn hiệu</label><br>
                            <select class="selectpicker" name="brand_id">
                                <option value="<?php echo $brandOfProduct['id']?> checked"><?php echo $brandOfProduct['brand_name']?></option>
                                <?php foreach($list_brands as $brand):?>
                                    <?php if($brand['id'] != $brandOfProduct['id']):?>
                                    <option value="<?php echo $brand['id']?>"><?php echo $brand['brand_name']?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" name="number" class="form-control"value="<?php echo $product['number']?>" />
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $product['price']?>" />
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm khuyến mãi</label>
                            <input type="text" name="promo_price" class="form-control" value="<?php echo $product['promo_price']?>" />
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện của sản phẩm</label>
                            <input type="file" name="thumbnail" value="<?php $product['thumbnail']?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <div class="form-group green-border-focus">
                                <label for="exampleFormControlTextarea5">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="des" rows="3"><?php echo $product['description']?></textarea>
                            </div>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái sản phẩm</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?php echo $product['status']?>" name="status" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="status">
                                   <?php echo $product['status'] == 1 ? 'Còn hàng' : 'Hết hàng'?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?php echo $product['status'] == 1 ? 0 : 1?>" name="status" id="flexRadioDefault1">
                                <label class="form-check-label" for="status">
                                    <?php echo $product['status'] == 1 ? 'Hết hàng' : 'Còn hàng'?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Cập nhập</button>
                        <button type="reset" class="btn btn-secondary">Làm lại</button>
                        <a href="http://localhost/Nhom_7_DA1/?role=admin&mod=users" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>