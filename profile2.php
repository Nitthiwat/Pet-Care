<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>dog</title>
    <style>
        /* .menu{
            width: 100%;
            background-color: rgb(102, 102, 102);
            padding-top: 1em;
            padding-bottom: 1em;
            
        }
        .menu a {
            text-decoration: none;
            color: aliceblue;
            
        }
        .menu li{
            display: inline;
            padding: 1.25em;
            font-size: 1.2em;
            
        }
        .header{
            background-color: rgb(88, 54, 117);
            padding: 5px;
            display: flex;
            width: 100%;
        }
        .left-head a{
            padding-left: 20px;
            text-decoration: none;
            float: left;
            color: aliceblue;
            
        }
        .left-head a:hover{
            color: yellow;   
        }
        .right-head a:hover{
            color: yellow;
        }
        .right-head{
            float: right;
            margin-left: 77%;

        }
        .right-head a{
            text-decoration: none;
            padding-right: 15px;
            color: aliceblue;

        }
        .logo{
            background-color: rgb(255, 255, 255);
            display: flex;
            width: 100%;
            padding-top: 10px;
        }
        .left-logo{
            float: left;
        }
        .right-logo{
            float: right;
            margin-left: 90%;
        }
        .con-main{
            border: 1px solid rgb(163, 163, 163);
            margin: 20px;
            padding: 30px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            margin-top: 3%;
        }
        .h2 button{
            border-radius: 20px;
            padding: 5px;
            background-color: rgb(88, 54, 117);
            color: aliceblue;
            width: 50%;
        }
        .makean button{
            border-radius: 20px;
            width: 20%;
            margin-left: 15%;
            background-color: rgb(88, 54, 117);
            color: aliceblue;
        }
        .info-price button{
            background-color: rgb(202, 202, 200);
            width: 50%;
            padding-top: 2%;
            padding-bottom: 2%;
            border : 1px solid rgb(202, 202, 200);
            font-size: 1.5em;
            margin-bottom: 1.5em;
        }
        .info-locate p{
            line-height: 0.8em;
            

        }
        .pic-big img{
            width: 67%;
            margin-left: 5%;
        }
        .pic-small img{
            width: 100%;
            margin-top: 15%;
            border-radius: 5%;
        }
        .info-small{
            padding-left: 10%;
            padding-top: 5%;
        } */
        *{
            padding: 0;
            margin: 0;
            /* box-sizing: border-box;
            color: aliceblue; */
        }
        .container{
            margin-top: 2em;
        }
        .content p{
            padding-top: 1.5em;
            padding-bottom: 2em;
            text-align: center;
            color: black;
        }
        .content img{
            width: 30%;
            margin-top: 10%;
            margin-left: 37%;
            margin-right: 37%;
        }
        .col9{
            padding: 0;
        }
        .col-10 , .col-2{
            background-color: rgb(88, 54, 117);
            color: aliceblue;
            padding: 1em;
            
        }
        .content-profile{
            margin-top: 2.5em;
            margin-left: 2em;
        }
        .new-customer{
            width: 8%;
            border-radius: 1em;
            background-color:rgb(88, 54, 117) ;
            border: 1px solid rgb(88, 54, 117);
            color: aliceblue;
        }
        a{
            text-decoration: none;
            color: aliceblue;
        }
        a:hover{
            color: yellow;
        }
        .footer{
            background-color: rgb(94, 93, 93);
            padding-top: 17px;
            padding-left: 7%;
            padding-right: 7%;
            color: aliceblue;
            
        }
        /* .col-10 , .col-2{
            background-color: black;
            color: aliceblue;
            
        } */
        .col-8{
            color: aliceblue;
            padding-bottom: 13px;
        }
        .follow img{
            width: 2em;
            padding-bottom: 4%;
        }
        .hr{
            border: 1px solid rgb(85, 84, 84);
            width: 90%;
            margin: 1em;
        }
        .quik-link li {
            list-style-type: none;
            padding-bottom: 7%;

        }
        h4{
            padding-bottom: 5%;
            padding-top: 2%;
        }
        .quik-link li a{
            text-decoration: none;
            color: aliceblue;
        }
        .quik-link li a:hover{
            color: yellow;
        }
        .contact img{
            width: 10%;
            margin-bottom: 2%;

        }
        .logo p{
           margin-left: 20%;
           margin-right: 20%;
        }
       
    </style>
