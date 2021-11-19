<div class="wrapper container-fluid">
	<form action="{{route('staff.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
    	<label class="col-xs-2 control-label">Имя:</label>
	     <div class="col-xs-8">
	     	<input type="text" name="name" value="" class="form-control" placeholder="введите имя сотрудника">
		 </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Фамилия:</label>

	     <div class="col-xs-8">
	     	<input type="text" name="surname" value="" class="form-control" placeholder="введите фамилию сотрудника">
		 </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Отчество:</label>

	     <div class="col-xs-8">
	     	<input type="text" name="patronymic" value="" class="form-control" placeholder="введите отчество">
		 </div>
    </div>

    <div class="form-group">
    	<label class="col-xs-2 control-label">Выберите пол</label>
    		<div class="col-xs-8">
    		<select name="gender_id" class="form-control">
                <option>Выберите пол</option>
				@foreach($genders as $gender)
				<option   value= "{{$gender->id}}">{{$gender->name}}</option>
				@endforeach
			</select>
			</div>
	</div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Зарплата:</label>

	     <div class="col-xs-8">
	     	<input type="text" name="salary" value="" class="form-control" placeholder="введите зарплату">
		 </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label">Отдел:</label>

        <div class="col-xs-8">

                @foreach ($departments as $department)

                        <input  name="list[]" type="checkbox" value="{{$department->id}}">
                        {{ $department->title }}
                @endforeach

        </div>
    </div>


      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Добавить</button>
	    </div>
	  </div>

</form>
</div>


