<?php get_header('', 'Tạo mới sản phẩm') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tạo mới sản phẩm</h5>
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
                    <h3 class="card-title">Form thông tin sản phẩm mới</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập vào tên sản phẩm" />
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label><br>
                            <select class="selectpicker" name="category_id">
                                <?php foreach($list_cates as $cate):?>
                                <option value="<?php echo $cate['id']?>"><?php echo $cate['cate_name']?></option>
                                <?php endforeach;?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Nhãn hiệu</label><br>
                            <select class="selectpicker" name="brand_id">
                                <?php foreach($list_brands as $brand):?>
                                    <option value="<?php echo $brand['id']?>"><?php echo $brand['brand_name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" name="number" class="form-control" placeholder="Nhập vào số lượng sản phẩm" />
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" name="price" class="form-control" placeholder="Nhập vào giá của sản phẩm" />
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm khuyến mãi</label>
                            <input type="text" name="promo_price" class="form-control" placeholder="Nhập giá khuyến mãi" />
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện của sản phẩm</label>
                            <input type="file" name="thumbnail" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <div class="form-group green-border-focus">
                                <label for="exampleFormControlTextarea5">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="des" rows="3"></textarea>
                            </div>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái sản phẩm</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="status" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="status">
                                   Còn hàng
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" name="status" id="flexRadioDefault2" >
                                <label class="form-check-label" for=status"">
                                    Hết hàng
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                        <button type="reset" class="btn btn-secondary">Làm lại</button>
                        <a href="?role=admin&mod=users" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>