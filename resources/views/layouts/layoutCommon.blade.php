<!DOCTYPE html>
<html lang="en">
<x-head />
<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <x-loader />
    <div class="page-wrapper">
        <x-header_style_one />
        @yield('content')
        <x-mobile_nav />
        <x-side_content />
        <x-chat_popup />
        <x-search_popup />
        <x-scroll_to_top />
        <x-scripts />
    </div>
</body>
</html>
