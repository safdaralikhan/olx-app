<?php
use Carbon\Carbon;


?>

            @include('User.Layout.header')
            
                            <!-- Collect the nav links, forms, and other content for toggling -->

              


                            <div class="container rounded bg-white mt-5 mb-5">
                                <div class="row">
                                    <div class="col-md-3 border-right">
                                        @if ($User->user_img != null)
                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{asset('User/images/profile_images/'.$User->user_img)}}"><span class="font-weight-bold">{{$User->name}}</span><span class="text-black-50">{{$User->email}}</span><span> </span></div>
                                        @else
                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{$User->avatar}}"><span class="font-weight-bold">{{$User->name}}</span><span class="text-black-50">{{$User->email}}</span><span> </span></div>

                                        @endif
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <div class="p-3 py-5">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Profile Settings</h4>
                                            </div>
                                            <form action="/update_profile" method="post">
                                                <input type="hidden" name="id" value="{{$User->id}}">
                                            <div class="row mt-2">
                                                @csrf
                                                <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="Name" value="{{$User->name}}"></div>
                                                <div class="col-md-12"><label class="labels">Email ID</label><input type="text" disabled name="email" class="form-control" placeholder="enter email id" value="{{$User->email}}"></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" name="phone" class="form-control" placeholder="enter phone number" value="{{$User->phone_number}}"></div>
                                                <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="enter address" value="{{$User->address}}"></div>
                                                <div class="col-md-12"><label class="labels">Gender</label><select name="gender" class="form-control" id="">
                                                        <option value="">--Select Gender--</option>
                                                        <option value="Male" {{ $User->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ $User->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary text-center btn-lg">Save Changes</button>
                                            <p class="text-success">{{session('profilesuccessmessage')}}</p>
                                        </form>
                                            {{-- <div class="mt-5 text-center"><button class="btn btn-primary" type="button">Save Profile</button></div> --}}
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="p-3 py-5">
                                            <h4 class="text-left">Change Password</h4>  
                                            <br>   
                                            <form action="/change_pass" method="post">    
                                                @csrf     
                                                <input type="hidden" name="id" value="{{$User->id}}">                              
                                            <div class="col-md-12"><label class="labels">Old Password</label><input type="text" @if($User->user_id != null) disabled @endif  class="form-control" name="oldPassword" placeholder="Enter old password" value=""></div> <br>
                                            <div class="col-md-12"><label class="labels">New Password</label><input type="text" @if($User->user_id != null) disabled @endif class="form-control" name="newPassword" placeholder="Enter new password" value=""></div><br>
                                            <input type="submit" @if($User->user_id != null) disabled @endif class="btn btn-primary text-center btn-lg" value="Change Password">
                                            <p class="text-success">{{session('successmessage')}}</p>
                                            <p class="text-danger">{{session('failedmessage')}}</p>

                                             </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>
                            </div>
  


   

   
  
                        </div>
                    </div>
                </div>
    <!--================================
    END CALL TO ACTION AREA
=================================-->

    <!--================================
    START FOOTER AREA
=================================-->
    <footer class="footer-area">
        @include('User.Layout.bigFooter')
        <!-- end /.footer-big -->
        @include('User.Layout.miniFooter')     
    </footer>
    <!--================================
    END FOOTER AREA
=================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    @include('User.Layout.script')

    <style class=" text-center">
        .w-5
        {
            display:none;
        }
        p.text-sm.text-gray-700.leading-5 {
display: none;
}

    </style>
</body>
</html>



