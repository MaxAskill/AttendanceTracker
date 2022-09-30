<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-bb">
    <section class="h-screen">
  <div class="px-6 h-full text-gray-800">
    <div class="flex  xl:justify-center lg:justify-between justify-center items-center flex-wrap g-6">
      <div class="grow-0 shrink-1 md:shrink-0 basis-auto  items-center xl:w-6/12 lg:w-6/12 md:w-9/12 xl:mt-10 md:mb-0">
        <span class="flex flex-row justify-center text-center pt-8 lg:text-4xl md:text-3xl sm:text-base font-bold">BARBIZON EVERYDAY GROUP OF COMPANIES</span>
        <img
          src="img\Login-image.png"
          class="xl:w-5/6 sm:w-full xl:mx-20 lg:mx-20"
          alt="Sample image"
        />
      </div>
      <div class="xl:ml-20 xl:w-2/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0 bg-themecolor rounded-3xl">
        <form>
          <div class="flex flex-row justify-center">
            <p class="text-lg mb-0 mr-4 px-8 pt-8 lg:text-3xl text-white font-bold">LOG IN</p>
          </div>

          <!-- Email input -->
          <div class="mb-6 px-10 pt-8">
            <input
              type="text"
              class="form-control block w-full px-4 py-2 text-base font-normal text-white placeholder-white bg-transparent bg-clip-padding rounded-3xl border-4 border-white rounded transition ease-in-out m-0 focus:text-white focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Email Address"
            />
          </div>

          <!-- Password input -->
          <div class=" px-10 pb-8">
            <input
              type="password"
              class="form-control block w-full px-4 py-2 xl:text-base sm:text-base font-normal text-white placeholder-white bg-transparent bg-clip-padding rounded-3xl border-4 border-white rounded transition ease-in-out m-0 focus:text-white focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Password"
            />
          </div>

          <div class="text-center justify-center pb-4">
            <button
              type="button"
              class="inline-block px-7 py-3 bg-white font-themecolor font-medium text-sm leading-snug uppercase font-bold rounded-3xl shadow-md hover:bg-transparent hover:text-white hover:shadow-lg focus:bg-white focus:text-green-700 focus:shadow-lg focus:outline-none focus:ring focus:ring-gray-100 active:shadow-lg transition duration-150 ease-in-out"
            >
              Login
            </button>
          </div>

          <div class="flex justify-center items-center mb-6 pb-4 pb-4">
            <a href="#!" class="text-white">Forgot password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

    </body>
</html>