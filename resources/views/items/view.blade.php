@extends('layouts.view')

@section('content')
<div id="header" class="col-12">
  <h1>Covid-19 Item Donation Form</h1> 
</div>
<div class="col-12">
  <table>
    <thead>
        <tr>
            <th> ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Type</th>
        </tr>
    </thead>
     <tbody>
        @foreach ($items =App\Item::get() as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->date }}</td>
            <td>{{ $item->type }}</td>
            <td>
              <form method="POST" action="/item/{{$item->id}}">
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
  </table>
 {{--  {{ $forms->links() }}  --}}
</div>


@endsection
            