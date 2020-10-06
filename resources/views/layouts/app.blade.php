<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MemberProgram</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
        <div id="container">
            <header class="mb-4">
                
                <!--ここにロゴを配置する-->
                
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    {{-- トップページへのリンク --}}
                    <a class="navbar-brand" href="/">MemberProgram</a>
    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="nav-bar">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav">
                        </ul>
                    </div>
                </nav>
            </header>
    
            <main class="container">
                @yield('content')
            </main>
            
            <aside id="sidebar">
                
                <!--ここにログインフォームのファイルを取り込む-->
                
                <h2>最新ニュース</h2>
                <ul>
                    
                    <li></li>
                    
                </ul>
                
                <h2>会員ブログ</h2>
                <ul>
                    
                    <li></li>
                    
                </ul>
                
            </aside>
            
            <footer>
                
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>