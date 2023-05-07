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
  <title>จัดการผู้ดูแลระบบ | AppzStory</title>
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
                        <h5 class="m-0 text-dark">จัดการผู้ดูแลระบบ</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">ผู้ดูแลระบบ</li>
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
                                <a href="form-create.php" class="btn btn-primary float-right">เพิ่มผู้ดูแล</a>
                            </div>
                            <div class="card-body">
                                <table  id="logs" 
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
<script>
    $(document).ready(function(){
        /**
         * จำลองการได้ข้อมูลมาจาก Server ด้วยการยิง Request ในรูปแบบของ Ajax
         */
        let ajaxResponse = [{
            id: '1',
            username: 'admin',
            fisrt_name: 'Yothin',
            last_name: 'Sapsamran',
            email: 'yothin@gmail.com',
            status: 'admin',
            updated_at: '2020-10-01 20:50:40',
            created_at: '2020-10-01 20:50:40'
        },{
            id: '2',
            username: 'admin2',
            fisrt_name: 'AppzStory',
            last_name: 'Sapsamran',
            email: 'appzstory@gmail.com',
            status: 'admin',
            updated_at: '2020-10-02 22:50:40',
            created_at: '2020-10-02 22:50:40'
        }]

        let arrayData = []
        ajaxResponse.forEach(function (item, index){
            arrayData.push([
                ++index,
                item.username,
                item.fisrt_name,
                item.last_name,
                item.email,
                item.updated_at,
                `<span class="badge badge-info">${item.status}</span>`,
                `<div class="btn-group" role="group">
                    <a href="form-edit.php?id=${item.id}" type="button" class="btn btn-warning">
                        <i class="far fa-edit"></i> แก้ไข
                    </a>
                    <button type="button" class="btn btn-danger" id="delete" data-id="${item.id}">
                        <i class="far fa-trash-alt"></i> ลบ
                    </button>
                </div>`
            ])
        })

        $(document).ready(function(){
            $('#logs').DataTable( {
                data: arrayData,
                columns: [
                    { title: "ลำดับ" , className: "align-middle"},
                    { title: "ชื่อผู้ใช้" , className: "align-middle"},
                    { title: "ชื่อจริง", className: "align-middle"},
                    { title: "นามสกุล", className: "align-middle"},
                    { title: "อีเมล", className: "align-middle"},
                    { title: "ใช้งานล่าสุด", className: "align-middle"},
                    { title: "สิทธิ์เข้าใช้งาน", className: "align-middle"},
                    { title: "การเปลี่ยนแปลง", className: "align-middle"}
                ],
                "initComplete": function () {
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
                                return 'Details for '+data[0]+' '+data[1]
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
        })	                                   
    })
</script>
</body>
</html>
