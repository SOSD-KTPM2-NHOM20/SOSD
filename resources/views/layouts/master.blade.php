<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Quản lí biển báo</title>
    <LINK REL="SHORTCUT ICON"  HREF="source/img/logo.png">

    <!-- Bootstrap Core CSS -->
    	@include('layouts.client.head')
</head>

<body>

    <div id="wrapper">

       @include('layouts.client.navigation')

       @yield('content')

    </div>
    <!-- /#wrapper -->

	 @include('layouts.client.script')
  
</body>

</html>

