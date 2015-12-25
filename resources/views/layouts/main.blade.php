<html>
    <head>
        <title>Titus Chen</title>
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/main.css')}}">
    </head>
    <body>

    <div id="menu">
        <img class="headline" src={{asset('assets/img/headline.jpg')}} />
        <img class="logo" src={{asset('assets/img/tituschenlogo.png')}} />
        <ul>
            <li><a>學經歷</a></li>
            <li><a>研究成果</a></li>
            <li><a>個人</a></li>
            <li><a>留言</a></li>
            <li><a>照片</a></li>
            <li><a>文章</a></li>
        </ul>
    </div>

    <div id="content">
        @yield('content')
    </div>
    </body>
</html>