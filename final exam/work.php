<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-size: 16px;
            border: 0px;
            outline: none;
            font-family: arial, "Microsoft JhengHei", sans-serif !important;
            color: #938280;
        }

        body {
            width: 100%;
            height: 100%;
            background-color: #FFF1E9;
        }

        .LOGO {
            width: 150px;
            height: 150px;
        }

        .btnDropdown {
            border-radius: 30px;
        }

        .navRight {
            flex-direction: row-reverse;
            position: absolute;
            right: 50px;
        }

        .col3 {
            background-color: #D6CECB;
        }

        .containerRounded {
            border-radius: 5px;
            overflow: hidden;
        }

        .userImg {
            width: 150px;
            height: 150px;
            border: solid 2px #69605B;
            border-radius: 80px;
            display: block;
            margin: auto;
            margin-top: 20px;
        }

        .textColor {
            display: block;
            margin: 10px 0px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #938280;
        }

        .textRight {
            text-align: right;
        }

        .spanColor {
            color: #938280;
        }

        .btnStyle {
            text-align: right;
        }

        .myWorks {
            display: flex;
            justify-content: space-between;
        }

        .smallUser {
            width: 25px;
            height: 25px;
            display: block;
            margin: 0px 20px;
            opacity: 0.5;
        }

        

        .main{
            box-shadow:6px 6px 5px #cccccc;
        }

        .inputTxt {
            width:120px;
            text-align:right;
            margin-left:20px;
        }
        .btnPersonalFile{
            width:100px;
            height:30px;
            padding:0px;
            border-radius: 10px;
            
        }

        .footer {
            background-color: #B1A39A;
            text-align: center;
            height: 50px;
            line-height: 50px;
        }

        .workDisplay{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .work{
            width:200px;
            height:200px;
            margin:5px;
            border-radius: 10px;
            border:1px solid  #69605B;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Images/LOGO.png" class="LOGO" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navRight" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#">作品集</a>
                    <a class="nav-link" href="#">聯絡我們</a>
                    <a class="nav-link" href="#">關於我們</a>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btnDropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            個人頁面
                        </button>
                        <ul class="dropdown-menu btnDropdown" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">資料編輯</a></li>
                            <li><a class="dropdown-item" href="#">設定</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">登出</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container bg-light containerRounded main">
        <div class="row  rounded">
            <div class="col-3 col3">
                <img src="Images/user.png" class="userImg">
                <span class="textColor">Rita Kung</span>
                <div class="row my-2 spanColor">
                    <div class="col-6">
                        關注者
                    </div>
                    <div class="col-6 textRight">
                        100
                    </div>
                </div>
                <div class="row my-2 spanColor">
                    <div class="col-6">
                        關注中
                    </div>
                    <div class="col-6 textRight">
                        6
                    </div>
                </div>
                <hr class="spanColor" />
                <div class="row my-2">
                    <div class="col-6">
                        <img class="smallUser" src="Images/user.png" />
                    </div>
                    <div class="col-6 textRight spanColor">
                        個人資料
                    </div>
                </div>
                <div class="row my-2">
                    <div class="dropdown">
                        <button class="btn container-fluid btnStyle p-0 myWorks spanColor" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="smallUser" src="Images/portfolio.png" />
                            我的作品
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">編輯作品</a></li>
                            <li><a class="dropdown-item" href="#">新增作品</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 p-4">
                <div class="row">
                    <div class="col">
                        <span class="display-6">我的作品</span>
                    </div>
                    <div class="col inputTxt">
                        <button class="btnPersonalFile">編輯作品</button>
                        <button class="btnPersonalFile" style="margin-right:70px;">新增作品</button>
                    </div>
                </div>
                <div class="workDisplay">
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                    <div class="work"></div>
                </div>
                
            </div>
        </div>
    </div>
    </div>

    <footer class="container-fluid footerBg mt-5 footer">
        <span class="text-light">copyright 2021 TDS All Rights Reserved</span>
    </footer>


</body>

</html>