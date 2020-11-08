@extends('layouts.view')

@section('content')
          <div id="header" class="col-12">
            <h1>Blood Donor Form</h1> 
          </div>
          <div class="col-12">
            <table>
                <thead>
                    <tr>
                        <th> ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Bloodtype</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms = App\Form::get()  as $form)
                    <tr>
                        <td>{{ $form->id }}</td>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->phone }}</td>
                        <td>{{ $form->date }}</td>
                        <td>{{ $form->time }}</td>
                        <td>{{ $form->bloodtype }}</td>
                        <td>
                          <form method="POST" action="/form/{{$form->id}}">
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
            