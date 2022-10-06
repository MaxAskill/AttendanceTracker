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
<header class="w-full h-20 bgcolor drop-shadow-lg sticky top-0 top-overflow-visible">
        <div class="container h-full  flex justify-between items-center">
            <!-- Logo Here -->
            <a class="text-white xl:text-4xl xl:ml-32 font-bold" href="#">BARBIZON EVERYDAY GROUP OF COMPANIES</a>

            <!-- Menu links here -->
            <ul id="navmenu" class="hidden fixed top-0 right-0  bg-gray-800 z-50
                md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

                <li class="md:hidden z-90 fixed top-4 right-6">
                    <a href="javascript:void(0)" class="text-right text-white text-4xl"
                        onclick="toggleMenu()">&times;</a>
                </li>

				<li>
					<button onClick="showPending()" class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Pending </button>
					<button onClick="showApproved()" class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Approve</button>
					<button onClick="showDenied()" class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Denied</button>
				</li>

                <li class="justify-center xl:relative group">
					<button class="flex flex-row items-center px-2 py-2 bg-transparent font-themecolor font-bold rounded-lg border-2 border-transparent  focus:outline-none">
          			<img src="img\profilepic.png"
					class="w-12 rounded-full border-white border-2 "
					alt="Sample image" />
					</button>
					<div class="absolute hidden xl:w-80 rounded-full group-hover:block">
						<div class="flex-none w-full text-left px-2 pt-2 pb-4 bg-white bg-white shadow-lg grid bordercolor rounded-lg">
						<div class="content-center flex items-center justify-center mb-5"><img src="img\profilepic.png" class="w-2/3 rounded-full border-white border-2 object-center" alt="Sample image" /></div>
							<p><span class="font-bold">ID NO. : </span><br>0000-0001</p>
							<p><span class="font-bold">CONTACT NUMBER : </span><br>09123456789</p>
							<p><span class="font-bold">EMAIL : </span><br>crisostomo.ibarra@barbizonfashion.com</p>
							<p><span class="font-bold">BRANCH : </span><br>SM Bicutan</p>
							<p><span class="font-bold">CHAIN : </span><br>SM Department Store</p>
							<p><span class="font-bold">BIRTHDAY : </span><br>January 12, 1995</p>
						</div>
					</div>
                </li>
                <li class="my-3 ml-20">
					<div>
                    	<a class="text-white" href="/"><button class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded  focus:outline-none">Log Out</button></a>
					</div>
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
<div id="pending" class="grid bg-orange-500 overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5 mt-5" style="display: block">
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
		<tbody class="bg-grey-light flex flex-col w-full " style="height: 70vh;">
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" >Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>
            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                <td class="py-4  w-2/6">Maria M. Clara</td>
                <td class="py-4 w-2/6 xl:ml-5 px-2">September 21, 2022</td>
                <td class="py-4 px-2 w-2/6">September 22, 2022</td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></td>
                <td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">Approve</button>
                <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="deny-ot">Deny</button></td>
            </tr>            -->
		</tbody>
	</table>
	<div class="grid justify-center items-center mb-3 bg-white">
	<nav aria-label="Page navigation example w-full">
		<ul class="inline-flex -space-x-px">
			<li>
			<a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
			</li>
			<li>
			<a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
			</li>
		</ul>
		</nav>
		</div>
    </div>
</div><!--end attendance summary-->

<div id="approved" class="grid bgcolor overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5" style="display: none"><!--Start Approved Overtime Application-->
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Approved Overtime History</h1>

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
				<div class="row-start-2 row-span-1 flex">
						<span class="text-white mt-2 ml-2"> Sort By:</span>
						<div date-rangepicker class="flex items-center pl-5">
							<div class="relative">
								
								<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

									<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								
								<input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
							</div>
							<span class="mx-4 text-gray-500">to</span>
							<div class="relative">
								<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
									<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								<input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
							</div>
							</div>
						</div>
		</div>
    </div>
    <div>
	<table class="w-full bg-white rounded-lg hover:table-fixed" >
    <thead class="bg-gray-100 flex text-gray w-full pr-5">
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
		<tbody class="bg-grey-light flex flex-col w-full text-center" style="height: 65vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr>
        <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr> -->
        <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6 ">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
        </tr> -->
	</table>
	<div class="grid justify-center items-center mb-3 bg-white">
	<nav aria-label="Page navigation example w-full">
		<ul class="inline-flex -space-x-px">
			<li>
			<a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
			</li>
			<li>
			<a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
			</li>
		</ul>
		</nav>
		</div>
    </div>
</div><!--end overtime history-->

