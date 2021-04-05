<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="px-10 md:px-64 min-w-full mx-auto">

                @if(count($users) == 0 ) 
                        <h1 class="text-center font-bold text-green-500 text-2xl">No Data Found</h1>
                    @endif
                <ul class="px-0 min-w-screen">
                    
                    @foreach ($users as $user)
                        
                    <li class="bg-white border list-none rounded-sm px-3 py-3 mx-auto" style='border-bottom-width:0;width: 100%'>
                        <a href="{{ $user->profile_url }}" target="_blank"><h1 class="font-bold text-xl">
                            
                            {{ $user->facebook_id }}  - {{  $user->full_name }}</h1></a>
                            <p>{{  $user->job_title }} : {{  $user->company }} </p>
                            <p>{{  $user->female }} </p>
                        </li>
                    @endforeach
                    
                  </ul>

                  {{ $users->links() }}
            </div>
        </div>
    </body>
</html>
