<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
<title>
Carbon Footprint Information System
</title>

<!-- Fonts -->
 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

 <!-- Icon Font Stylesheet -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('/public/css/dashlite.css?ver=2.2.0') }}">
<link id="skin-default" rel="stylesheet" href="{{ asset('/public/css/theme.css?ver=2.2.0') }}">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/templatemo-kind-heart-charity.css') }}">
<!----LANDING PAGE------>
{{-- <link rel="stylesheet" href="{{ asset('/public/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/lineicons.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/ud-styles.css') }}">
<link rel="stylesheet" href="{{ asset('/public/css/default.css') }}"> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

<style type="text/css">
a{
text-decoration: none;
}
.card{
border:none;
border-radius:20px;
}
.shadow1{
box-shadow: 5px 5px 5px #f8f9fa;
}


.card-radius{
border-radius:20px;

}

body{
overflow-x:hidden;
}
p{
/* font-family: 'Franklin Gothic Medium',  Arial, sans-serif;
font-size: 15px; */
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
letter-spacing:0.8px;
font-size: 16px;
line-height: 1.8em;
}
h1,h2,h3,h4,h5,h6{
letter-spacing: 0;
color:black;
}

.border-dark-bottom{
    border-bottom:solid thin #283747;
}
.border-dark-top{
    border-top:solid thin #283747;
}

.borders-dark{
    border:solid thin #283747;
}
.title-border-left{
border-left:solid 5px white;
}

.title-border-right{
border-left:solid 5px white;
}
.readius-0{
border-radius:0;
}

.romans-lowercase ol li{
list-style: lower-roman;
}

.romans-uppercase ol li{
list-style: upper-roman;
}



.number_list ol li{

}

.list-white ol li, .list-white ul li{
color:white;
}

.list-dark ol li, .list-dark ul li{
color: black;
}
.bold{
font-weight: bold;
}
.btn{
text-transform: capitalize;
}

.title-font{
font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.border-radius{
border-radius: 10px;
}

.bg-light-red{
background: #ec7063;
}
.border-light-red{
border:solid 1px #ec7063;
}

.font-times{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif

}
.display-8{
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
</style>

<!-- Scripts -->
@routes
<script src="{{ asset('/public/js/app.js') }}" defer></script>
<script src="{{ asset('/public/js/bundle.js?ver=2.2.0') }}"></script>
<script src="{{ asset('/public/js/scripts.js?ver=2.2.0') }}"></script>
</head>

<body class="font-sans antialiased">
@inertia
</body>
</html>

