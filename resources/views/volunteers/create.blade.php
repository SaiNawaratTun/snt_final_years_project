@extends('layouts.show')

@section('content')
    <div class="box2">
        <div class="header">
          <strong><h2>Covid-19 Volunteer</h2></strong>
        </div>
              <form action="{{ route('volunteer.store') }}" method="POST" class="main-form">
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
                  <div class="form4">
                    <label for="city" class="label">Choose City You Want to be Volunteer:</label>
                        <div class="col">
                            <select id="city" name="city"  class="custom-select" >
                                    <Option value="Yangon">Yangon</Option>
                                    <option value="Mandalay">Mandalay</option>
                                    <option value="Sittwe">Sittwe</option>
                                    <option value="Taunggyi">Taunggyi</option>
                                    <option value="Kyaukme">Kyaukme</option>
                            </select>
                        </div>
                </div>
                  <div class="form3">
                    <label for="sdate" class="label">Selete Your Free Date :</label>
                        <div class="col">
                            <input name="sdate" type="date" id="sdate" required>
                        </div>
                  </div>
                  <div class="form3">
                    <label for="edate" class="label">To :</label>
                        <div class="col">
                            <input name="edate" type="date" id="edate" required>
                        </div>
                  </div>
                  
                    <button type="submit" class="button">Submit</button>
            </form>
    </div>
@endsection

