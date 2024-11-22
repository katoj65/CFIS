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

<!---GOOGLE CSS---->
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('/public/css/landing/main.css') }}">
  <link href="{{asset('/public/css/landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/public/css/landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('/public/css/landing/vandor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{ asset('/public/css/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet')}}">
  <link href="{{ asset('/public/css/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet')}}">
<!------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">


<link href='https://fonts.googleapis.com/css?family=Doppio One' rel='stylesheet'>
<style>
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
p, ol li, ul li{
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
letter-spacing:0.8px;
font-size: 14.5px;
line-height: 1.8em;

}
h1,h2,h3,h4,h5,h6{
letter-spacing: 0;
color:#1A374D;
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
.title-font2{
font-family:'Times New Roman', Times, serif;
word-spacing: 3px
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

.bg-light2{
background-color: rgb(241 245 249) !important;
}

.bg-dark2{
  background:#1A374D;
}

.text-dark2{
color:#1A374D;
}


.bg-khaki{
background: #C1A783;
}

.bg-light3{
background:#f8f9f9;
}
.text-darkred{color:darkred}
.section_title1{
    font-family: 'Doppio One';
}
.border-dark-red{border:solid 3px #b03a2e;}
.text-captalize{
text-transform: capitalize;
}
.form-control{
padding:10px;
min-height:40px;
}
.btn-dark-red{
background:#6a150c ;
color:white;
padding:10px;
border-radius:5px;
}
.btn-dark-red:hover{
color:white;
}

.btn-dark2{
background:#1A374D;
padding:10px;
border-radius:5px;
color:white;
}

.btn-border-dark2{
border:solid 1px #1A374D;
padding:10px;
border-radius:5px;
color:#1A374D;
}
.btn-border-dark2:hover{
color:black;
}
.btn-dark2:hover{
color:white;
}

.bg-green-light{
 background:#effef5;
}
.border-green-dark{
border:solid 1px #117864 ;
}
.bg-green-dark{
background:#117864 ;
}

.border-top-green{
border-top:solid 3px #117864 ;
}

.border-bottom-green{
border-bottom:solid 3px #117864 ;
}
.text-green{
color:#117864;
}

.page-title{background:none;}
.form-group .form-label{font-weight:normal;font-size:14px;}
.form-group{margin-bottom:20px;}

table tr td{text-align:center;font-size:15px; text-transform:initial}
table tr th{text-align:center;font-size:15px;text-transform:initial}



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

