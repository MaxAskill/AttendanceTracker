<!doctype html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HR</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
</head>

<body class="xl:flex">
    <!-- component -->
<div class="md:flex flex-col md:flex-row md:min-h-screen xl:w-3/12 ">
  <sidebar @click.away="open = false" class="flex flex-col w-full  text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
	  
      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
		<img src="img\Login-image.png"
				class="w-56 xl:mx-20 lg:mx-20 rounded-full bordercolor bordercolor border-4 "
				alt="Sample image"
				/>
				<h1 class="text-center text-lg xl:mt-9 font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">FIRSTNAME MN. LASTNAME</h1>
				<h1 class="text-center text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Job Position</h1>
				<div class="basis-1 px-3 grid ">
				<table class="table-fixed w-full content-center text-left xl:mt-20">
					<tr>
						<th>ID NO. :</th>
						<th class="font-medium">0000-0001</th>
					</tr>
					<tr>
						<th>CONTACT NUMBER :</th>
						<th class="font-medium">09123456789</th>
					</tr>
					<tr>
						<th>EMAIL: </th>
						<th class="font-medium">fm.lastname@email.com</th>
					</tr>
					<tr>
						<th>BRANCH: </th>
						<th class="font-medium">SM Bicutan</th>
					</tr>
					<tr>
						<th>CHAIN: </th>
						<th class="font-medium">SM Department Store</th>
					</tr>
					<tr>
						<th>BIRTHDAY: </th>
						<th class="font-medium">January 01, 1993</th>
					</tr>
				</table>

				<!-- <button class="border-xl bordercolor border-4 rounded-xl px-2 py-1 absolute inset-x-0 bottom-0 flex-shrink-0">Log Out</button> -->
				<button class="border-xl bordercolor border-4 rounded-xl px-2 py-1">Log Out</button>
			</div>
    </nav>
  </sidebar>
</div>

<content class="xl:w-9/12 sm:w-full px-20">
        <div class="grid md:grid-flow-row grid-rows-2 grid-cols-4">
			<div class="row-start-1 row-span-1 bg-green-900 pt-2">
				<div class="bg-gray-500 rounded-lg px-2 py-2 text-white text-center">
					<h1>Worked Hour Today</h1>
					<span class="countdown font-mono text-2xl">
						07:30:20
					</span>
				</div>
			</div>
			<div class="row-start-2 row-span-1 bg-red-900 pt-2">
				<div class="bg-gray-500 rounded-lg px2 py-2 text-center text-white">
					<h1>Timed In Today</h1>
					<span class="countdown font-mono text-2xl text-center ">
						<span style="--value:10;"></span>07
						<span style="--value:24;"></span>30
						<span style="--value:4;"></span>00
					</span>
				</div>
			</div>
			<div class="row-start-1 row-span-2 col-span-3 bg-blue-900 pt-2 pl-5">
				<div class="flex h-full bg-white rounded-lg px-2 py-2 grid md:grid-flow-row grid-rows-2 grid-cols-4">
					<!-- <span class="countdown font-mono text-2xl text-center ">
						<span style="--value:10;"></span>07
						<span style="--value:24;"></span>30
						<span style="--value:4;"></span>00
					</span> -->
					<div class="row-start-1  col-span-1 bg-green-900">
						<h1>Summary</h1>
						<h2>SEPTEMBER 2022</h2>
					</div>
					<div class="row-start-1  col-span-3 bg-red-900 flex items-center ">
						<button class="border-2 border-solid bordercolor rounded-2xl px-2 py-2 font-themecolor">View More</button>
					</div>
					<div class="bg-blue-900 text-center">
						<h1>Late</h1>
						<h2>0 Day/s</h2>
					</div>
					<div class="bg-brown-900 text-center">
						<h1>Undertime</h1>
						<h2>0 Day/s</h2>
					</div>
					<div class="bg-orange-900 text-center">
						<h1>Overtime</h1>
						<h2>0 Day/s</h2>
					</div>
					<div class="bg-gray-900 text-center">
						<h1>Hours Rendered</h1>
						<h2>0 Day/s</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="grid md:grid-flow-row grid-rows-2 grid-cols-4">
			<div class="row-start-1 row-span-1 bg-green-900 pt-2">
				<div class="bg-gray-500 rounded-lg px-2 py-2 text-white text-center">
					<h1>Worked Hour Today</h1>
					<span class="countdown font-mono text-2xl">
						07:30:20
					</span>
				</div>
			</div>
			<div class="row-start-2 row-span-1 bg-red-900 pt-2">
				<div class="bg-gray-500 rounded-lg px2 py-2 text-center text-white">
					<h1>Timed In Today</h1>
					<span class="countdown font-mono text-2xl text-center ">
						<span style="--value:10;"></span>07
						<span style="--value:24;"></span>30
						<span style="--value:4;"></span>00
					</span>
				</div>
			</div>
			<div class="row-start-1 row-span-2 col-span-3 bg-blue-900 pt-2 pl-5">
				<div class="flex h-full bg-white rounded-lg px-2 py-2 grid md:grid-flow-row grid-rows-2 grid-cols-4">
					<!-- <span class="countdown font-mono text-2xl text-center ">
						<span style="--value:10;"></span>07
						<span style="--value:24;"></span>30
						<span style="--value:4;"></span>00
					</span> -->
					<div class="row-start-1  col-span-1 bg-green-900">
						<h1>Summary</h1>
						<h2>SEPTEMBER 2022</h2>
					</div>
					<div class="row-start-1  col-span-3 bg-red-900 flex items-center ">
						<button class="border-2 border-solid bordercolor rounded-2xl px-2 py-2 font-themecolor">View More</button>
					</div>
					<div class="bg-blue-900 text-center">
						<h1>Late</h1>
						<h2>0 Day/s</h2>
					</div>
					<div class="bg-brown-900 text-center">
						<h1>Undertime</h1>
						<h2>0 Day/s</h2>
					</div>
					<div class="bg-orange-900 text-center">
						<h1>Overtime</h1>
						<h2>0 Day/s</h2>
					</div>
					<div class="bg-gray-900 text-center">
						<h1>Hours Rendered</h1>
						<h2>0 Day/s</h2>
					</div>
				</div>
			</div>
		</div>
</content>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>