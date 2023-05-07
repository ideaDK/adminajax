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
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">

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
                            <li class="breadcrumb-item"><a href="index.php">บทความ</a></li>
                            <li class="breadcrumb-item active">แก้ไขข้อมูล</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12  col-sm-10 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="line-height: 2.1rem;">แก้ไขข้อมูล</h3>
                                <a href="index.php" class="btn btn-warning float-right">กลับ</a>
                            </div>
                            <form id="formData">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="p_name">หัวข้อเรื่องใหม่</label>
                                            <input type="text" class="form-control" name="p_name" id="p_name" placeholder="หัวข้อเรื่องใหม่" value="HTML คืออะไร	">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="price">หัวข้อย่อย</label>
                                            <input type="text" class="form-control" name="price" id="price" placeholder="หัวข้อย่อย" value="ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="customFile">รูปปก</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea id="details" class="textarea" name="details" placeholder="Place some text here">

                                            <!-- โค้ดตรงส่วนนี้ จะต้องถูกส่งมาจาก Server เพื่อแก้ไข -->
                                                <h2><strong>HTML คืออะไร</strong></h2>
                                                <p><strong>HTML5</strong>&nbsp;คือ ภาษามาร์กอัป ที่ใช้สำหรับเขียน website &nbsp;ซึ่ง&nbsp;HTML5&nbsp;นี้เป็นภาษาที่ถูกพัฒนาต่อมาจากภาษา HTML และพัฒนาขึ้นมาโดย WHATWG (The Web Hypertext Application Technology Working Group) โดยได้มีการปรับเพิ่ม Feature หลายๆอย่างเข้ามาเพื่อให้ผู้พัฒนาสามารถใช้งานได้ง่ายมากยิ่งขึ้น</p>
                                                <h2>ข้อดีของ HTML5</h2>
                                                <ol>
                                                    <li>เว็บไซต์ที่สร้างจากภาษา&nbsp;<strong>HTML5&nbsp;</strong>สามารถแสดงผลได้กับทุก web browser&nbsp;</li>
                                                    <li><strong>HTML5&nbsp;</strong>จะช่วยลดการใช้พวกปลั๊กอินพิเศษอย่างพวก Adobe Flash, Microsoft Silverlight, Apache Pivot สนับสนุน วิดีโอ และ องค์ประกอบเสียง รวมทั้ง สื่อมัลติมีเดียต่างๆมากขึ้น โดยไม่ต้องใช้ Flash</li>
                                                    <li>มีการจัดการข้อผิดพลาดที่ดีขึ้น</li>
                                                    <li>สคริปต์ใหม่ ที่จะมาแทนที่สคริปต์เดิม (เขียนโค้ดสั้นลง)</li>
                                                    <li><strong>HTML5&nbsp;</strong>มีความเป็นอิสระสูง (คล้ายๆ XML )</li>
                                                    <li><strong>HTML5&nbsp;</strong>ทำงานควบคู่กับ CSS3 ได้ดี ช่วยให้สามารถเพิ่มลูกเล่นต่างๆบนเว็บไซต์ได้สวยงามมากยิ่งขึ้น (CSS คือส่วนแสดงผล ที่นักออกแบบสามารถกำหนดสีสัน ตำแหน่ง ลักษณะเวลานำเมาส์ไปแหย่แล้วมีกระต่ายโผล่ออกมาจากโพรง หรือจับก้อนวัตถุในหน้าเว็บฯ ให้ชิดซ้ายชิดขวา ส่วน CSS3 คือเวอร์ชั่นที่ 3 ของ CSS )</li>
                                                </ol>
                                                <h2>Features ใหม่ๆ ของ HTML5</h2>
                                                <ol>
                                                    <li>Semantic Markup : การเพิ่ม Element ที่ อ่านง่ายมากขึ้น และช่วยให้ เราทำ SEO ได้มีประสิทธิภาพมากยิ่งขึ้น</li>
                                                    <li>Form Enhancements : เพิ่มความสามารถของ Form ต่างๆ ไม่ว่าจะเป็น Input type, Attribute หรือ แม้แต่ Element</li>
                                                    <li>Audio / Video: รองรับการอ่านไฟล์เสียง และ วีดีโอ โดยไม่จำเป็นต้องใช้ Embed Code ของ Third Party</li>
                                                    <li>Canvas : ใช้ในการวาดรูป โดยจำเป็นต้องใช้ Javascriptช่วย</li>
                                                    <li>ContentEditable : สามารถแก้ไข Content ได้โดยตรงผ่านทางหน้าเว็บ</li>
                                                    <li>Drag and Drop : ลากวางObject ได้ เพื่อเพิ่มการ ตอบสนองระหว่างระบบกับผู้ใช้</li>
                                                    <li>Persistent Data Storage : มีการจัดการที่ดีขึ้น โดยเก็บข้อมูลลงบนเครื่องของผู้ใช้&nbsp;<br>
                                                    <br>
                                                    <br>
                                                    <img alt="" class="img-fluid" src="./assets/images/upload/source/unnamed.jpg" style="width:100%"></li>
                                                </ol>
                                            <!-- โค้ดตรงส่วนนี้ จะต้องถูกส่งมาจาก Server เพื่อแก้ไข -->

                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">บันทึกข้อมูล</button>
                                </div>
                            </form>
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

<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function(){
        $('#details').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 600,
        });

        $('#formData').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'PUT',
                url: '../../../service/update.php',
                data: $('#formData').serialize()
            }).done(function(resp) {
                Swal.fire({
                    text: 'อัพเดทข้อมูลเรียบร้อย',
                    icon: 'success',
                    confirmButtonText: 'ตกลง',
                }).then((result) => {
                    location.assign('index.php');
                });
            })
        });
    });
</script>

</body>
</html>
