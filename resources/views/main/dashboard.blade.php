@if(session('login') =='user')
   

@include('partials.header')

<a href="/logout">Logout</a>

    <div class="md:flex md:items-center md:justify-center h-screen p-5">

        <div class="w-3/4 md:w-1/2 mt-5 md:mt-0 p-5 mx-auto rounded-lg">
            <h1 class="text-3xl text-center font-bold text-blue-900">Meme Page</h1>
            <p class="text-center">
                100% not a phishing site.
            </p>
                <img class="mx-auto rounded-lg" src="{{ asset('images/RR.gif') }}" alt="meme" width="500px">
            <h1 class="text-2xl text-center font-bold mb-5 text-blue-900">T_T</h1>
        </div>

        <div class="w-3/4 md:w-1/2 mt-5 md:mt-0 p-5 mx-auto rounded-lg">
            <h1 class="text-3xl text-center font-bold text-blue-900">Meme Page</h1>
            <p class="text-center">
                100% not a phishing site.
            </p>
                <img class="mx-auto rounded-lg" src="{{ asset('images/meme2.gif') }}" alt="meme" width="300px">
            <h1 class="text-2xl text-center font-bold mb-5 text-blue-900">T_T</h1>
        </div>

        

    </div>

@include('partials.footer')
@endif
<h1>Login required</h1>