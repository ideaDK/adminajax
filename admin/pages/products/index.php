<?php 
    include_once('../../../service/connect.php'); 
    include_once('../authen.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>จัดการสินค้า | AppzStory</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../assets/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../assets/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- stylesheet -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mali" >
  <link rel="stylesheet" href="../../plugins/@sweetalert2/theme-bootstrap-4/bootstrap-4.css">
  <link rel="stylesheet" href="../../plugins/bootstrap-toggle/bootstrap-toggle.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- Datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include_once('../includes/sidebar.php') ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">จัดการสินค้า</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">สินค้าทั้งหมด</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="line-height: 2.1rem">รายชื่อ</h3>
                                <a href="form-create.php" class="btn btn-primary float-right">เพิ่มข้อมูล</a>
                            </div>
                            <div class="card-body">
                                <table  id="dataTable" 
                                        class="table table-hover table-bordered table-striped" 
                                        width="100%">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../includes/footer.php') ?>
</div>

<!-- SCRIPTS -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="../../assets/js/adminlte.min.js"></script>


<!-- OPTIONAL SCRIPTS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>

<script>
    $(document).ready(function(){
        /**
         * จำลองการได้ข้อมูลมาจาก Server ด้วยการยิง Request ในรูปแบบของ Ajax
         */
        let ajaxResponse = [{
                p_id: '1',
                p_image: 'https://appzstory.dev/_nuxt/img/sclass1.abd0c97.jpg',
                p_name: 'sClass1 FullCourse PHP MySQLi Bootstrap4 สอนเขียนเว็บไซต์ด้วยตัวเองตั้งแต่ 0 - 100',
                url: 'https://appzstory.dev/c/sclass1-full-courses_0-100',
                cat_name: 'storyclass',
                price: '5,900',
                p_status: true,
                updated_at: '2022-10-01 20:50:40',
                created_at: '2022-10-01 20:50:40'
            },{
                p_id: '2',
                p_image: 'https://appzstory.dev/_nuxt/img/sclass2.b99e196.jpg',
                p_name: 'sClass2 Weblog Bootsrtap5 + Vuejs CDN + PHP สอนเขียนเว็บไซต์ด้วยตัวเองตั้งแต่ 0 - 100',
                url: 'https://appzstory.dev/c/sclass2-weblog-vuejs-php/',
                cat_name: 'storyclass',
                price: '3,500',
                p_status: true,
                updated_at: '2022-10-01 20:50:40',
                created_at: '2022-10-01 20:50:40'
            },{
                p_id: '3',
                p_image: 'https://appzstory.dev/_nuxt/img/mini1plus.a6ce666.jpg',
                p_name: 'MiniCourse 1PLUS User Management System สอนเขียนระบบจัดการสมาชิก (หน้าบ้าน + หลังบ้าน)',
                url: 'https://appzstory.dev/c/mini1plus-user-management-system',
                cat_name: 'minicourse',
                price: '1,600',
                p_status: true,
                updated_at: '2022-10-01 20:50:40',
                created_at: '2022-10-01 20:50:40'
            },{
                p_id: '4',
                p_image: 'https://appzstory.dev/_nuxt/img/basic1_main.a6874a9.jpg',
                p_name: 'PHP Ajax Basic REST API สอนเขียน REST API ด้วย PHP OOP ทั้ง CRUD เพิ่ม ลบ แก้ไข เรียกดูข้อมูล',
                url: 'https://appzstory.dev/c/basic1-php-ajax-basic-restapi',
                cat_name: 'freecourse',
                price: '2,500',
                p_status: true,
                updated_at: '2022-10-01 20:50:40',
                created_at: '2022-10-01 20:50:40'
        }]

        let arrayData = []
        ajaxResponse.forEach(function (item, index){
            arrayData.push([
                ++index,
                `<a href="${item.url}" target="_blank"> <img src="${item.p_image}" class="img-fluid" width="180px"> </a>`,
                item.cat_name,
                item.p_name,
                `<a href="${item.url}" target="_blank"> Link Course </a>`,
                `<span class="badge badge-info">${item.price}</span>`,
                `<input class="toggle-event" data-id="1" type="checkbox" name="status" 
                        ${item.p_status ? 'checked': ''} data-toggle="toggle" data-on="เผยแพร่" 
                        data-off="ปิด" data-onstyle="success" data-style="ios">`,
                `<div class="btn-group" role="group">
                    <a href="form-edit.php?id=${item.p_id}" type="button" class="btn btn-warning">
                        <i class="far fa-edit"></i> แก้ไข
                    </a>
                    <button type="button" class="btn btn-danger" id="delete" data-id="${item.p_id}">
                        <i class="far fa-trash-alt"></i> ลบ
                    </button>
                </div>`
            ])
        })

        $('#dataTable').DataTable( {
            data: arrayData,
            columns: [
                { title: "ลำดับ" , className: "align-middle"},
                { title: "รูปภาพ" , className: "align-middle"},
                { title: "ประเภท" , className: "align-middle"},
                { title: "ชื่อสินค้า", className: "align-middle"},
                { title: "Link", className: "align-middle"},
                { title: "ราคา", className: "align-middle"},
                { title: "สถานะ", className: "align-middle"},
                { title: "จัดการ", className: "align-middle"}
            ],
            "initComplete": function () {
                $('.toggle-event').bootstrapToggle();
                $(document).on('click', '#delete', function(){ 
                    let id = $(this).data('id')
                    Swal.fire({
                        text: "คุณแน่ใจหรือไม่...ที่จะลบรายการนี้?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'ใช่! ลบเลย',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({  
                                type: "DELETE",  
                                url: "../../../service/delete.php",  
                                data: { id: id }
                            }).done(function() {
                                Swal.fire({
                                    text: 'รายการของคุณถูกลบเรียบร้อย',
                                    icon: 'success',
                                    confirmButtonText: 'ตกลง',
                                }).then((result) => {
                                    location.reload();
                                });
                            })
                        }
                    })
                })
            },
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data()
                            return data[3]
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table'
                    } )
                }
            },
            "language": {
                "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": 'ค้นหา'
            }
        })
            
        $('.toggle-event').change(function(){
            toastr.success('อัพเดทข้อมูลเสร็จเรียบร้อย')
            // toastr.error('มีข้อผิดพลาดเกินขึ้น โปรดติดต่อผู้ดูแลระบบ')
        })
    })
</script>
</body>
</html>
