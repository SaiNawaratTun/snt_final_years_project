    @extends('layouts.show')

    @section('content')
    <div class="box">
            <div id="insert-form" class="header">
                <h2>Feedback & Message</h2>
            </div>
            <div>
                <form action="{{ route('feedback.store') }}" method="POST" class="main-form" >
                    @csrf
                    <div class="form">
                      <label for="name">Name :</label>
                      <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                      <small id="nameeHelp" class="form-text text-danger">{{ $message }}</small>
                      @enderror
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
                    <div class="form1">
                        <label for="message">Message :</label>
                        <textarea name="message" class="form-control" id="message" aria-describedby="mHelp" placeholder="Enter Your Message" rows="10" required>{{ old('message') }}</textarea>
                        @error('messsage')
                        <small id="mHelp" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="button">Submit</button>
                  </form>
            </div>
    </div>
@endsection