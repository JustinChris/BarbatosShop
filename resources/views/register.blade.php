<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Barbatos | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-floating {
            margin: 2px;
        }

        .register-btn {
            margin-top: 15px;
        }

    </style>
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form>
            <h1><b>Barbatos App</b></h1>
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="NameInput" placeholder="Name">
                <label for="NameInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="EmailInput" placeholder="example@gmail.com">
                <label for="EmailInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="PassInput" placeholder="Password">
                <label for="PassInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="PassConfirmInput" placeholder="Confirm Password">
                <label for="PassConfirmInput">Confirm Password</label>
            </div>
            <div class="">
                <select name="" id="" class="form-select form-select-lg mb-2 ">
                    <option selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female"> Female</option>
                </select>
            </div>


            <button class="w-100 btn btn-lg btn-primary register-btn" type="submit">Register</button>
            <p class="mt-2 mb-3 text-muted">Or</p>
            <a href="/login">Login</a>
        </form>
    </main>
</body>

</html>