<div id="denied" class="grid bgpantone overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5" style="display: none"><!--Start Approved Overtime Application-->
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Denied Overtime Application</h1>

        </div>
		<div class="row-start-2 row-span-1 flex items-center">
		<div class="xl:w-96 xl:h-46">
					<input type="search"
					class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl"
					id="exampleSearch"
					placeholder="Search"
					/>
				</div>
				<div class="row-start-2 row-span-1 flex">
						<span class="text-white mt-2 ml-2"> Sort By:</span>
						<div date-rangepicker class="flex items-center pl-5">
							<div class="relative">
								
								<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

									<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								
								<input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
							</div>
							<span class="mx-4 text-gray-500">to</span>
							<div class="relative">
								<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
									<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								<input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
							</div>
							</div>
						</div>
		</div>
    </div>
    <div>
	<table class="w-full bg-white rounded-lg hover:table-fixed" >
    <thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="py-4 w-2/6">Name</th>
				<th class="py-4 w-2/6">Date Applied</th>
				<th class="py-4 w-2/6">Overtime Date</th>
				<th class="py-4 w-2/6">Reason</th>
				<th class="py-4 w-2/6">Denied By</th>
				<th class="py-4 w-2/6">Denied Date</th>
				<th class="py-4 w-1/6">Remarks</th>
			</tr>
		</thead>
		<tbody class="bg-grey-light flex flex-col  w-full text-center" style="height: 65vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot"> VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr>
        <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr> -->
        <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">Maria M. Clara</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
            <th class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-ot">VIEW</button></th>
			<td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
			<td class="py-4 w-2/6">September 20, 2021</td>
            <th class="py-4 w-1/6"><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="denied-ot">VIEW</button></th>
        </tr> -->
	</table>
	<div class="grid justify-center items-center mb-3 bg-white">
	<nav aria-label="Page navigation example w-full">
		<ul class="inline-flex -space-x-px">
			<li>
			<a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
			</li>
			<li>
			<a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
			</li>
			<li>
			<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
			</li>
		</ul>
		</nav>
		</div>
    </div>
</div><!--end overtime history-->
    </main>
<!-- Main modal -->
<div id="deny-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-pantone">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="deny-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-center font-pantone dark:text-white font-extrabold">OVERTIME REQUEST DENIED!</h3>
                   
					<div>
                        <label for="text" class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name: <span class="font-normal">Maria M. Clara</span></label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
					<div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied: <span class="font-normal">September 21, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Overtime Date: <span class="font-normal">September 22, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
					<div>
                        <div class="flex justify-center">
                            <div class="mb-3 xl:w-full">
                                <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Reason</label>
                                        <textarea
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid border-pantone rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlTextarea1"
                                rows="8"
                                placeholder="Your messge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. 
                                Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
                            </div>
                        </div>
					</div>
                    <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div> 

 <!-- Main modal -->
<div id="denied-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-pantone">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="denied-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-center font-pantone dark:text-white font-extrabold">OVERTIME REQUEST DENIED!</h3>
                   
					<div>
                        <label for="text" class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name: <span class="font-normal">Maria M. Clara</span></label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
					<div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied: <span class="font-normal">September 21, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Overtime Date: <span class="font-normal">September 22, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
					<div>
                        <div class="flex justify-center">
                            <div class="mb-3 xl:w-full">
                                <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
                                        <textarea
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid border-pantone rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlTextarea1"
                                rows="8"
                                placeholder="Your messge" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. 
                                Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
                            </div>
                        </div>
					</div>
                    <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                </form>
            </div>
        </div>
    </div>    

    <!-- Main modal -->
<div id="view-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-black">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="view-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-center text-gray-900 dark:text-white font-extrabold">OVERTIME REQUEST</h3>
                   
					<div>
                        <label for="text" class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name: <span class="font-normal">Maria M. Clara</span></label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
					<div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied: <span class="font-normal">September 21, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Overtime Date: <span class="font-normal">September 22, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
					<div>
					<div class="flex justify-center">
						<div class="mb-3 xl:w-full">
							<label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
									<textarea
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid border-black rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
							id="exampleFormControlTextarea1"
							rows="8"
							placeholder="Your messge" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. 
                            Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
									</div>
								</div>
						</div>
                    <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                </form>
            </div>
        </div>
    </div>

    <!-- Main modal -->
