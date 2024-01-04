<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Meme Page</title>
</head>
<body class="bg-gray-100">
    <div class="md:flex md:items-center md:justify-center h-screen p-5">
        <div class="w-3/4 md:w-1/3 bg-gray-300 p-5 mx-auto rounded-lg md:min-h-2/4 shadow-xl">
            <img class="mx-auto mb-2 rounded-lg" src="{{ asset('images/meme1.gif') }}" alt="meme" width="100px">

            <form action="" class=" p-3 rounded-lg">
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 border-gray-400 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 border-gray-400 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-900 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
                <p class="text-center text-gray-700">Don't have an account? <a class="text-blue-900" href="">Register</a></p>
            </form>
        </div>
        <div class="w-3/4 md:w-1/2 mt-5 md:mt-0 p-5 mx-auto rounded-lg">
            <h1 class="text-3xl text-center font-bold text-blue-900">Meme Page</h1>
            <p class="text-center">
                100% not a phishing site.
            </p>
                <img class="mx-auto" src="{{ asset('images/brook.gif') }}" alt="meme">
            <h1 class="text-2xl text-center font-bold mb-5 text-blue-900">Trust me I'm Brook</h1>
        </div>
    </div>

</body>
</html>