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
  <title>จัดการบทความ | AppzStory</title>
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
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/bootstrap-toggle/bootstrap-toggle.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
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
                        <h5 class="m-0 text-dark">จัดการบทความ</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">บทความทั้งหมด</li>
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
                                <h3 class="card-title" style="line-height: 2.1rem">รายชื่อบทความ</h3>
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
                b_id: '1',
                image: 'https://s-courses.com/sclass1/assets/images/blog/15440279906973.jpg',
                subject: 'HTML คืออะไร',
                title: 'ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล',
                url: 'https://course.appzstory.dev/p/sclass1-php-mysqli-bootstrap4',
                b_status: true,
                updated_at: '2020-10-10 20:50:40',
                created_at: '2020-10-10 20:50:40'
            },{
                b_id: '2',
                image: 'https://s-courses.com/sclass1/assets/images/blog/css3.jpg',
                subject: 'CSS คืออะไร',
                title: 'css คือการจัดตกแต่งเว็บไซต์ให้สวยงาม',
                url: 'https://course.appzstory.dev/p/sclass1-php-mysqli-bootstrap4',
                b_status: true,
                updated_at: '2020-10-10 20:50:40',
                created_at: '2020-10-10 20:50:40'
            },{
                b_id: '3',
                image: 'https://s-courses.com/sclass1/assets/images/blog/javascript.jpg',
                subject: 'javascript คืออะไร',
                title: 'javascript คือภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต',
                url: 'https://course.appzstory.dev/p/sclass1-php-mysqli-bootstrap4',
                b_status: true,
                updated_at: '2020-10-10 20:50:40',
                created_at: '2020-10-10 20:50:40'
            },{
                b_id: '4',
                image: 'https://s-courses.com/sclass1/assets/images/blog/php.jpg',
                subject: 'PHP คืออะไร',
                title: 'PHP คือภาษาคอมพิวเตอร์จำพวก scripting language',
                url: 'https://course.appzstory.dev/p/sclass1-php-mysqli-bootstrap4',
                b_status: true,
                updated_at: '2020-10-10 20:50:40',
                created_at: '2020-10-10 20:50:40'
            }
        ]

        let arrayData = []
        ajaxResponse.forEach(function (item, index){
            arrayData.push([
                ++index,
                `<img src="${item.image}" class="img-fluid" width="180px">`,
                item.subject,
                item.title,
                `<input class="toggle-event" data-id="1" type="checkbox" name="status" 
                        ${item.b_status ? 'checked': ''} data-toggle="toggle" data-on="เผยแพร่" 
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
                { title: "หัวข้อหลัก", className: "align-middle"},
                { title: "หัวข้อย่อย", className: "align-middle"},
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
