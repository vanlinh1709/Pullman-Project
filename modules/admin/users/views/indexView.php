<?php
//
////show_array($list_users);
//?>
<!--<html>-->
<!--    <head>-->
<!--        <title>Danh sách thành viên</title>-->
<!--        <meta charset="utf8"/>-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1>Danh sách thành viên</h1>-->
<!--        <table>-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <td>STT</td>-->
<!--                    <td>Tên</td>-->
<!--                    <td>Email</td>-->
<!--                    <td>Tuổi</td>-->
<!--                    <td>Thu nhập</td>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                --><?php
//                if (!empty($list_users)) {
//                    $t = 0;
//                    foreach ($list_users as $user) {
//                        $t ++;
//                        ?>
<!--                        <tr>-->
<!--                            <td>--><?php //echo $t; ?><!--</td>-->
<!--                            <td>--><?php //echo $user['fullname'] ?><!--</td>-->
<!--                            <td>--><?php //echo $user['email'] ?><!--</td>-->
<!--                            <td>--><?php //echo $user['age'] ?><!--</td>-->
<!--                            <td>--><?php //echo currency_format($user['earn'], '$'); ?><!--</td>-->
<!--                        </tr>-->
<!--                        --><?php
//                    }
//                }
//                ?>
<!---->
<!--            </tbody>-->
<!--        </table>-->
<!--    </body>-->
<!--</html>-->
<?php get_header('', 'Danh sách tài khoản') ?>
x1
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Quản lý danh sách tài khoản</h5>
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
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Danh sách tài khoản
                            <span class="d-block text-muted pt-2 font-size-sm">Danh sách các tài khoản có trong hệ thống</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="http://localhost/Nhom_7_DA1/?role=admin&mod=users&action=create" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Thêm mới tài khoản</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            <th title="Field #1">ID</th>
                            <th title="Field #2">Họ và tên</th>
                            <th title="Field #3">Email</th>
                            <th title="Field #4">Mật khẩu</th>
                            <th title="Field #5">Chức năng</th>
                            <th title="Field #6">Số điện thoại</th>
                            <th title="Field #7">Địa chỉ</th>
                            <th title="Field #8">Vai trò</th>
                            <th title="Field #9">Ảnh đại diện</th>
                            <th title="Field #10">Ngày tạo</th>
                            <th title="Field #11">Ngày chỉnh sửa</th>
                            <th title="Field #12">Mô tả</th>
                        </tr>
                        </thead>
                        <tbody>
<!--                        --><?php //var_dump($list_users);?>
                        <?php foreach ($list_users as $user) : ?>
                            <tr>
                                <td><?php echo ($user['id']) ?></td>
                                <td><?php echo ($user['fullname']) ?></td>
                                <td><?php echo ($user['email']) ?></td>
                                <td><?php echo ($user['password']) ?></td>
                                <td>
                                        <span style="overflow: visible; position: relative; width: 125px;">
                                            <a href="?role=admin&mod=users&action=update&id_user=<?php echo $user['id'] ?>" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <svg stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                        </svg>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="?role=admin&mod=users&action=delete&id_user=<?php echo $user['id'] ?>"
                                               onclick="return confirm('Bạn chắc chắn muốn xoá danh mục: <?php echo $user['fullname'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                                <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <svg stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                </svg>
                                            </svg>
                                                </span>
                                            </a>
                                        </span>
                                </td>
                                <td><?php echo ($user['phone_number']) ?></td>
                                <td><?php echo ($user['address']) ?></td>
                                <td><?php echo ($user['role_id'] == 1 ? 'User' : 'Admin') ?></td>
                                <!--                                --><?php //var_dump(__FILE__);?>
                                <td><img src= "http://localhost/pullman.com/public/uploads/images/user/<?php echo $user['avatar']?>" alt="thumbnail" width="100" height="100"></td>
                                <td><?php echo ($user['created_at']) ?></td>
                                <td><?php echo ($user['updated_at']) ?></td>
                                <td><?php echo 'abc' ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>