@extends('layouts.view')

@section('content')

<div id="header" class="col-12">
    <h1>Covid-19 Volunteer Form</h1> 
</div>
  <div class="col-12">
    <table>
      <thead>
          <tr>
              <th> ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>City</th>
              <th>Free From</th>
              <th>To</th>
          </tr>
      </thead>
       <tbody>
          @foreach ($volunteers = App\Volunteer::get() as $volunteer)
          <tr>
              <td>{{ $volunteer->id }}</td>
              <td>{{ $volunteer->name }}</td>
              <td>{{ $volunteer->email }}</td>
              <td>{{ $volunteer->phone }}</td>
              <td>{{ $volunteer->city }}</td>
              <td>{{ $volunteer->sdate }}</td>
              <td>{{ $volunteer->edate }}</td>
              <td>
                <form method="POST" action="/volunteer/{{$volunteer->id}}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
          
                  <div class="form-group">
                      <input type="submit" class="button" value="Delete">
                  </div>
              </form> 
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
   {{--  {{ $forms->links() }}  --}}
</div>


@endsection
            