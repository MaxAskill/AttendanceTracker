<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BARBIZON EVERYDAY</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    </head>

    <body class="bg-bb">
        <section class="grid grid-row-1 grid-cols-2">
            <div class="col-start-1 col-span-1 grow-0 shrink-1 md:shrink-0 basis-auto flex justify-end">
                <img src="img\Login-image.png" class="xl:w-5/6 sm:w-full xl:mx-35 xl:my-10" alt="Sample image" />
            </div>
            <div class="col-start-2 col-span-1  py-20">
                <div class="grid grid-row-2 grid-cols-1">
                    <div class="row-start-1 flex justify-center">
                        <img src="img\Logo.png" class="xl:w-1/2 sm:w-full " alt="Sample image" />
                    </div>
                    <div class="row-start-2 flex justify-center">
                        <form id="form" class="bgcolor rounded-3xl mt-10 w-2/4">
                            <div class="flex justify-center">
                                <p class="text-lg mb-0 mr-4 px-8 pt-8 lg:text-3xl text-white font-bold">LOG IN</p>
                            </div>

                            <div class="mb-6 px-10 pt-8">
                                <input type="text"
                                    class="form-control block w-full px-4 py-2 text-base font-normal text-white placeholder-white bg-transparent bg-clip-padding rounded-3xl border-2 border-white rounded transition ease-in-out m-0 focus:text-white focus:outline-none"
                                    id="username" placeholder="Email Address" />
                            </div>

                            <div class=" px-10 pb-8">
                                <input type="password"
                                    class="form-control block w-full px-4 py-2 xl:text-base sm:text-base font-normal text-white placeholder-white bg-transparent bg-clip-padding rounded-3xl border-2 border-white rounded transition ease-in-out m-0 focus:text-white focus:outline-none"
                                    id="password" placeholder="Password" />
                            </div>

                            <div class="text-center justify-center pb-4">
                                <button type="submit"
                                    class="inline-block px-7 py-3 bg-white font-themecolor font-medium text-sm leading-snug uppercase font-bold rounded-3xl shadow-md hover:bg-transparent hover:text-white hover:shadow-lg focus:bg-white focus:text-green-700 focus:shadow-lg focus:outline-none focus:ring focus:ring-gray-100 active:shadow-lg transition duration-150 ease-in-out">Login</button>
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

<script>
document.getElementById("form").addEventListener("submit", auth);

function auth(event) {
    event.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    console.log(username);

    if (username === "employee@gmail.com" && password === "user") {
        window.location.replace("{{URL('employee')}}");
    } else if (username === "hr@gmail.com" && password === "user") {
        window.location.replace("{{URL('hr')}}");
    } else if (username === "accounting@gmail.com" && password === "user") {
        console.log("Accounting")
        window.location.replace("{{URL('accounting')}}");
    } else if (username === "approver@gmail.com" && password === "user") {
        window.location.replace("{{URL('approver')}}");
    }
    else{
      alert("Please enter valid information");
         return;
    }

    //  if (username === "" && password === "") {
    //       alert("Please enter information");
    //  } else{
    //     
    //  }
}
</script>