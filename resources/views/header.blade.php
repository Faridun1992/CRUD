<div class="container portfolio_title">

    <!-- Title -->
    <div class="section-title">
        <h2>{{$title}}</h2>
    </div>
    <!--/Title -->

</div>
<!-- Container -->


<div class="portfolio">

    <div id="filters" class="sixteen columns">
        <ul style="padding:0px 0px 0px 0px">
            <li class="{{request()->is('/')?'active':''}}"><a href="{{ '/' }}">
                    <h5>Главная страница</h5>
                </a>
            </li>

            <li class="{{request()->is('departments.index')?'active':''}}">
                <a href="{{ route('departments.index') }}">
                    <h5>Отделы</h5>
                </a>
            </li>

            <li class="{{request()->is('staff.index')?'active':''}}">
                <a href="{{ route('staff.index') }}">
                    <h5>Сотрудники</h5>
                </a>
            </li>
        </ul>
    </div>

</div>
