<!doctype html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Approver</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
</head>

<body >
    <header class="w-full h-16 bgcolor drop-shadow-lg sticky top-0">
        <div class="container px-1 md:px-0 h-full  flex justify-between items-center">
            <!-- Logo Here -->
            <a class="text-white xl:text-4xl font-bold" href="#">BARBIZON EVERYDAY GROUP OF COMPANIES</a>

            <!-- Menu links here -->
            <ul id="navmenu" class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50
                md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6 ">

                <li class="md:hidden z-90 fixed top-4 right-6">
                    <a href="javascript:void(0)" class="text-right text-white text-4xl"
                        onclick="toggleMenu()">&times;</a>
                </li>

                <li>
                    <a class="text-white" href="#">Home</a>
                </li>
                <li>
                    <a class="text-white" href="#"><button class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border border-white hover:border-transparent rounded">Log Out</button></a>
                </li>
            </ul>

            <!-- This is used to open the menu on mobile devices -->
            <div class="flex items-center md:hidden">
                <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300"
                    onclick="toggleMenu()">
                    &#9776;
                </button>
            </div>

    </header>

    <main>
<div class="grid bg-orange-500 overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5 mt-5">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Pending Overtime Application</h1>

        </div>
		<div class="row-start-2 row-span-1 flex items-center">
            <div class="xl:w-full xl:h-46 flex grid grid-rows-1 grid-col-2 pt-1">
                <div class="row-start-1 col-span-1 inset-x-0 bottom-0 "><span class="text-white font-bold align-middle hover:align-top text-xl">No. of Application: <label class="text-4xl">10<label></span></div>
                <div class="row-start-1 col-span-1"><input type="search"
                        class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid transition ease-in-out
                        m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl"
                        id="exampleSearch" placeholder="Search"/></div>
                </div>
		</div>
    </div>
    <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed" >
		<thead class="bg-gray-100 flex text-gray w-full pr-2">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="py-4 w-2/6">Name</th>
				<th class="py-4 w-2/6">Date Applied</th>
				<th class="py-4 w-2/6">Overtime Date</th>
				<th class="py-4 w-2/6">Reason</th>
				<th class="py-4 w-2/6">Remarks</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full " style="height: 70vh;">
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Deny</button></td>
            </tr>           
		</tbody>
	</table>
    </div>
</div><!--end attendance summary-->

<div class="grid bgcolor overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Overtime History</h1>

        </div>
		<div class="row-start-2 row-span-1 flex items-center">
		<div class="xl:w-96 xl:h-46">
					<input type="search"
					class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl"
					id="exampleSearch"
					placeholder="Search"
					/>
				</div>
			<span class="text-white ml-5 h-10 mb-3"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
		</div>
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="text-white px-1 py-1 border-2 border-white mt-2 mr-3 rounded-lg">File Overtime</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed" >
    <thead class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="py-4 w-2/6">Name</th>
				<th class="py-4 w-2/6">Date Applied</th>
				<th class="py-4 w-2/6">Overtime Date</th>
				<th class="py-4 w-2/6">Time In</th>
				<th class="py-4 w-2/6">Time Out</th>
				<th class="py-4 w-2/6">Total OT Hours</th>
				<th class="py-4 w-1/6">Reason</th>
				<th class="py-4 w-3/6">Approved By</th>
				<th class="py-4 w-2/6">Approved Date</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full " style="height: 65vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-3/6">Maria M. Clara</td>
			<td class="py-4 w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-3/6">8 : 05 pm</td>
			<td class="py-4 w-3/6">9 hrs 5 mins</td>
            <th class="p-4 w-1/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></th>
			<td class="py-4 px-3  w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 px-2  w-3/6">September 19, 2021</td>
        </tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4  w-3/6">September 19, 2021</td>
			<td class="py-4 w-3/6 xl:ml-7 px-2">07 : 34 am</td>
			<td class="py-4 px-2 xl:ml-1 w-3/6">8 : 05 pm</td>
			<td class="py-4 px-2 xl:ml-3 w-3/6">9 hrs 5 mins</td>
			<td class="py-4 px-2  w-3/6">Approved</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 px-1 w-2/6">Date</th>
				<th class="p-4 px-1 w-2/6">--</th>
				<th class="p-4 px-1 w-2/6">--</th>
				<th class="p-4 px-1 w-2/6">9 hrs 5 mins</th>
				<th class="p-4 px-1 w-2/6">--</th>
			</tr>
		</tfoot>
	</table>
    </div>
</div><!--end overtime history-->
    </main>

    <!-- Javascript Code -->
    <script>
        var navmenu = document.getElementById('navmenu');
        function toggleMenu() {
            navmenu.classList.toggle('hidden');
            navmenu.classList.toggle('w-full');
            navmenu.classList.toggle('h-screen');
        }
    </script>
</body>

</html>