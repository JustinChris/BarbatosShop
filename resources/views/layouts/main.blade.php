<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barbatos | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <style>
        *, body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Barbatos App</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @if($user->userRole == 'Member')
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Cart</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="/product/category/{{ $category['categoryID'] }}">{{ $category["categoryName"] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @if($user->userRole == 'Admin') 
                        <li class="nav-item">
                            <a class="nav-link" href="/product/admin">Manage Product</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="d-flex">
                <p class="p-2">{{ $user->userName }}</p>
                <img src="{{ $user->userPhoto }}" alt="Profile Picture" style="width: 40px; height: 40px; border-radius: 30px;">
            </div>
        </div>

    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>