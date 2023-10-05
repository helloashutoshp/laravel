<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="card card-warning col-8 container p-0">
        <div class="card-header">
            <h1 class="card-title" style="font-weight:bold;font-size:20px">Register user</h1>
        </div>
        <form action="{{ url('/') }}/regd" method="POST">
            @csrf
           
            <div class="card-body">

                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value = "{{old('name')}}">
                    <span class="text-danger" >
                        @error('name')
                        
                        {{$message}}    
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" id="email" placeholder="Enter email" value = "{{old('email')}}">
                    <span class="text-danger">
                        @error('email')
                        
                        {{$message}}    
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="password" class="form-control" id="pass"
                        placeholder="Enter password" >
                        <span class="text-danger">
                            @error('password')
                            
                            {{$message}}    
                            @enderror
                        </span>
                </div>

                <div class="form-group">

                    <label for="name">Confirm password</label>
                    <input type="text" name="conf" class="form-control" id="name" placeholder="confirm password">
                    <span class="text-danger" >
                        @error('conf')
                        
                        {{$message}}    
                        @enderror
                    </span>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </form>
    </div>
</body>

</html>
