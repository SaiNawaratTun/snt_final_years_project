@extends('layouts.show')

@section('content')
    <div class="box">
        <div class="header">
          <strong><h2>Refreshments Donation Form</h2></strong>
        </div>
              <form action="{{ route('food.store') }}" method="POST" class="main-form">
                @csrf
                <div class="form">
                    <label for="name" class="label">Name :</label>
                    <div class="col">
                        <input id="name" type="text"  name="name" value="{{ old('name') }}" placeholder= "Enter Your Name" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="form-text text-danger" role="alert">
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
                                    <span class="form-text text-danger" role="alert" style="color:red;"
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

                  <div class="form3">
                    <label for="type" class="label">Refreshment :</label>
                        <div class="col">
                            <input name="type" type="text"  id="type" aria-describedby="typeHelp" placeholder="Enter Refreshments Name" value="{{ old('title') }}" required>
                                @error('type')
                                    <small id="typeHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                  </div>
                    <button type="submit" class="button">Submit</button>
            </form>
    </div>
@endsection

