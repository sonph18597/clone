@extends('layouts.main2');
@section('main-content');
<main>
<div class="container-fluid px-4">
    @section('title_page')
        <h1 class="m-0">Thêm mới Quiz</h1>
    @endsection
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Thêm mới Quiz
        </div>
        <div class="card-body">
            <form action="" method="post">   
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên Quiz</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" id="" placeholder="quiz 1, quiz 2...">
                </div>
                <div>
                    <label for="Default select" class="form-label">Tên danh mục</label><br>
                    <select name="subjectId" class="form-select mb-3" aria-label="Default select example">
                        @foreach($allSubject as $subject)
                            <option value="{{ $subject->id }}"> {{ $subject->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Duration_minutes</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="duration_minutes">
                </div>
                <button type="submit" class="btn btn-primary">Tạo mới</button>
            </form>
        </div>
    </div>
</div>
</main>
@endsection