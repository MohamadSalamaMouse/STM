<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session("success"))
                <div x-data="{ open: true }" x-show="open" x-init="setTimeout(()=> open = false,2000)" class="flex items-center w-fit p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                    <span class="sr-only">Info</span>
                    <div><span class="font-medium">Success alert!</span> {{session('success')}}</div>
                </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        @if(count($user->books) > 0)
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Book Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->books as $book )
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$book->title}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{substr($book->description,0,50)}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$book->category->title}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$book->price ?? 'Free'}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{route('user.book.return' , $book->id)}}" method="POST">
                                            @csrf
                                            <button class="font-medium text-blue-600 hover:underline">Retrun Back</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="flex items-center p-4 m-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
                            <span class="sr-only">Info</span>
                            <div>
                              <span class="font-medium">Warning alert !</span> There Is No Borrowed Books, <a href="/" class="">Borrow Now</a>
                            </div>
                          </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
