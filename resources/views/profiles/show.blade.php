<x-app>
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" class="rounded-lg mb-2" alt="{{ $user->name }}">

        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>
        <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur consequatur
            distinctio eius, facilis iusto minima necessitatibus neque officia omnis pariatur quaerat quas
            quasi? Enim labore obcaecati placeat?</p>
        <img src="{{ $user->avatar }}" alt="" class="rounded-full absolute"
             style="width: 150px; left: calc(50% - 75px); top:54%;">
    </header>

    @include('includes.timeline',['tweets' => $user->tweets])
</x-app>
