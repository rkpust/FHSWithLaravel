@extends('layout.master')

@section('title')

<title>যোগাযোগ</title>

@endsection


@section('maincontent')

        <div class="column middle">

         <div class="maincontent-head">যোগাযোগ</div>

         <br>
         <br>

         <div class="content-style" style="font-size: 16px;">
             <p style="font-size: 18px;"><b>ফুলশো উচ্চ বিদ্যালয়</b></p>
             <br>
               
             📞 +৮৮০১২৩৪৫৬৭৮৯ 
             <br> 

             ✉ <a href="mailto:example@fsh.edu.bd" class="link-deco" style="font-family:times new roman;"  target="_blank">example@fsh.edu.bd</a>
             
             <br>
             <img src="image/location.png" style="width:16px; height: 16px;"> ফুলশো, কেশরহাট পৌরসভা, মোহনপুর, রাজশাহী ।  
         </div>


         <br>
         <br>
         <br>
         <br>

        
         <h3>যে কোন মতামতের জন্য নিচের ফর্মটি যথাযথভাবে পূরন করুন ।</h3>
         <br>


         <div class="formcontainer">

              <div style=" color:red; text-align:center">
             @if(session()->has('success'))
             {{ session()->get('success')}}
             @endif

             @if(session()->has('fail'))
             {{ session()->get('fail')}}
             @endif
         </div>

         <br>
         <br>

             <form action="opinion" method="post">

                @csrf

             <div class="row">
             <div class="col-25">
                <label for="fullname">নামঃ</label>
             </div>
             <div class="col-75">
             <input type="text" id="fullname" name="fullname" placeholder="আপনার পূর্ণ নাম লিখুন..." value = "{{old('fullname')}}">
             <span style="color:red"> @error('fullname'){{ $message }} @enderror </span>
             </div>
         </div>


         <div class="row">
             <div class="col-25">
                <label for="mobileno">মোবাইল নম্বরঃ</label>
             </div>
             <div class="col-75">
                 <input type="text" id="mobileno" name="mobileno" placeholder="আপনার মোবাইল নম্বর লিখুন..." value = "{{old('mobileno')}}" >
                 <span style="color:red"> @error('mobileno'){{ $message }} @enderror </span>
             </div>
         </div>

         <div class="row">
             <div class="col-25">
                <label for="email">ই-মেইলঃ</label>
             </div>
             <div class="col-75">
                 <input type="email" id="email" name="email" placeholder="আপনার ই-মেইল আড্রেসটি লিখুন..." value = "{{old('email')}}">
                 <span style="color:red"> @error('email'){{ $message }} @enderror </span>
             </div>
         </div>

         <div class="row">
             <div class="col-25">
                <label for="address">ঠিকানাঃ</label>
             </div>
             <div class="col-75">
                 <input type="text" id="address" name="address" placeholder="আপনার পূর্ণ ঠিকানা লিখুন..." value = "{{old('address')}}" >
                 <span style="color:red"> @error('address'){{ $message }} @enderror </span>
             </div>
         </div>

  
         <div class="row">
             <div class="col-25">
                 <label for="subject">মতামতঃ</label>
             </div>
             <div class="col-75">
                 <textarea id="subject" name="subject" placeholder="আপনার মতামত লিখুন..." style="height:200px"></textarea>

                 <span style="color:red"> @error('subject'){{ $message }} @enderror </span>
             </div>
         </div>

         <div class="row">
             <input type="submit" name="Submit" value="জমা দিন">
         </div>

         </form>


         </div>


         </div>

         
@endsection