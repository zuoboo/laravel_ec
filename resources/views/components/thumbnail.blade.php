@php
    if($type === 'shops'){
        $path = 'storage/shops/';
    }
    if($type === 'product'){
        // $path = 'storage/product/';
        $path = 'storage/product/';
    }
@endphp


<div>
    @if (empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}">
    @else
        <img src="{{ asset($path . $filename) }}">
    @endif
</div>
