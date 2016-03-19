@include('frontend.block.headscript')
@include('frontend.block.navigation')

<?php    
    $routeArray = Route::current()->getAction();
    //$use_arr = $routeArray['0'];
    $action_arr = explode('@', $routeArray['uses']);
   if($action_arr['1'] != 'index'){
    ?>
        @include('frontend.widget.page_header')
        @include('frontend.widget.breadcumb')
    <?php
   }
   
?>
@yield('content')


@include('frontend/block/footer')