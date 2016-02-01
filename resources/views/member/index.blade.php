@extends('main')

@section('content')

    <h1>List All Member</h1>
    <div ng-app="TestApp" ng-controller="TestController">
        <div class="contain" ng-repeat="m in members">

            <img class="avatar" src="@{{ m.image }}">
            {{--<pre>@{{ m.name }}</pre>--}}

            <pre class="name"><a href="member/@{{m.id}} ">@{{m.name}}</a></pre>

            <?php echo "<br />"; ?>
        </div>

        <br>
    </div>

    {{--@foreach($members as $member)--}}
    {{--<h1><a href="{{url('/member', $member->id)}}">{{$member -> name}}</a></h1>--}}

    {{--<h3>  {{ Form::image($member->image, '',array('height'=>80, 'width'=> 80)   ) }}--}}
    {{--</h3>--}}
    {{--@endforeach--}}

@stop