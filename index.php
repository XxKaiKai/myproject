<!DOCTYPE html>

<html lang="en">

 

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <style>



        body {

            background: linear-gradient(to right, rgb(245, 203, 126), rgb(114, 114, 114));

            background-size: cover;

            color: white;

            font-family: 'Roboto', sans-serif;

        }

 

        .img-fluid {

            border: 5px solidrgb(233, 243, 145);

            border-radius: 15px;

            box-shadow: 0 4px 8px rgba(185, 96, 245, 0.2);

            transition: transform 0.3s ease;

            animation: fadeIn 2s ease-in-out;

        }

 

        @keyframes fadeIn {

            from {

                opacity: 0;

            }

 

            to {

                opacity: 1;

            }

        }

 

        .img-fluid:hover {

            transform: scale(1.05);

        }

 

        .jumbotron {

            background-color: rgba(245, 203, 126, 0.8);

            color: white;

            padding: 30px;

        }

 

        .navbar {

            background-color: rgba(165, 170, 175, 0.9);

        }

 

        .navbar-dark .navbar-nav .nav-link {

            color: white;

        }

 

        .navbar-dark .navbar-nav .nav-link:hover {

            color: #f39c12;

        }

 

        .container {

            margin-top: 30px;

        }

 

        .footer {

            background-color: rgba(255, 255, 255, 0.8);

            color: white;

            padding: 20px 0;

            text-align: center;

        }

 

        .nav-pills .nav-link {

            background-color:rgb(167, 166, 165);

            color: white;

        }

 

        .nav-pills .nav-link:hover {

            background-color:rgb(160, 158, 157);

        }

 

        .btn-warning {

            background-color:rgb(160, 160, 160);

            color: white;

        }

 

        .btn-warning:hover {

            background-color:rgb(145, 145, 145);

        }

    </style>

</head>

 

<body>

 

    <div class="jumbotron text-center" style="margin-bottom:0">

        <h1>ยินดีต้อนรับ</h1>

        <h4>หน้าเว็บนี้ทำขึ้นเแสดงชิ้นงาน</h4>

    </div>

 

    <nav class="navbar navbar-expand-sm navbar-dark">

        <a class="navbar-brand" href="#">Menu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link" href="index.php">Main page</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="login.php">Sign in</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="singup.php">Register</a>

                </li>

            </ul>

        </div>

    </nav>

 

    <div class="container">

        <div class="row">

            <div class="col-sm-4">

                <h2>Images</h2>

                <img src="image/cat.jpg" alt="Your Image" class="img-fluid">

                <p>รูปภาพภายในบ้าน</p>
            </div>

 

            <div class="col-sm-8">

                <h2>Picture 1</h2>

                <img src="image/glass.jpg" alt="Your Image" class="img-fluid">

                <p>รูปภาพการ์ตูน</p>

                <br>

                <h2>Picture 2</h2>

                <img src="image/space.jpg" alt="Your Image" class="img-fluid">

                <p>รูปภาพผู้หญิงกำลังนั่งมอง</p>

            </div>

        </div>

 

 

    </div>

 

</body>

 

</html>

