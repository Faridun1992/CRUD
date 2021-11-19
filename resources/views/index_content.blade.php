<div style="margin:0px 50px 0px 50px;">

	<table class="table table-hover table-striped">
				<thead>
					<th>Имя Сотрудников</th>
						@foreach($departments as $department)
							<th>{{ $department->title}}</th>
						@endforeach
				</thead>
				<tbody>
						@foreach($staff as $worker)
							<tr>

								<td>{{ $worker->name }}</td>
                                    @foreach($departments as $department)
										<td>
											@if($department->staffs->contains($worker))
												<input checked name=""  type="checkbox" value="{{ $department->id }}" disabled>
											@else
												<input name=""  type="checkbox" value="" disabled>
											@endif
										</td>
									@endforeach

							</tr>
						@endforeach
				</tbody>
	</table>
</div>
