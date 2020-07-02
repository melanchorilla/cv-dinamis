<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Curriculum Vitae a Personal Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="{{ asset('cv/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="{{ asset('cv/js/jquery.min.js') }}"></script>
<!-- Custom Theme files -->
 <link href="{{ asset('cv/css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('cv/css/style.css') }}" rel='stylesheet' type='text/css' />
 
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curriculum Vitae Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<!-- start menu -->
 
</head>
<body>
<!-- header -->
<div class="col-sm-3 col-md-2 sidebar">
         <div class="sidebar_top">
             <h1>{{ ucwords($profile->nama) }}</h1>
             <img style="width: 100%;height: 100%;" src="{{ asset('uploads/'.$profile->photo) }}" alt=""/>
         </div>
        <div class="details">
             <h3>PHONE</h3>
             <p>{{ $profile->phone }}</p>      
             <h3>EMAIL</h3>
             <p><a href="mailto@example.com">{{ $profile->email }}</a></p>
             <address>
             <h3>ADDRESS</h3>
             {{ $profile->alamat }}
             </address>
             
        </div>
        <div class="clearfix"></div>
</div>
<!---->
<link href="{{ asset('cv/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{ asset('cv/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <!---//pop-up-box---->          
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <div class="content">
       
         <div class="company">
             <h3 class="clr1">Pengalaman Kerja</h3>
             @foreach($pengalaman as $pl)
             <div class="company_details">
                 <h4>{{ $pl->nama }} <span>{{ date('Y-M',strtotime($pl->dari)) }} - {{ ($pl->sampai == 'Sekarang') ? 'Sekarang' : date('Y-M',strtotime($pl->sampai)) }}</span></h4>
                 <h6>{{ ucwords($pl->jabatan) }}</h6>
                 <p class="cmpny1">{{ $pl->deskripsi }}</p>
             </div>
             @endforeach
         </div>
         <div class="skills">
             <h3 class="clr2">Skills</h3>
             <div class="skill_info">
             <p>{!! $skill->description !!}</p>
             </div>
             <div class="skill_list">
                @foreach($skills as $e=>$sk)
                 <div class="skill{{ $e+1 }}">
                     <ul>
                        @foreach($sk as $ss)                    
                        <li>{{ $ss }}</li>
                        @endforeach
                     </ul>
                 </div>
                 @endforeach
                 <div class="clearfix"></div>
             </div>
         </div>
         <div class="education">
             <h3 class="clr3">Pendidikan</h3>
             @foreach($pendidikan as $pd)
             <div class="education_details">
                 <h4>{{ $pd->nama }}<span>{{ date('M-Y',strtotime($pd->dari)) }} - {{ date('M-Y',strtotime($pd->sampai)) }}</span></h4>
                 <h6>{{ ucwords($pd->jurusan) }}</h6>
                 <p class="cmpny1">{{ ucwords($pd->deskripsi) }}</p>
             </div>
             @endforeach
         </div>
         <div class="copywrite">
             <p>© 2015 Curriculum Vitae All Rights Reseverd | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
         </div>
     </div>
</div>
<!---->
</body>
</html>