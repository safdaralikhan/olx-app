<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="load"></div>
    <div class="container darker" style="background-color:coral">
        <form id="message_form">
            @csrf
        <input type="hidden" name="ad_id" id="ad_id" value="{{$chat->ad_id}}">
        <input type="hidden" name="user_id" id="user_id" value="{{$chat->sender_id}}">
        <input type="text" name="message" class="form-control" id="message">
    
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
    </form>
</body>
</html>

@include('User.Layout.script')

<script>
   
    $(document).ready(function(){

       
    $("#message_form").submit(function(e){
      e.preventDefault()
      $.ajax({
        url:"{{route('chat-send')}}",
        type:"post",
        data:$("#message_form").serialize(),
        success:function(result){
          
            $('#message').val("");
        }
      });
    });

   

    setInterval(function(){
            $("#load").load('/messanger/'+{{$id}})
            
        },3000);
    });



</script>