@extends('layouts.masterLayout')

@section('contents')
<h2>Home Page</h2>
<p id="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nisi earum molestiae ratione magnam optio odio et ducimus molestias quae quibusdam in enim inventore corporis voluptas nam, accusantium facere accusamus illo. Sit illo corrupti tenetur culpa harum ipsum. In, voluptate omnis facere impedit adipisci quidem reiciendis soluta ratione ipsa et iste sapiente officiis, voluptas maxime quod, ut tenetur quo nemo unde cumque! Totam minus voluptatem fugit provident aspernatur possimus earum? Atque corrupti accusantium obcaecati magnam laboriosam necessitatibus vero asperiores cupiditate distinctio doloribus saepe molestias, reiciendis maxime fuga nemo. Esse officia eligendi aperiam doloribus ipsam, ipsum blanditiis harum? Cumque, laboriosam pariatur.</p>
@endsection

@section('title')
    home
@endsection

@push('script')
<script>
    alert('just testing');
</script>
<script src="/example.js"></script>
    
@endpush

@prepend('script')
    <style>
        #paragraph{
            background: tomato;
        }
    </style>
@endprepend


























{{-- @include('pages.header')

<h2>Home page</h2>
    <main>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ex tellus. Suspendisse potenti. Nullam nec urna risus. Phasellus id tristique velit. Donec nec purus nec nulla efficitur blandit. Duis vehicula aliquet nisi, id lobortis odio posuere et.</p>
    </main>

    @include('pages.aside')

    @include('pages.footer') --}}
    
    















































































{{-- 
@php
    $fruits = ["banana", "appple", "Guavava"];
    $check = true;
    $stat = "Hello Hanif!";
@endphp



@include('pages.header', ['fruit' => $fruits])

<h1>Our first page</h1>

@include('pages.footer')
@include('pages.footer')

@includeIf('pages.footers') //this works as if the pages is not found then no error will be thrown




@includewhen($check,'pages.footer', ['stat' => $stat]) --}}












































{{-- <a href="/justcheck">newFile page</a>
<br><br>
<a href="{{ route('tests') }}">testing</a>

<a href="{{ route('home') }}">home page</a>

{{ 4+4 }}
<br><br>
{{ "<h2> this blade template format</h2>" }}
{!! "<h1>this is the correct method</h1> "!!}

{{-- {!! "<script>alert('aware')</script>" !!} --}}

{{-- this is commented code --}}

{{-- @php
    $user = ["Hanif", "Asad", "Hilal"];
@endphp
<ul>
    @foreach ($user as $u )
    
        <li>{{ $u }}</li>
        {{ $loop->index }}
        {{ $loop->iteration }}
        {{ $loop->remaining }}
        {{ $loop->last }}
    
    @endforeach
</ul>

@{{ users }}

@for ($i=0;$i<1000;$i++)
    {{ $i }} 
    <br>
    
@endfor --}} --}}