<!doctype html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<script src="../js/components/time.js"></script>
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
					<h1 class="text-center text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">NBFI Sales</h1>
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

	<content class="xl:w-9/12 sm:w-full px-10 py-5">
			<div class="grid md:grid-flow-row grid-rows-2 grid-cols-4 ">
				<div class="row-start-1 row-span-1 pt-2 drop-shadow-md">
					<div class="bg-gray-400 rounded-lg px-2 py-5 text-white text-center">
						<h1 class="font-bold">Worked Hour Today</h1>
						<!-- <div class="countdown font-mono text-2xl" id="tens"></div> -->
						<p><span id="hours" class="countdown font-mono text-2xl"> 00 : 00 : 00 : 00  </span></p>
					</div>
				</div>
				<div class="row-start-2 row-span-1 pt-3 drop-shadow-md">
					<div class="bg-green-500 rounded-lg px2 py-5 text-center text-white">
						<h1 class="font-bold">Timed In Today</h1>
						<span class="countdown font-mono text-2xl" id="timedIn">
						00 : 00 : 00
						</span>
					</div>
				</div>
				<div class="row-start-1 row-span-2 col-span-3 pt-2 pl-5 drop-shadow-md">
					<div class="flex h-full bg-white rounded-lg px-2 py-2 grid md:grid-flow-row grid-rows-2 grid-cols-4">
						<div class="row-start-1 col-span-1 text-center pl-5">
							<h1 class="text-6xl font-bold text-gray-700">Summary</h1>
							<h2 class="text-lg font-bold text-gray-700">SEPTEMBER 2022</h2>
						</div>
						<div class="row-start-1  col-span-3 flex items-center ">
						<a href='#attendanceSummary'><button class="border-2 border-solid bordercolor rounded-2xl px-2 py-2 font-themecolor ml-16">View More </button></a>
						</div>
						
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Late</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Undertime</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Overtime</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Hours Rendered</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
					</div>
				</div>
			</div><!--1st Grid-->

			<div class="grid md:grid-flow-row grid-row-6 grid-cols-4 pt-2 pb-5 drop-shadow-md">
				<div class="row-start-1 row-span-1 pt-2">
					<div class="bg-red-500  rounded-lg px-2 py-5 text-white text-center">
						<h1 class="font-bold">Estimated Time Out</h1>
						<span class="countdown font-mono text-2xl" id = "time_out">
							00 : 00 : 00
						</span>
					</div>
				</div>
				<div class="row-start-2 row-span-1 pt-3">
					<div class="bg-white rounded-lg px2 py-5 text-center text-white space-x-4">
						<h1 class="text-gray-700 text-4xl font-bold">FILING OT</h1>
						<button class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-1 px-1 mt-1" data-modal-toggle="authentication-modal">File OT<button>
						<button class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-1 px-1 mt-1">History<button>
					</div>
				</div>
				<div class="row-start-3 row-span-4 bg-white drop-shadow-md rounded-2xl px-3 py-5 text-center text-white overflow-hidden mt-3">
					<h1 class="text-gray-700 text-6xl font-bold px">TODAY</h1>
					<h1 class="text-gray-700 text-xl font-bold">SEPTEMBER 21, 2022</h1>
					<div class="grid place-content-center">
					<button class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-2 px-2 my-2" onClick="time_in()" onClick="realtimeClock()" id="button-start">Check In<button>
					<button class="border-4 rounded-2xl text-xl bordercolor font-pantone py-2 px-2 my-2 hidden" id="button-stop" onClick="hideButton()">Check Out<button>
					</div>
					<table class="table-fixed w-full content-center text-left text-gray-700 border-separate border-spacing-2">
						<tr>
							<th>A.M. IN :</th>
							<th class="font-medium">08:00 am</th>
						</tr>
						<tr>
							<th>A.M. OUT :</th>
							<th class="font-medium">12:00 am</th>
						</tr>
						<tr>
							<th>P.M. IN :</th>
							<th class="font-medium">01:00 pm</th>
						</tr>
						<tr>
							<th>COFFEE IN :</th>
							<th class="font-medium">04:00 pm</th>
						</tr>
						<tr>
							<th>COFFEE OUT :</th>
							<th class="font-medium">04:20 pm</th>
						</tr>
						<tr>
							<th>P.M. OUT :</th>
							<th class="font-medium">06:30 pm</th>
						</tr>
						<tr>
							<th>DURATION :</th>
							<th class="font-medium">10 hrs 30 mins</th>
						</tr>
					</table>
				</div><!--Card CHECK IN-->
				<div class="row-start-1 row-span-6 col-span-3 pl-5 drop-shadow-md">
					<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full bgcolor rounded-lg">
						<div class="row-start-1 row-span-1 flex">
							<h1 class="text-white text-4xl font-bold px">Attendance Summary</h1>
						</div>
						<div class="row-start-2 row-span-1 flex">
						<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
							<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
						</div>
						
						<!-- <div class="row-start-2 row-span-1 flex bg-green-900 floar">
							<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">OT History</button>
							<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
						</div> -->
						<div class="row-start-2 row-span-2">
							<div class="flex  float-right">
								<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none">OT History</button>
								<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none">Print</button>
							</div>
						</div>
					</div>
						<div class="row-start-2 row-span-5 col-span-2">
							<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
								<thead class="bg-gray-100 flex text-gray w-full">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<th class="p-4 w-2/6">Date</th>
										<th class="p-4 w-2/6">A.M. In</th>
										<th class="p-4 w-2/6">A.M. Out</th>
										<th class="p-4 w-2/6">P.M. IN</th>
										<th class="p-4 w-2/6">COFFEE IN</th>
										<th class="p-4 w-2/6">COFEE OUT</th>
										<th class="p-4 w-2/6">P.M. OUT</th>
										<th class="p-4 w-2/6">DURATION</th>
									</tr>
								</thead>
								<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 55vh;">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 34 am</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 19, 2021</td>
										<td class="py-4 w-2/6">07 : 30 am</td>
										<td class="py-4 w-2/6">12 : 05 am</td>
										<td class="py-4 w-2/6">01 : 00 am</td>
										<td class="py-4 w-2/6">04 : 00 pm</td>
										<td class="py-4 w-2/6">04 : 20 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">10 hrs 50 mins</td>
									</tr>
								</tbody>
							</table> <!--Table div end-->
						</div><!--Daily Time Record end-->
					</div>
				</div><!--tABLE GRID END-->
			</div><!--2nd Grid-->

