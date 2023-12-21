@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>id = {{ $tasks->id }} のメッセージ詳細ページ</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>

        <tr>
            <th>メッセージ</th>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>
    
     {{-- メッセージ編集ページへのリンク --}}
    <a class="btn btn-outline" href="{{ route('tasks.edit', $tasks->id) }}">このメッセージを編集</a>
    
    {{-- メッセージ削除フォーム --}}
    <form method="POST" action="{{ route('tasks.destroy', $tasks->id) }}" class="my-2">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-error btn-outline" 
            onclick="return confirm('id = {{ $tasks->id }} のメッセージを削除します。よろしいですか？')">削除</button>
    </form>
    
@endsection