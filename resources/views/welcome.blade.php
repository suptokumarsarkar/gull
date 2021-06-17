@extends("layout.app")
@section("title",__("mrplurssive admin panel"))
@section("page")
<div class="breadcrumb">
    <h1>MRPLURSSIVE</h1>
    <ul>
        <li><a href="{{url('youtube')}}">youtube</a></li>
        <li>Overview</li>
    </ul>
</div>
@endsection
@section("content")
<iframe src="https://www.vk.com" style="width:100%; height: 500px;"></iframe>


@endsection