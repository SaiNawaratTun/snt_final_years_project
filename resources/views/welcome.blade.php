@extends('layouts.show')

@section('content')
    <div class="main">
      <div class="inner-main">
            <div class="main-items">
                <img class="sticky" src="/css/img/blood-bag.jpg" alt="Avatar">
                {{--  Copyright this photo form https://www.123rf.com/photo_110442545_stock-vector-blood-donation-vector-illustration-isolated-on-white-background-donate-blood-concept-with-blood-bag-.html  --}}
            </div>
            <div class="main-items">
                <div class="dbox">
                    <p>Blood Donation is one of the ways to help people in need and the best safe way to help others. Blood donation is drawn the blood from the person who wants to donate their blood and use it for Transfusions. The donor need to read and learn about what they need to do and can’t do before and after donating the blood. Before donating blood, donors need to be at least the age 18 years old and the weight need to have 110lb. The donor needs to have well sleep at the night and arrive rested.</p>
                    <div class="db">
                        <button class="button">
                            <a href="/form/create">Donate Blood</a>
                        </button>
                    </div>
                </div>
            </div>  
      </div>
      
      <div class="donor">
        <img src="/css/img/118002265_338738703921226_3700496273993263399_n.jpg" alt="Notebook" style="width:100%;">
        <div class="content">
          <h1 style="color: aliceblue;">Donor's Voice</h1>
          <p>Hello! I'm Sai Mon Myat Tun. I like to donate my blood to help the people who in need and especially donate my blood in my special day for example My Birthday and My Mother Birthday. I hope people can help each other. Thank You!</p>
        </div>
      </div>
    </div>

@endsection