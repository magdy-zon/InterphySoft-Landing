<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Interphy - Soft</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Interphy Soft. Desarrollo de productos a tu medida usando la UX com o la intermediaria entre un producto exitoso que proporcione satisfacción al usuario.">
        <meta name="author" content="Interphy Soft">
        <meta name="keyword" content="UX, desarrollo web, desarrollo a la medida, experiencia de usuario, usabilidad, marketing digital, diseño de producto, desarrollo de experiencias">

        @include('layouts.includes.head_includes')
    </head>
    <body>
        @include('layouts.includes.navbar')

        @yield('content')

        @include('layouts.includes.footer_includes')
    </body>
</html>
