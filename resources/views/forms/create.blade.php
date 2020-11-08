@extends('layouts.show')

@section('content')
    <div class="box">
        <div class="header">
          <strong><h2>Blood Donation Form</h2></strong>
        </div>
              <form action="{{ route('form.store') }}" method="POST" class="main-form">
                @csrf
                <div class="form">
                    <label for="name" class="label">Name :</label>
                    <div class="col">
                        <input id="name" type="text"  name="name" value="{{ old('name') }}" placeholder= "Enter Your Name" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form1">
                    <label for="phone" class="label">Phone Number :</label>
                        <div class="col">
                            <input name="phone" type="number"  id="phone" aria-describedby="phoneHelp" placeholder="09#########" value="{{ old('title') }}" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert" style="color:red;"
                                    <strong>{{ $message }}</strong>
                                </span>                                
                             @enderror
                        </div>
                  </div>

                  <div class="form2">
                    <label for="date" class="label">Selete Date :</label>
                        <div class="col">
                            <input name="date" type="date" id="date" required>
                        </div>
                  </div>
                  <div class="form3">
                    <label for="time" class="label">Selete Time :  <small>Valid hours are 9am to 6pm</small></label>
                        <div class="col">
                            <input name="time" type="time" id="time" min="09:00" max="18:00" required>
                        </div>
                  </div>
                  <div class="form4">
                    <label for="bloodtype" class="label">Choose Blood Type</label>
                        <div class="col">
                            <select id="bloodtype" name="bloodtype"  class="custom-select" >
                                    <Option value="A">A</Option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                    <option value="AB">AB</option>
                            </select>
                            {{--  <input type="text" name="bloodtype">  --}}
                        </div>
                </div>
                    <button type="submit" class="button">Submit</button>
            </form>
    </div>
@endsection

