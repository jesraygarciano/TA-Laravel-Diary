@extends('layouts.app')

@section('title')
新規投稿
@endsection

@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $message)
                    <li class="alert alert-danger">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('diary.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="body">本文</label>
                    <textarea class="form-control" name="body" id="body">{{ old('body') }}</textarea>
                </div>
                {{-- <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" class="form-control" name="image" id="image" value="{{ old('image') }}">
                </div> --}}
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">投稿</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection