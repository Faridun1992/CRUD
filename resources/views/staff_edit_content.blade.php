<div class="wrapper container-fluid">
    <form action="{{ route('staff.update', $staff) }}" class="form-horizontal" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label class="col-xs-2 control-label">Имя:</label>
            <div class="col-xs-8">
                <input type="text" name="name" value="{{$staff->name}}" class="form-control" placeholder="введите имя">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-2 control-label">Фамилия:</label>

            <div class="col-xs-8">
                <input type="text" name="surname" value="{{$staff->surname}}" class="form-control"
                       placeholder="введите фамилию">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-2 control-label">Отчество:</label>

            <div class="col-xs-8">
                <input type="text" name="patronymic" value="{{$staff->patronymic}}" class="form-control"
                       placeholder="введите отчество">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-2 control-label">Выберите пол</label>
            <div class="col-xs-8">
                <select name="gender_id" class="form-control">
                    <option value=""></option>
                    @foreach($genders as $gender)
                        @if(!$gender->staff->contains($staff))
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @else
                            <option selected value="{{$gender->id}}">{{$gender->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-2 control-label">Зарплата:</label>

            <div class="col-xs-8">
                <input type="text" name="salary" value="{{$staff->salary}}" class="form-control"
                       placeholder="введите зарплату">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Отдел:</label>

            <div class="col-xs-8">

                @foreach ($departments as $department)

                    @if($staff->departments->contains($department))
                        <input checked name="list[]" type="checkbox" value="{{ $department->id }}">
                    @else
                        <input name="list[]" type="checkbox" value="{{ $department->id }}">
                    @endif


                    {{ $department->title }}
                @endforeach

            </div>
        </div>


        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
</div>
