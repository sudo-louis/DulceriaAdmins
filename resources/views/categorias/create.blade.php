@include('/recursos/navbar')

<body>
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="background-color: #e50881; padding: 2rem; border-radius:9px;" action="{{URL('/categorias')}}" enctype="multipart/form-data" method="POST" class="max-w-sm mx-auto text-center mt-5">
        @csrf
        @include('categorias.form')
    </form>
</body>