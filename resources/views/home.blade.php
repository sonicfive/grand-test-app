<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tasks</title>

        <!-- Fonts -->
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
        <link href="/css/all.css" rel="stylesheet" type="text/css">

    </head>
    <body>
       <div class="container">
           <section class="section" id="app">
                <navigation></navigation>
               <router-view></router-view>
           </section>
       </div>
       <script src='/js/app.js'></script>
    </body>
</html>
