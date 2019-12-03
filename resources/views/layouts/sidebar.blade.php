<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav" style="margin-right: -152px;margin-left: -226px;margin-bottom: -47px;margin-top: -10px;">
        <li>
            <a href="{{ action('HomeController@index') }}"> Dashbord</a>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#class"> CLASS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
            <ul id="class" class="collapse">
                <li><a href="{{ action('ClassController@create')}}"><i class="fa fa-fw fa-user-plus"></i> Add Class</a></li>
                <li><a href="{{ action('ClassController@index')}}"><i class="fa fa-fw fa-user-plus"></i> List Class</a></li>
            </ul>
        </li>

        <li>
            <a href="#" data-toggle="collapse" data-target="#section"> SECTION <i class="fa fa-fw fa-angle-down pull-right"></i></a>
            <ul id="section" class="collapse">
                <li><a href="{{ action('SectionController@create')}}"><i class="fa fa-fw fa-user-plus"></i> Add Section</a></li>
                <li><a href="{{ action('SectionController@index')}}"><i class="fa fa-fw fa-user-plus"></i> List Section</a></li>
            </ul>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#student"> STUDENT <i class="fa fa-fw fa-angle-down pull-right"></i></a>
            <ul id="student" class="collapse">
                <li><a href="{{ action('StudentController@create')}}"><i class="fa fa-fw fa-user-plus"></i> Add Student</a></li>
                <li><a href="{{ action('StudentController@index')}}"><i class="fa fa-fw fa-user-plus"></i> Student List</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ action('AttendanceController@create')}}"></i> ADD ATTENDANCE</a>
        </li>

    </ul>

</div>