<div id="print" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/3 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bgcolor rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="print">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                
					<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full bgcolor rounded-t-lg">
						<div class="row-start-1 row-span-1 flex">
							<h1 class="text-white text-4xl font-bold px">Daily Time Record</h1>
						</div>
						<div class="row-start-2 row-span-1 flex">
						<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
							<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
						</div>
						<div class="row-start-2 row-span-2">
							<div class="flex  float-right">
								<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="print">Print</button>
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
										<td class="py-4 w-2/6">September 16, 2021</td>
										<td class="py-4 w-2/6">09 : 34 am</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 15, 2021</td>
										<td class="py-4 w-2/6">09 : 25 am</td>
										<td class="py-4 w-2/6">01 : 47 am</td>
										<td class="py-4 w-2/6">02 : 46 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 09 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 14, 2021</td>
										<td class="py-4 w-2/6">09 : 28 am</td>
										<td class="py-4 w-2/6">02 : 07 am</td>
										<td class="py-4 w-2/6">03 : 05 am</td>
										<td class="py-4 w-2/6">05 : 14 pm</td>
										<td class="py-4 w-2/6">05 : 41 pm</td>
										<td class="py-4 w-2/6">06 : 38 pm</td>
										<td class="py-4 w-2/6">09 hrs 10 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 13, 2021</td>
										<td class="py-4 w-2/6">12 : 15 am</td>
										<td class="py-4 w-2/6">02 : 04 am</td>
										<td class="py-4 w-2/6">03 : 01 am</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 03 pm</td>
										<td class="py-4 w-2/6">09 : 15 pm</td>
										<td class="py-4 w-2/6">9 hrs 00 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 11, 2021</td>
										<td class="py-4 w-2/6">09 : 26 am</td>
										<td class="py-4 w-2/6">01 : 29 am</td>
										<td class="py-4 w-2/6">02 : 28 am</td>
										<td class="py-4 w-2/6">05 : 00 pm</td>
										<td class="py-4 w-2/6">05 : 26 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 08 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 10, 2021</td>
										<td class="py-4 w-2/6">09 : 26 am</td>
										<td class="py-4 w-2/6">01 : 33 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 03 pm</td>
										<td class="py-4 w-2/6">05 : 32 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 08 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 09, 2021</td>
										<td class="py-4 w-2/6">09 : 19 am</td>
										<td class="py-4 w-2/6">02 : 31 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 05 pm</td>
										<td class="py-4 w-2/6">05 : 33 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 15 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 07, 2021</td>
										<td class="py-4 w-2/6">09 : 24 am</td>
										<td class="py-4 w-2/6">01 : 36 am</td>
										<td class="py-4 w-2/6">02 : 35 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 38 pm</td>
										<td class="py-4 w-2/6">09 hrs 14 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 06, 2021</td>
										<td class="py-4 w-2/6">11 : 49 am</td>
										<td class="py-4 w-2/6">02 : 06 am</td>
										<td class="py-4 w-2/6">02 : 58 am</td>
										<td class="py-4 w-2/6">06 : 07 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">09 : 02 pm</td>
										<td class="py-4 w-2/6">09 hrs 13 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 04, 2021</td>
										<td class="py-4 w-2/6">09 : 27 am</td>
										<td class="py-4 w-2/6">01 : 32 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 39 pm</td>
										<td class="py-4 w-2/6">09 hrs 12 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 03, 2021</td>
										<td class="py-4 w-2/6">09 : 51 am</td>
										<td class="py-4 w-2/6">01 : 44 am</td>
										<td class="py-4 w-2/6">02 : 42 am</td>
										<td class="py-4 w-2/6">05 : 15 pm</td>
										<td class="py-4 w-2/6">05 : 44 pm</td>
										<td class="py-4 w-2/6">06 : 39 pm</td>
										<td class="py-4 w-2/6">9 hrs 12 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 02, 2021</td>
										<td class="py-4 w-2/6">09 : 51 am</td>
										<td class="py-4 w-2/6">02 : 02 am</td>
										<td class="py-4 w-2/6">02 : 55 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 39 pm</td>
										<td class="py-4 w-2/6">07 : 09 pm</td>
										<td class="py-4 w-2/6">09 hrs 18 mins</td>
									</tr>
								</tbody>
							</table> <!--Table div end-->
            </div>
        </div>
    </div>
</div><!--END MASTER LIST PRINT MODAL-->
    
    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5" id="btn-back-to-top">
		<svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
	</button>

    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>

</html>
<!-- Javascript Code -->
<script>
        var navmenu = document.getElementById('navmenu');
        function toggleMenu() {
            navmenu.classList.toggle('hidden');
            navmenu.classList.toggle('w-full');
            navmenu.classList.toggle('h-screen');
        }
        // Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        scrollFunction();
        };

        function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }

		
		function showPending() {
			var x = document.getElementById("pending");
			if (x.style.display === "none") {
				x.style.display = "block";
			} 	
			hideApproved();
			hideDenied();

		}

		function showApproved() {
			var x = document.getElementById("approved");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
				
				hidePending();
				hideDenied();
			}
		function showDenied() {
			var x = document.getElementById("denied");
			if (x.style.display === "none") {
				x.style.display = "block";
				}

				hidePending();
				hideApproved()
			}

		function hidePending(){
			var x = document.getElementById("pending");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
		function hideApproved(){
			var x = document.getElementById("approved");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
		function hideDenied(){
			var x = document.getElementById("denied");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}

        
    </script>



