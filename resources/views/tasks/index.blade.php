<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>タスク管理アプリ</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="contents-wrapper">
            <div class="contents-title">
                <p>一覧</p>
                <span class="button-create">新規作成</span>
                <span class="button-completed-index">完了済み</span>
            </div>
            <div class="contents-details">
                @foreach ($tasks as $task)
                <div class="task">
                    <span class="button-completed">完了</span>
                    <p>{{ $task->title }}</p>
                    <span class="button-edit">編集</span>
                    <span class="button-delete">削除</span>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
