@extends('layouts.default')


@section('sidebar')@endsection

@section('content')
    <h5>Adicionar business (model)</h5>
    
    @if ($errors ->any())
        Erros:<br>
        @foreach ($errors->all() as $error)
            {{$error}}<br>
        @endforeach 
    @endif

  
    <form enctype="multipart/form-data" method="POST" action="{{route('businesses.store')}}">
        @csrf
        <input type="text"  type="text"name="name" value="{{old('name')}}">
            @error('name')
                {{$message}}
            @enderror
        <br>
        <input type="text" name="email" value="{{old('email')}}">
            @error('email')
                {{$message}}
            @enderror
        <br>
        <input type="text" name="address" value="{{old('address')}}">
            @error('address')
                {{$message}}
            @enderror
        <br>
        <input type="file" name="logo">

        <button type="submit">Salvar</button>
    </form>

    <br>

    @foreach ($businesses as $business)
    @if($business->logo)
        <img src="{{Storage::disk('')->url($business->logo)}}" alt="" width="100">

           {{-- imprime caminho compleot --}}
    @endif
        {{$business->name}} ({{$business->email}} )
    @endforeach

    {{$businesses->links()}}

@endsection