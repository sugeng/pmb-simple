<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi Kelulusan USM CBT ONLINE | Universitas Prof. Dr. Moestopo (Beragama)</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700" rel="stylesheet">
    <style>
        /* Satart Main Rulez */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Source Sans Pro', sans-serif;
            padding: 30px;
            background-color: #f2f2f2
        }
        span{
            padding-bottom: 5px
        }
        .pull-left{
            float: left !important;
        }
        .pull-right{
            float: right !important;
        }
        .clearfix{
            clear: both
        }
        .wrapper{
            padding: 30px;
        }
        /* End Main Rulez */

        /* Start Container */
        .container{
            width: 80%;
            margin: auto;
        }
        .letter{
            position: relative;
        }
        /* End Container */

        /* Start Triange Section */
        section.triangle-blue{
            overflow: hidden;
            background-color: #fff;
            border-radius: 10px
        }
        div.box-blue{
            width: 20%;
            min-height: 600px;
            background-color: #DB3A1B;
            float: right;
        }
        div.triangle{
            width: 0;
            height: 0;
            border: 0 solid transparent;
            border-top-width: 300px;
            border-bottom-width: 300px;
            border-right: 100px solid #DB3A1B;
            float: right
        }
        /* End Triangle Section */

        /* Start Letter Section */
        section.letter-container{
            overflow: hidden;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            padding: 60px 5%;
        }
        div.content-left,
        div.content-right{
            -moz-box-shadow: 1px 1px 10px 0px #dedfe1;
            -webkit-box-shadow: 1px 1px 10px 0px #dedfe1;
            -o-box-shadow: 1px 1px 10px 0px #dedfe1;
            box-shadow: 1px 1px 10px 0px #dedfe1;
        }
        div.content-left{
            width: 40%;
            background-color: #DB3A1B;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            min-height: 480px;
            color: #fff
        }
        div.content-left .content i, .confirmation i{
            margin-right: 10px;
            font-size: 15px;
        }
        div.content-left .content:after{
            content: "";
            width: 100%;
            height: 1px;
            display: block;
            background-color: #F3565D;
            margin: 20px 0;
        }
        div.content-left .content span:first-of-type,
        .confirmation span:first-of-type{
            font-weight: 300;
            display: block;
        }
        div.content-left .content span:last-of-type,
        .confirmation span:last-of-type{
            font-size: 17px;
            font-weight: 600;
            margin-left: 30px
        }
        div.content-left .title span:last-of-type{
            margin-left: 0
        }
        div.content-right{
            width: 60%;
            background-color: #fff;
            padding: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            min-height: 480px;
            color: #75767b;
        }
        div.content-right section.body:before, .body:after{
            content: "";
            width: 100%;
            height: 1px;
            display: block;
            background-color: #dedfe1;
            margin: 20px 0;
        }
        div.content-right header{
            overflow: hidden;
        }
        div.content-right header .logo{
            width: 30%;
        }
        div.content-right header .time{
            width: 70%;
            padding-top: 20px;
            text-align: right;
        }
        div.content-right section.body h3{
            padding: 15px 0;
        }
        div.content-right section.body small:first-of-type:before{
            content: "";
            width: 40%;
            height: 1px;
            display: inline-block;
            background-color: #dedfe1;
            margin-right: 20px
        }
        div.content-right section.body p{
            padding: 30px 0;
        }
        div.content-right section.body p a{
            text-decoration: none;
            color: #DB3A1B
        }
        div.content-right section.body small{
            font-size: 10px;
            color: #b3b4b6
        }
        div.content-right footer{
            overflow: hidden;
        }
        div.content-right footer a{
            width: 50%;
            text-decoration: none;
            color: #DB3A1B;
            float: left;
        }
        div.content-right footer span{
            text-align: right;
        }
        /* End Letter Section */
    </style>

</head>
<body>
    @yield("content")
</body>
</html>
