<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav">
        <div class="logo">
            <h1>Prabhav</h1>
        </div>

        <div class="location-input">
            <i style="color: #ffcb5b; font-size: 20px;" class="fa-solid fa-location-dot"></i>
            <input class="input" placeholder="Location" type="text" >
        </div>

        <div class="btn">
            <input class="login" type="button" value="Log in">
            <input type="button" style="color: #fff;" value="Sign Up">
        </div>
    </nav>

    <div class="home">
        <div class="main-sec">
            <div class="left">
                <h1 class="txt1">Easy And Fast Way To <span style="color: #FFAF00;">Rent</span> a Vehicle</h1>
                <p>why rapido!<br>
            get the vehicle you love to drive, at the affordable rates</p>
                <div class="btn">
                    <input class="car" type="button" value="Rent Car">
                </div>
            </div>

            <div class="right">
                <img src="porsche_PNG10624.png" alt="">
            </div>
        </div>
    </div>

   

    
</body>

</html>

<style>
    @font-face {
    font-family: medium;
    src: url(font/PierSans-Regular.otf);
}

@font-face {
    font-family: light;
    src: url(font/PierSans-Light.otf);
}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: medium;
}

html, body{
    height: 100%;
    width: 100%;
}

.nav {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    height: 70px;
    background-color: whitesmoke;
}

.nav .logo h1{
    font-family: medium;
    font-weight: 100;
}

.nav .location-input input{
    text-decoration: none;
    border: none;
    width: 290px;
    padding: 12px 30px;
    border-radius: 50px;
}

.nav .location-input input::placeholder{
    color: #ffde97;
}

.nav .location-input input:focus{
    border: 1px solid #ffc64b;
    outline: none;
}

.nav .btn {
    display: flex;
    column-gap: 20px;
}

.nav .btn input {
    padding: 10px 30px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    background-color: #FFAF00;
}

.nav .btn .login {
    padding: 12px 30px;
    border-radius: 10px;
    cursor: pointer;
    border: 1px solid #FFAF00;
    background-color: white;
    color: #FFAF00;
}


.home {
    background-color: whitesmoke;
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.home .main-sec {
    display: flex;
    gap: 3vw;
    /* background-color: red; */
    justify-content: center;
    align-items: center;
}


.home .right {
    width: 400px;
    height: 300px;
    margin: 78px;
    padding: 30px;
    border-bottom-left-radius: 50%;
    border-top-right-radius: 50%;
    border-top-left-radius: 100px;
    border-bottom-right-radius: 100px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    background-image: linear-gradient(155deg, #ffd987, #ffe8b6);
}


.home .left {
    padding: 30px;
    height: 100%;
    display: flex;
    justify-content: center;
    /* align-items: center; */
    gap: 20px;
    flex-direction: column;
    width: 100%;
    max-width: 550px;
}

.home .left .btn input {
    padding: 14px 26px;
    border: none;
    color: #fff;
    border-radius: 8px;
    margin-top: 16px;
    cursor: pointer;
    background-color: #FFAF00;
}

.home .main-sec .left .txt1 {
    font-size: 3.5rem;
    font-weight: 600;
    font-family: light;
    margin-bottom: 12px;
}

.home .main-sec .left p{
    width: 75%;
    line-height: 26px;
    font-size: 16px;
    font-family: light;
    color: rgb(75, 74, 74);
    font-weight: 100;
}


.home .right img {
    width: 45vw;
    filter: drop-shadow(20px 50px 25px #e3d5b3);
}


@media (max-width: 600px)  {
    .nav .btn{
        display: none;
    }

    .nav{
        justify-content: space-between;
        padding: 0 30px;
    }

    .nav .location-input input{
        display: none
    }

    .home .right{
        display: none;
    }

    .home{
        height: 100%;
    }

    .home .left{
        width: 100%;
    }
}


</style>