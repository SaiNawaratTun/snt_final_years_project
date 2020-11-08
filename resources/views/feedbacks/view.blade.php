
            @extends('layouts.view')

            @section('content')
                
            <div id="header" class="col-12">
              <h1>Feedback & Message</h1> 
          </div>
          
            <div class="col-10 d-flex"> 
              <table>
                  <thead >
                      <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Message</th>
                      </tr>
                  </thead>
                   <tbody>
                      @foreach ($feedbacks = App\Feedback::get() as $feedback)
                      <tr>
                          <td>{{ $feedback->name }}</td>
                          <td>{{ $feedback->email }}</td>
                          <td>{{ $feedback->message }}</td>
                          <td>
                            <form method="POST" action="/feedback/{{$feedback->id}}">
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
             {{--  {{ $feedbacks->links() }}  --}}
          </div>
            
            @endsection