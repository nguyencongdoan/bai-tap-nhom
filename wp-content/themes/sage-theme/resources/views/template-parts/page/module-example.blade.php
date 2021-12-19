<div class="container">
<h3>Module: Example {{$data->ex1}}</h3>
    @foreach ($data->example as $item)
        {{$item->post_title}}
        {!! $item->post_content !!}
    @endforeach

    {{ Page::filterExample() }}
    {{ isset($data->logo['url']) ? $data->logo['url'] : ''}}

    {{-- {{print_r($data)}} --}}
    @debug
</div>