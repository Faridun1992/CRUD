<div style="margin:0px 50px 0px 50px;">
	@if($departments)
<a  href = "{{ route('departments.create') }}">Добавить новый отдел</a></div>
	<table class="table table-hover table-striped">
		<thead>
			<tr>

				<th>Название</th>
				<th>Количество сотрудников</th>
				<th>Максимальная заработная плата</th>
				<th>Удалить</th>
			</tr>
		</thead>

		<tbody>
			@foreach($departments as $department)
			<tr>

				<td alt ="{{ $department->title }}" ><a href="{{route('departments.edit', $department)}}">{{ $department->title }}</a></td>


				<td>{{ $department->staffs->count() }}</td>
                <td>{{ $department->staffs->max('salary') }}</td>

				<td>
					<form action="{{route('departments.destroy', $department)}}" class="form-horizontal", method="POST">
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
