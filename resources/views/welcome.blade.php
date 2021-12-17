<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- tailwind --}}
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    </head>

<body class="bg-blue-900 text-blue-100 pt-20">
    <div class="max-w-5x1 mx-auto">

       <div>
           <form action="/posts" method="POST" class="mb-20">
               @csrf
               <input type="text" name="title" class="mb-4 w-full p-2 border-2
               border-blue-500 text-black" placeholder="title">

               <input type="text" name="description" class="mb-4 w-full p-2 border-2
               border-blue-500 text-black" placeholder="description">

               <input type="hidden" name="user_id" class="mb-4 w-full p-2 border-2
               border-blue-500 text-black" placeholder="User" value="{{auth()->user()->id}}">

              <button type="submit" value="Send Message" class="mb-4 btn btn-danger
              bg-yellow-200 text-black py-3 px-6 rounded-full">
               Post
              </button>
           </form>
        </div>

        <div>
           @foreach ($posts as $post)
           <div class="border-b-2 border-blue-500 p-2" >
               <form action="/posts/{{ $post->id}}" method="POST"
                   class="flex space-2">
                   @csrf
                   @method('PUT')
                   {{-- <li><a href="{{route('posts.show', [ 'id' => $post->id ])}}">{{$post->title}}</a></li> --}}
                    <input type="text" name="title" value="{{$post->title}} "
                    class="bg-white py-2 px-4 rounded-full text-black">
                    <input type="text" name="description" value="{{$post->description}} "
                    class="bg-white py-2 px-4 rounded-full text-black">
                    <input type="text" name="user_id" value="{{$post->user_id}} "
                    class="bg-white py-2 px-4 rounded-full text-black" value="{{auth()->user()->id}}">


              <button type="submit"  class="bg-blue-300
              text-blue-900  py-3 px-4 rounded-full">
               Edit
              </button>
              <button   class="bg-blue-300
              text-blue-900  py-3 px-4 rounded-full">
              <a action="/posts/{{ $post}}" method="DELETE">

               Delete
              </a>
              </button>


        </div>
           </div>
           @endforeach

       </div>

    <div>

    </div>

    <div>
        <h1>Comment</h1>
        @foreach ($comments as $comment)
        <div class="border-b-2 border-blue-500 p-2" >
            <form action="/comments/{{ $comment->id}}" method="POST"
                class="flex space-2">
                @csrf
                @method('PUT')
                {{-- <li><a href="{{route('posts.show', [ 'id' => $post->id ])}}">{{$post->title}}</a></li> --}}
                 <input type="text" name="title" value="{{$comment->comment}} "
                 class="bg-white py-2 px-4 rounded-full text-black">
                 <input type="text" name="description" value="{{$comment->post_id}} "
                 class="bg-white py-2 px-4 rounded-full text-black" value="{{$post->id}}">

                 <input type="text" name="user_id" value="{{$comment->user_id}} "
                 class="bg-white py-2 px-4 rounded-full text-black" value="{{auth()->user()->id}}">


           <button type="submit"  class="bg-blue-300
           text-blue-900  py-3 px-4 rounded-full">
            Edit
           </button>
           <button   class="bg-blue-300
           text-blue-900  py-3 px-4 rounded-full">
           <a action="/posts/{{ $post}}" method="DELETE">

            Delete
           </a>
           </button>


            </form >

        </div>
        @endforeach

    </div>


   </div>

</body>
</html>
