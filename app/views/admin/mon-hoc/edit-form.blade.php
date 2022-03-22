@extends('layouts.main2')
@section('main-content')
<main>
    <div class="container-fluid px-4">
        @section('title_page')
            <h1 class="m-0">Cập nhật chủ đề</h1>
        @endsection
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Cập nhật chủ đề
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên chủ đề</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?=$model->name?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection