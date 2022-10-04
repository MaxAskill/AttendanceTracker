<!doctype html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OT History</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
</head>

<body class="xl:flex">
    <!-- component -->
	<div class="md:flex flex-col md:flex-row md:min-h-screen xl:w-3/12">
	<sidebar @click.away="open = false" class="flex flex-col w-full xl:h-screen sticky top-0 text-gray-700 bg-white flex-shrink-0" x-data="{ open: false }">
		<div class="flex-shrink-0 px-8 py-4 flex flex-row">
		
		<button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
			<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
			<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
		</button>
		</div>
		<nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block xl:px-10 pb-4 md:pb-0 items-center justify-between">
			<img src="img\Login-image.png"
					class="w-56 xl:mx-20 lg:mx-20 rounded-full bordercolor bordercolor border-4 "
					alt="Sample image"
					/>
					<h1 class="text-center text-2xl break-words font-bold xl:mt-9 font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">CRISOSTOMO IBARRA</h1>
					<h1 class="text-center text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">NBFI-EPC Sales</h1>
					<div class="basis-1 px-5 grid">
						<div class="flex-none w-full text-left xl:mt-20 tracking-wide leading-loose">
							<p><span class="font-bold">ID NO. : </span><br>0000-0001</p>
							<p><span class="font-bold">CONTACT NUMBER : </span><br>09123456789</p>
							<p><span class="font-bold">EMAIL : </span><br>crisostomo.ibarra@barbizonfashion.com</p>
							<p><span class="font-bold">BRANCH : </span><br>SM Bicutan</p>
							<p><span class="font-bold">CHAIN : </span><br>SM Department Store</p>
							<p><span class="font-bold">BIRTHDAY : </span><br>January 12, 1995</p>
						</div>
						
						<a href="/" class="flex items-center justify-center">
							<button class="border-xl bordercolor border-4 rounded-xl px-2 py-1 mt-28 font-bold font-themecolor focu:outline-none">Log Out</button></a>
					</div>
		</nav>
	</sidebar>
	</div>

	<content class="xl:w-9/12 sm:w-full px-10 pt-5">

<div class="grid bgcolor overflow-auto rounded-lg drop-shadow-md">
<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
			<div class="row-start-1 row-span-1 flex">
				<h1 class="text-white text-4xl font-bold px">Overtime History</h1>

			</div>
			<div class="row-start-2 row-span-1 flex items-center">
				<div class="xl:w-96 xl:h-46">
					<input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch" placeholder="Search"/>
				</div>
				<span class="text-white ml-5 h-10 mb-3"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
				<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
			</div>
			<div class="row-start-2 row-span-2">
				<div class="flex  float-right">
					<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none">File Overtime</button>
				</div>
			</div>
		</div>
  <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">Date</th>
				<th class="p-4 w-2/6">Time In</th>
				<th class="p-4 w-2/6">Time Out</th>
				<th class="p-4 w-2/6">Late</th>
				<th class="p-4 w-2/6">Undertime</th>
				<th class="p-4 w-2/6">Overtime</th>
				<th class="p-4 w-2/6">Hours Rendered</th>
			</tr>
		</thead>
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 77vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">--</td>
			<td class="py-4 px-0.5 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">1</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
    <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
    <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
    <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
    <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		</tbody>
	</table>
    </div>
</div><!--end attendance summary-->
	</content>

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>