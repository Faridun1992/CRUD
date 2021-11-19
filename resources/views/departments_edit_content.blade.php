<div class="wrapper container-fluid">
	<form action="{{ route('departments.update', $department) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
		@csrf
        @method('patch')

    <div class="form-group">
    	<label class="col-xs-2 control-label">Название:</label>

	     <div class="col-xs-8">
	     	<input type="text" name="title" value="{{$department->title}}" class="form-control" placeholder="введите название">
		 </div>
    </div>


      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Сохранить</button>
	    </div>
	  </div>

</form>
</div>
