<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    
    <div class=" min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white grid justify-items-center content-center  ">
        <div class=" relative flex flex-col h-80 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 border border-green-400">
            <img class="object-cover w-86 rounded-lg h-full " src="https://images.unsplash.com/photo-1513001900722-370f803f498d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Ym9va3N8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="relative flex flex-col justify-between p-4 leading-normal0">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$book->title}}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$book->description}}</p>
                <div class="grid grid-cols-2">  
                    <div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">By: {{$book->author->name}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Price: {{$book->price ?? 'Free'}}</p>
                    </div>
                    <div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Category: {{$book->category->title}}</p>
                    </div>
                </div>
                
                <div class='  w-full px-12 text-center flex justify-around'>
                    @if ((auth()->id() == $book->user_id))
                        <p class=" absolute top-0 right-4 font-medium text-green-600  ">You Borrowed This Book</p>
                    @else
                        <form action="{{route('user.borrow' , $book->id)}}" method="POST">
                            @csrf
                            <button class="font-medium text-blue-600 hover:underline ">Borrow Now</button>
                        </form>
                    @endif
                    <a href="/" class=" ml-8 font-medium text-blue-600 hover:underline ">Home</a>
                </div>

            </div>
        </div>
    </div>

</body>
</html>