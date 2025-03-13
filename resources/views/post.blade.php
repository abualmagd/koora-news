<!-- resources/views/post.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    dir="{{ app()->getLocale()=='ar'?'rtl':'ltr' }}">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{__('message.title')}}</title>
    <x-seo-meta 
    title="article" 
    description="{{ $post['title'] }}" 
    image="{{ $post['image'] }}" 
    url="/post/{{ $post['uri'] }}" 
/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="root">
    @if($post)
    <x-my-header  title="{{ __('message.title') }}" logo="{{ asset('images/logo.svg') }}" logoAlt="alt logo "/>
    <x-post-body  :post="$post" />


    <x-footer />
    @else
    <x-my-header  title="{{ __('message.title') }}" logo="{{ asset('images/logo.svg') }}" logoAlt="alt logo "/>
    <h1 class="text-red-500  mt-32 font-bold text-3xl text-center">   {{ __('message.error') }} </h1>
    @endif
 </body>
</html>