</head>
<body>
    <!-- <div class="header">
        <div class="left-head">
            <a href="#">About Me</a> 
            <a href="#">Follow on us</a> 

        </div>
        <div class="right-head">
            <a href="#">Help</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="logo">
        <div class="left-logo">
            <img src="" alt="">
        </div>
        <div class="right-logo">
            <p>call us today <br>
            Open 08.30-20.00 <br>
            TEL 091-234-5678
            </p>
        </div>
    </div>
    <div class="menu">
        <li><a href="">หน้าแรก</a></li>
        <li><a href="">เกี่ยวกับเรา</a></li>
        <li><a href="">สินค้า</a></li>
        <li><a href="">บริการของเรา</a></li>
            </div> -->
            <div class="container">
               <div class="fisrt">
                <div class="row">
                    <div class="col-1">
                      <div class="haed-content">
                        <i class="bi bi-person-plus-fill" style="font-size: 7rem; color: rgb(0, 0, 0);"></i>
                      </div>
                    </div>
                    <div class="col-11">
                       <div class="content-profile">
                        <h3 style="color: black;"> นายสุขใจ แสนสุข</h3>
                        <button class="new-customer">ลูกค้าใหม่</button>
                        <p style="text-indent: 3em; padding-top: 1em;">แมว สุนัข</p>
                       </div>
                      </div>
                    
                  </div>

               </div>
               <div class="row">
                <div class="col-10">การซื้อของฉัน</div>
                <div class="col-2">ประวัติการซื้อ</div>
              </div>
                <div class="row" id="three">
                  <div class="col-3">
                    <div class="content">
                       <a href=""><img src="img/budget.png" alt=""></a>
                        <a href=""><p>ที่ต้องชำระ</p></a>
                    </div>
                  </div>
                  <div class="col-3">
                   <div class="content">
                       <a href=""><img src="img/box.png" alt=""></a>
                    <a href=""><p>ที่ต้องจัดส่ง</p></a>
                   </div>
                  </div>
                  <div class="col-3">
                   <div class="content">
                      <a href=""> <img src="img/delivery-van.png" alt=""></a>
                   <a href=""> <p>ที่ต้องได้รับ</p></a>
                   </div>
                  </div>
                  <div class="col-3">
                  <div class="content">
                     <a href=""> <img src="img/rating.png" alt=""></a>
                    <a href=""><p>ให้คะแนน</p></a>
                  </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-10">กระเป๋าเงินของฉัน</div>
                    <div class="col-2"></div>
                  <div class="row">
                    <div class="col-3">
                        <div class="content">
                           <a href=""><img src="img/money.png" alt=""></a>
                           <a href=""><p>เงินสด</p></a>
                        </div>
                    </div>
                   
                    
                  </div>
              </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
              <div class="col">
                  <div class="logo">
                      <img src="img/logo.png" alt="">
                      <a href=""><p>PET CARE</p></a>
                      
                  </div>
              </div>
              <div class="col">
                  <div class="contact">
                      <h4>Contact Info</h4>
                      <p>123/45 ถนนตะวันใหม่ ตำบลในเมือง <br>
                    อำเภอเมือง จังหวัดขอนแก่น 40000</p>
                    <img src="img/tel.png" alt=""> 091-234-5678 <br>
                    <img src="img/email.png" alt=""> petcare@gmail.com<br> 
                    <img src="img/clock.png" alt=""> Open 08.30-20.00
                  </div>
              </div>
              <div class="col">
                  <div class="quik-link">
                    <h4>Quik link</h4>
                    <li><a href="#">ข่าวสาร</a></li>
                    <li><a href="#">บริการต่างๆ</a></li>
                    <li><a href="#">สินค้าทั้งหมด</a></li>
                  </div>
              </div>
              <div class="col">
                  <div class="follow">
                      <h4>Follow us</h4>
                     <a href=""> <img src="img/facebook.png" alt="">  Pet Care</a> <br>
                      <a href=""><img src="img/instagram.png" alt="">  Pet Care</a> <br>
                      <a href=""><img src="img/line.png" alt="">  @petcare</a>  
    
                  </div>
              </div>
            </div>
            <div class="hr"></div>
            <div class="row">
              <div class="col-8">&copy; Copyright 2022 www.petcare.com</div>
              <div class="col-4"></div>
            </div>
          </div>
       </div>
</body>
</html>