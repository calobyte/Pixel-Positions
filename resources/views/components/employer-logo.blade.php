@props(['width' => 90])
<img src="http://picsum.photos/seed/{{ rand(0, 200000) }}/{{$width}}/{{$width}}" class="border w-[{{$width}}px] h-[{{$width}}px] rounded-xl" alt="">