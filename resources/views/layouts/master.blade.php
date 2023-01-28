<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
    <header>
        @include('includes.navbar')
    </header>
    <div class="row">
    @yield('content')
    </div>
    </div>
</div>
</body>
</html>