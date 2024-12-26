<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="font-[sans-serif]">
        <div class="min-h-screen flex fle-col items-center justify-center p-6">
          <div class="grid lg:grid-cols-2 items-center gap-6 max-w-7xl max-lg:max-w-xl w-full">
            <form class="lg:max-w-md w-full" method="POST" action="/get-register-info">
              @csrf
              <h3 class="text-gray-800 text-3xl font-extrabold mb-12">Registration</h3>
              <div class="space-y-6">
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Name</label>
                  <input name="name" type="text" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter name" />
                  <span>@error('name'){{$message}}@enderror</span>
                </div>
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Email</label>
                  <input name="email" type="text" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter email" />
                  <span>@error('email'){{$message}}@enderror</span>
                </div>
                <div>
                  <label class="text-gray-800 text-sm mb-2 block">Password</label>
                  <input name="password" type="password" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter password" />
                  <span>@error('password'){{$message}}@enderror</span>
                </div>
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter password" />
                  </div>
                <div class="flex items-center">
                  <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 border-gray-300 rounded" />
                  <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                    I accept the <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a>
                  </label>
                  <span>@error('remember-me'){{$message}}@enderror</span>
                </div>
              </div>
  
              <div class="mt-12">
                <button type="submit" class="py-4 px-8 text-sm font-semibold text-white tracking-wide bg-blue-600 hover:bg-blue-700 focus:outline-none">
                  Create an account
                </button>
              </div>
              <p class="text-sm text-gray-800 mt-6">Already have an account? <a href="/login-page" class="text-blue-600 font-semibold hover:underline ml-1">SignIn here</a></p>
            </form>
  
            <div class="h-full max-lg:mt-12">
              <img src="https://readymadeui.com/login-image.webp" class="w-full h-full object-cover" alt="Dining Experience" />
            </div>
          </div>
        </div>
      </div>
</body>
</html>