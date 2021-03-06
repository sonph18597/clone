
@extends('layouts.main2')
@section('main-content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List quiz</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List quiz
                </div>
                <div class="card-body">
                    <table id="datatablesSimple"> 
                        <thead>
                        <thead>
                            <th>Mã bài quiz</th>
                            <th>Tên sinh viên</th>
                            <th>Tên chủ đề</th>
                            <th>Tên quiz</th>
                            <th>Thời gian</th>
                            <th>start time</th>
                            <th>end time</th>
                            <th>Score</th>
                        </thead>
                        <?php   
                            use App\Models\Quiz;
                        ?>
                        <tbody>
                            
                            <?php foreach($result as $r): ?>
                                <?php foreach (Quiz::where('id',$r->quiz_id)->get() as $item):?>
                                <?php endforeach?><br>
                                <?php   

                                    ?>
                                <tr>
                                    <td><?= $r->id ?></td>
                                    <td><?= $r->user()->name?></td>
                                    <!-- 1 item là infor 1 row của bảng quiz -> có tablename -> sử dụng dc cái phương thức subject của model Quiz -->
                                    <td><?= $item->subject()->name ?></td>
                                    <td><?= $r->quiz()->name ?></td>
                                    <td><?=$r->quiz()->duration_minutes?> Phút</td>
                                    <td><?= $r->start_time ?></td>
                                    <td><?= $r->end_time ?></td>
                                    <td><?= $r->score ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection