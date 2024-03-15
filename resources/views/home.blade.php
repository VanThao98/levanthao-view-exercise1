

{{-- day la comment --}}
{{-- <h1>hello,{!!$name!!}!</h1> --}}

{{-- <h1>{{$title}}</h1>
@include('shared.notify') --}}

{{-- <h1>{{$title}}</h1>
@include('shared.notify',['alertType'=>'alert-warning']) --}}

{{-- đây là includeIf --}}
{{-- <h1>{{$title}}</h1>
@includeIf('shared.notify',['alertType'=>'alert-warning']) --}}

{{-- DÙNG INCLIDE TRONG LẶP --}}
<h1>List Post</h1>
<div class="list-post">
    @each('shared.post', $posts, 'post')
</div>