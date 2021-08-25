

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled JavaScript -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>

<img src="{{asset('User/images/post_images/'.$post->main_img)}}" alt="" height="100px;" width="100px;" >


@foreach ($chat as $chat)
@if ($chat->sender_id == session('id'))
<div class="container darker">
    @if($chat->sender_avatar != null)
    <img src="{{$chat->sender_avatar}}" alt="Avatar" class="right" style="width:100%;">
    @else
    <img src="{{asset('User/images/profile_images/'.$chat->sender_image)}}" alt="Avatar" class="right" style="width:100%;">
    @endif
    <p>{{$chat->message}}</p>
    <span class="time-left">{{$chat->updated_at->diffForHumans()}}</span>
</div>
@else
<div class="container">
    {{-- {{      dd($chat)}} --}}
    @if($chat->reciver_avatar != null)
    <img src="{{$chat->reciver_avatar}}" alt="Avatar"  style="width:100%;">
    @else
    <img src="{{asset('User/images/profile_images/'.$chat->reciver_image)}}" alt="Avatar"  style="width:100%;">
    @endif
    
    <p>{{$chat->message}}</p>
    <span class="time-left">{{$chat->updated_at->diffForHumans()}}</span>
</div>
@endif


@endforeach





</body>
</html>

@include('User.Layout.script')
<script>




  



</script>