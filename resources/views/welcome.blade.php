<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="jumbotron text-center">
        <h1>Hello!! Welcome to your AddressBook</h1>
        <hr>
    </div>
    <div class="container">
        <form method="GET" action="/search" >
            {!! csrf_field() !!}


            <div class="row">
                <div class="col-sm-2" >
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        Sort By
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="order/name">Sort By Name</a></li>
                            <li><a href="order/city">Sort By City</a></li>
                            <li><a href="order/state">Sort By State</a></li>
                        </ul>
                    </div>
                </div>  
                <div class="col-sm-4" ><input type="text" name="search" class="form-control" placeholder="Search by Name,Address,City,State or Zipcode"></div>
                <div class="col-sm-2" ><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button></div>
            </form>
            <div class="col-sm-2" >
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myNewAddress">Add New Address</button>
            </div>
            <div class="col-sm-2">
            <a class="btn btn-info" href="{{URL::previous() }}" >back</a>
            <div>
        </div>
        </div>
        </br>
        </br>
        </br>

       @if(!is_null(Session::get('addresses')))

         <?php $addresses = Session::get('addresses') ?>

         @elseif(!is_null(Session::get('message')))
           <h2>{{Session::get('message')}}</h2> 

        @endif
        <h2>List of Address </h2>
        <ul class="list-group">
            @foreach ($addresses as $address)
            <li class="list-group-item"> 
                Name:       {{$address->Name}} </br>
                Address:    {{$address->Address_1}} {{$address->Address_2}}</br> 
                City:       {{$address->City}} </br>
                State:      {{$address->State}} </br>
                Zipcode:    {{$address->ZipCode}}   

                <a class= "badge" href="/delete/{{$address->id}}">Delete</a>
                <a class= "badge" href="/editAddress/{{$address->id}}" data-toggle="modal" data-target="#myEditAddress">Edit</a></br>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Modal for Add New Address-->
    <div class="modal fade" id="myNewAddress" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          @include('NewAddress')
        </div>
    </div>

<!-- Modal for editing Address-->
    <div class="modal fade" id="myEditAddress" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          @include('editAddress')
        </div>
    </div>

</body>
</html> 