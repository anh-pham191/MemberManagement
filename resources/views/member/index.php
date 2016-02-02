<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../public/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:500&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:700&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kanit:400italic&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/app.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <title>Employee Management</title>
</head>

<body>

<div class="row" ng-app="TestApp" ng-controller="TestController">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <h1>List All Member</h1>
        <div class="contain" ng-repeat="m in members">

            <img class="avatar" src="{{ m.image }}">
            {{--
            <pre>{{ m.name }}</pre>
            --}}

            <pre class="name"><a href="member/{{m.id}} " name="link1" ng-click="Edit()">{{m.name}}</a></pre>


            <pre><input type="checkbox" name="edit" ng-click="Edit()" value="value1">Edit {{ m.name }}<br></pre>


            <?php echo "<br />"; ?>
        </div>

        <br>

    </div>


    <div class="col-md-4">

        <h1>Add a Member Here</h1>

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, array( 'class'=>'form-control', 'ng-model' => 'member.name')) !!}

            <form>
               Name:<br>
                <input type="text" name="name" class="form-control" ng-model="member.name" ><br>
                Email:<br>
                <input type="text" name="email" class="form-control" ng-model="member.email" ><br>
                Phone:<br>
                <input type="text" name="phone" class="form-control" ng-model="member.phone" ><br>
                <input type="submit" value="Add Member" class="btn" ng-click="saveData()">

            </form>
        </div>

        <%member.name%>
        <h1>@{{member.name}}</h1>
        <h1>@{{member.email}}</h1>
        <h1>@{{member.phone}}</h1>
        <h1>@{{ isEdit }}</h1>
        {{--{!! Form::close() !!}--}}
    </div>
    <div class="col-md-2"></div>

</div>
</body>

<footer>
</footer>