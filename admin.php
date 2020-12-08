<?php
    include('./includes/head.php');
    session_start();
?>

<title>Document</title>
    <style>
        .cover_create{
        height: auto;
        width: 1100px;
        background: #e6dede;
        box-shadow: 5px 5px 5px #cccccc;
        margin-left: 80px;
        margin-top: 40px;

    }
    .cover_content{
        margin: 20px;

    }
    .form_title{
        margin-bottom: 30px;
    }
    .form_bodyleft{
        margin-left: 50px;
    }
    .form_bodyleft img{
        width: 400px;
        height: 330px;
    }
    .form_title p, .form_bodyright p{
        font-size: 23px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        margin-bottom: -2px;
    }
    .form_bodyright input[type="text"]{
        width: 521px;
        height: 40px;
        border: none;
        outline: none;
        color: #000000;
    }
    .form_title input[type="text"]{
        border: none;
        outline: none;
        width: 600px;
        height: 40px;
        color: #000000; 
    }
    input[type="file"]{
        padding-top: 20px;
    }
    .form_bodyleft ,.form_bodyright{
        padding-top: 20px;
    }
    .drink_item{
        padding-bottom: 40px;
        padding-top: 20px;
    }
    .complete, .add{
        float: right;
    }
    .btn-primary, .btn-success{
        margin: 0 -60px 10px 70px;
    }
    .btn-danger{
        float: right;
        margin-top: -45px;
    }
    textarea{
        border: none;
        outline: none;
        margin-bottom: 10px;
    }
    .logo_icon{
        width: 150px;
        height: 150px;

        padding-bottom: 2px;
        background-color: crimson;
        border-radius: 50%;
    }
    .usernamne{
        font-size: 20px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        color: red;
    }
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar-btn"></i>
        </label>
        <div class="left-header">
            <h3>Phuong<span> sneaker</span></h3>
        </div>
        <div class="right-header">
            <a href="#" class="logout-btn">Logout</a>
        </div>
        
    </header>
    <div class="sidebar">
        <center>
            <img class="logo_icon" src="https://svgsilh.com/svg/1139381.svg" salt="shoes">
            <div class="usernamne">
                <?php
                    $username = $_SESSION['username']; 
                    echo $username;
                    //var_dump($_SESSION['username']);
                ?>
            </div>
        </center>
        <a href="#"><i class="fas fa-desktop"></i><span>Statistical</span></a>
    
        <div class="dropdown">  
            <button class="dropdown-btn">
                <i class="fas fa-th"></i>
                Quản lí
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Quản lí loại </a>
                <a href="#">Quản lí thông tin</a>
            </div>
        </div>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>

    <div class="content">
    <br>
        <section class="drink-form">
                <form action="/admin/chitiet-:index" method="POST" enctype="application/x-www-form-urlencoded">
                    <!-- Tên loại -->
                    <div class="container">
                        <div class="cover_create">
                            <div class="cover_content">
                                <div class="drink_item">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form_bodyleft">
                                                <img src="./images/layout/nike.jpg" alt="giay">
                                                <input type="file" name="drinkImage" value="">
                                             </div>
                                        </div> 
                                        <div class="col">
                                            <div class="form_bodyright">
                                                <p>Tên giày</p>
                                                <input type="text" placeholder="Nhập tên giày" name="txtName">
                                                <p>giá</p>
                                                <input type="text" placeholder="Nhập giá giày" name="txtCost">
                                                <p>Mô tả</p>
                                                <textarea name="txe" id="detail" cols="70" rows="8" placeholder="Nhập mô tả giày"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger" type="button" id="xoa_mon">Delete</button>
                            </div>
                        </div>
                    </div>
                    <button class="complete btn btn-success" type="submit">Complete</button>
                    <button class="complete btn btn-primary" type="button" onclick="addItem()">add</button>
            </form>
        </section>
    </div>



    <?php
        include('./script.php');
    ?>
   
</body>
</html>