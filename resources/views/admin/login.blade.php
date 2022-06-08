<head>
    <link href="/assets/admin/css/pasa.css" rel="stylesheet" />
    <title>Admin Login</title>
</head>
<body>
<div id="page-wrapper" style="width:20%; background:#FFFFFF;margin: auto; margin-top:200px">
    @include('home.messages')
    <form action="{{route('loginadmincheck')}}" method="post">
        @csrf
        <div class="container">
            <label for="email"><b>Username</b></label><br>
            <input type="email" placeholder="Email" name="email" required><br>

            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>

            <button type="submit">Login</button><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div style="background-color:#ffffff">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw" style="margin-right: 15px">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
</body>>
