<html>
    <head>
        <title>Titus Chen</title>
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/main.css')}}">
    </head>
    <body>

    <div id="menu">
        <a href="/"><img class="headline" src={{asset('assets/img/headline.jpg')}} /></a>
        <a href="/"><img class="logo" src={{asset('assets/img/tituschenlogo.png')}} /></a>
        <ul>
            <li><a href="/resume">學經歷</a></li>
            <li><a href="/research">研究成果</a></li>
            <li><a href="/board">留言</a></li>
            <li><a href="/album">照片</a></li>
            <li><a href="/articles">文章</a></li>
        </ul>
    </div>

    <div id="content">
        @yield('content')
    </div>
    </body>
</html>