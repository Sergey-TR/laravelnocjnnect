<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
<div class="header" style="display: flex;
                            align-items: center;
                            justify-content: space-between;
                            padding-left: 30px;
                            padding-right: 30px;
                            background-color: #f7faff;
                            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.17);">
    <div>
        <p style="color: coral; font-weight: bold;">{{ date("F j Y / H:i") }}</p>
    </div>
    <div>
        <h1 style="color: coral;
                    font-size: 40px;"
        >Laravel news</h1>
    </div>
    <div>
        <ul style="display: flex; list-style-type: none; ">
            <li style="padding: 20px;"><a href="#" style="color: coral; font-weight: bold; text-decoration: none;">Log in</a></li>
            <li style="padding: 20px;"><a href="#" style="color: coral; font-weight: bold; text-decoration: none;">Registration</a></li>
        </ul>
    </div>
</div>
<nav style="background-color: #f7faff;">
    <ul style="display: flex; list-style-type: none; justify-content: space-around;">
        <li style="padding: 20px;"><a href="{{ route('news.main_news') }}" style="color: coral; font-weight: bold; text-decoration: none;">Home</a></li>
        <li style="padding: 20px;"><a href="{{ route('news.index') }}" style="color: coral; font-weight: bold; text-decoration: none;">News</a></li>
        <li style="padding: 20px;"><a href="{{ route('category.index') }}" style="color: coral; font-weight: bold; text-decoration: none;">Category</a></li>
        <li style="padding: 20px;"><a href="#" style="color: coral; font-weight: bold; text-decoration: none;">Add news</a></li>
        <li style="padding: 20px;"><a href="{{ route('about') }}" style="color: coral; font-weight: bold; text-decoration: none;">About</a></li>
    </ul>
</nav>
<div style="padding: 0 calc(50% - 570px);">
    <div style="background-color: #e9ebf6; padding: 15px; display: flex; flex-wrap: wrap;">@yield('content')</div>
</div>
<div style="display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 30px;
            padding-right: 30px;
            background-color: #d9def8;
            margin-top: 10px;">
    <p style="color: coral; font-weight: bold;">Laravel news</p>
    <p style="color: coral; font-weight: bold;">Contacts</p>
</div>
</body>
</html>