<div class="grid bgcolor overflow-auto rounded-lg mb-5 drop-shadow-md hide-show" id="attendanceSummary" >
<a href="bottom"></a>
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold">Attendance Summary</h1>
        </div>
		<div class="row-start-2 row-span-1 flex">
		<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
		</div>
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none">OT History</button>
				<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none">Print</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full">
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
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 65vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">1</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">Date</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">1</th>
				<th class="p-4 w-2/6">0</th>
				<th class="p-4 w-2/6">1 hrs 5 mins</th>
				<th class="p-4 w-2/6">81 hrs 45 mins</th>
				<th class="p-4 w-2/6"></th>
			</tr>
		</tfoot>
	</table>
    </div>
</div><!--end attendance summary-->

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
 </div><!--end attendance summary  -->
 <!-- Main modal -->
 <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Filing OT</h3>
                   
					<div>
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled>
                    </div>
					<div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">OT Date</label>
                        <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required="">
                    </div>
					<div>
					<div class="flex justify-center">
						<div class="mb-3 xl:w-full">
							<label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Reason</label>
									<textarea
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
							id="exampleFormControlTextarea1"
							rows="8"
							placeholder="Your messge"></textarea>
									</div>
								</div>
						</div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div> 
	</content>

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>

<script>
// function hideShow() {
//   var x = document.getElementById("attendanceSummary");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }

//   document.body.scrollBottom= 0;
//   document.documentElement.scrollBottom = 0;
// }


function hideButton() {
  var x = document.getElementById("button-start");
  
  if (x.style.display === "none") {
    x.style.display = "block";
	
	console.log("Button - stop")
  } else {
    x.style.display = "none";
	
  }
  showButton();
}
function showButton(){
	var y = document.getElementById("button-stop");
	  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}
//   if (y.style.display === "block") {
//     y.style.display = "none";
//   } else {
//     y.style.display = "block";
//   }

var seconds = 00; 
var tens = 00; 
var minutes = 00;
var hours = 00;
var appendTens = document.getElementById("tens")
var appendSeconds = document.getElementById("seconds")
var appendMinutes = document.getElementById("minutes")
var appendHours = document.getElementById("hours")
var buttonStart = document.getElementById('button-start');
// var buttonStop = document.getElementById('button-stop');
var buttonReset = document.getElementById('button-reset');
var Interval ;

buttonStart.onclick = function() {
    
    clearInterval(Interval);
     Interval = setInterval(startTimer, 10);
	 time_in();
	 hideButton();

	//  document.getElementById("button-start").innerHTML = 'Check Out';
	//  document.getElementById("button-start").style.background='#AA0061';
  }



function startTimer(){
	tens++; 
    
    if(tens <= 9){
    
	  	tens = "0" + tens;
	  
    }
    
    // if (tens > 9){
   
	// 	tens = " " + tens
    // } 
    
    if (tens > 99) {
    //   console.log("seconds");
      seconds++;
   
		if(seconds <= 9){		
			seconds = "0" + seconds;		
		}else{
			seconds =  seconds;
		}
      tens = 0;   
		tens = "0" + 0;
    }
   
	if (seconds == 0){
		seconds = "00"
    }
	if (seconds > 60){	
		// console.log("minutes")
		minutes++;	
		if(minutes <= 9){		
			minutes = "0" + minutes;
		}else{
			minutes =  minutes;
		}	
		
		seconds = 0;		
		seconds = "0" + 0;
	}
	if (minutes == 0){
		minutes = "00";
	}
	if (minutes > 60){		
		// console.log("hours")
		hours++;		
		if(hours <= 9){		
			hours = "0" + hours;
		}else{
			hours =  hours;
		}	
		minutes = 0;
		minutes = "0" + 0;
	}
	if (hours == 0){
		hours = "00";
	}
	// console.log(hours + " : " + minutes + " : " + seconds + " : " + tens)
	document.getElementById('hours').innerHTML = hours + " : " + minutes + " : " + seconds + " : " + tens;

}
function time_in(){
	var rtClock = new Date();
	console.log(rtClock.toLocaleTimeString('PST'));
	document.getElementById('timedIn').innerHTML = rtClock.toLocaleTimeString('PST');

	var hours = rtClock.getHours();
	var minutes = rtClock.getMinutes();
	var seconds = rtClock.getSeconds();


	hours = ("0" + hours).slice(-2);
	minutes = ("0" + minutes).slice(-2);
	seconds = ("0" + seconds).slice(-2);

	var amPm = (hours <= 12 ) ? "AM" : "PM";

	hours = (hours > 12) ? hours - 12 : hours;
	document.getElementById('timedIn').innerHTML = 
		hours + " : " + minutes + " : "+ seconds + " " + amPm;

	hours = parseInt(hours) + 8 ;
	
	var amPm = (hours <= 12 ) ? "AM" : "PM";

	hours = (hours > 12) ? hours - 12 : hours;

	document.getElementById('time_out').innerHTML = 
		hours + " : " + minutes + " : "+ seconds + " " + amPm;
}
</script>