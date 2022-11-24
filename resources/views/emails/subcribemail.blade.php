<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .home{
            max-width: 35rem;
            widows: 100%;
            margin: 0 auto
        }
        .banner{
           margin: .4rem 0
        }
        .text-main{
            color:  rgb(246, 22, 115);
        }
        .icon{
            display: flex;
            align-items: center;
            gap: .3rem;
        }
        .suc{
            width: 100%;
            max-height: 10rem;
            height: auto;
            object-fit: contain;
            object-position: top;
        }
    </style>

</head>
<body>
    <div class="home">
    <img src="https://images.squarespace-cdn.com/content/v1/524883b7e4b03fcb7c64e24c/1625746198275-ZX9QS1BV0L8O2TIK0G0S/How+to+Create+Paid+Newsletter+Subscription.jpg?format=1500w" alt="success" class="suc">
    <h4 class="banner">Hi Dear, {{ $details['email'] }}<h4>
     <p>This is to inform that your Subscription to Well<span class="text-main">style</span> was successfully, you will be inform with any update we have <br> we love you {{ $details['email'] }}</p>
     <div>Date: {{ now()->diffForHumans() }}</div>


</div>
</body>
</html>





