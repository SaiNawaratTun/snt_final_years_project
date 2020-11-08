@extends('layouts.show')

@section('content')
    <div class="box">
        <div class="header">
          <strong><h2>Donate Covid-19 Item Form</h2></strong>
        </div>
              <form action="{{ route('item.store') }}" method="POST" class="main-form">
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
                    <label for="email" class="label">Email :</label>
                        <div class="col">
                            <input name="email" type="email"  id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" value="{{ old('title') }}" required>
                                @error('eamil')
                                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                  </div>

                <div class="form2">
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

                  <div class="form3">
                    <label for="date" class="label">Selete Date :</label>
                        <div class="col">
                            <input name="date" type="date" id="date" required>
                        </div>
                  </div>

                  <div class="form4">
                    <label for="type" class="label">Choose Item Type</label>
                        <div class="col">
                            <select id="type" name="type"  class="custom-select" >
                                    <Option value="Face Mask">Face Mask</Option>
                                    <option value="Hand Sanitizer">Hand Sanitizer</option>
                                    <option value="PPE Clothes">PPE Clothes</option>
                                    <option value="other">Other</option>
                            </select>
                            {{--  <input type="text" name="bloodtype">  --}}
                        </div>
                </div>
                    <button type="submit" class="button">Submit</button>
                
            </form>
    </div>
@endsection

