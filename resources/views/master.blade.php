<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
<title>E-com Project</title>    
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
.custom-login{
    height:500px;
    padding-top:100px;
}

.slider{
    height:350px !important;
}

.slider-text{
    background-color: #3752379c !important;
}

.custom-product{
    height:600px;
}

.trending-img{
    height:100px;
}

.trending-item{
    float:left;
    width:20%;
}

.trending-wrapper{
    margin:30px;
}

.detail-img{
    height:200px;
}

.cartlist{
    border-bottom: 1px solid rgb(0, 0, 0);
    margin-bottom:20px;
    padding-bottom:20px;
}

</style>

</html>