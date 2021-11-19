<div class="wrapper container-fluid">
	<form action="{{route('departments.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

	<div class="form-group">
		<label class="col-xs-2 control-label">Название</label>
		<div class="col-xs-8">
			<input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Введите название">
		</div>

	</div>

<div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Сохранить</button>
	    </div>
	  </div>



	</form>

</div>

