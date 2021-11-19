<div style="margin:0px 50px 0px 50px;">

    @if($staff)
        <a href="{{ route('staff.create') }}">Добавить нового сотрудника</a></div>
<table class="table table-hover table-striped">
    <thead>
    <tr>

        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Пол</th>
        <th>Зарплата</th>
        <th>Отдел</th>
        <th>Удалить</th>
    </tr>
    </thead>

    <tbody>
    @foreach($staff as $worker)
        <tr>
            <td alt="{{ $worker->title }}"><a href="{{route('staff.edit', $worker->id)}}">{{ $worker->name }}</a></td>
            <td>{{ $worker->surname }}</td>
            <td>{{ $worker->patronymic}}</td>
            <td>{{ $worker->gender->name ?? '' }}</td>
            <td>{{ $worker->salary }}</td>
            <td>{{ $worker->departments->implode('title', ', ')}}</td>
            <td>
                <form action="{{route('staff.destroy', $worker->id)}}" class="form-horizontal" , method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Удалить</button>
                </form>

            </td>

        </tr>

    @endforeach
    </tbody>
</table>
@endif


</div>
