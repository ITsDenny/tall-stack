@include('partials.header')
    <div>
        <h1>Hi, Mom!</h1>
        @foreach ($categories as $category)
            <p>Name : {{ $category->name }}</p>
            <p>Description : {{ $category->description ?? " - " }}</p>
        @endforeach
    </div>
@include('partials.footer')