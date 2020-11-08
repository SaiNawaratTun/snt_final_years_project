<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            /*background: linear-gradient(-45deg, #504947, #e73c45, #23cfd5, #23d5ab);
            background-size: 400% 800%;
          animation: gradient 20s ease infinite; */
           box-sizing: border-box;
          }
          
          /*@keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
          }*/
          h1{
            text-align: center;
            padding: 12px; 
            font-size: 40px;
            color: black;
          }
        .box{
            /* opacity: 0.8; */
             margin: 10px auto;
             width: 500px;
             height: 620px;
             border-radius: 9px;
             overflow: hidden;
             border: 3px solid black;
             background-color: #ffffff;
             filter: alpha(opacity=60);
          }
    </style>
    <title>SNT Blood Donation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="header" class="col-12">
                <h1>Blood Type "B"</h1> 
            </div>
            <div class="box">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Bloodtype</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms = App\Form::where('bloodtype', 'B')->get() as $form)
                            <tr>
                                <td>{{ $form->name }}</td>
                                <td>{{ $form->phone }}</td>
                                <td>{{ $form->bloodtype }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{--  {{ $forms->links() }}  --}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>