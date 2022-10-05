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

<body >
    <header class="w-full h-20 bgcolor drop-shadow-lg sticky top-0 top-overflow-visible">
        <div class="container h-full  flex justify-between items-center">
            <!-- Logo Here -->
            <a class="text-white xl:text-4xl xl:ml-80 font-bold" href="#">BARBIZON EVERYDAY GROUP OF COMPANIES</a>

            <!-- Menu links here -->
            <ul id="navmenu" class="hidden fixed top-0 right-0  bg-gray-800 z-50
                md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

                <li class="md:hidden z-90 fixed top-4 right-6">
                    <a href="javascript:void(0)" class="text-right text-white text-4xl"
                        onclick="toggleMenu()">&times;</a>
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
                    	<a class="text-white" href="/">
							<button class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Log Out</button></a>
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
        <!-- component -->
<div class="grid bg-white mt-5 xl:w-5/6 xl:mx-40 sm:w-full rounded-lg overflow-auto">
    <div class="grid grid-rows-1 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-gray-800 text-4xl font-bold px">Employee Master List</h1>
			
			<!-- Modal toggle -->
            <button class="bgcolor text-white hover:bg-white xl:ml-10 h-12 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none" data-modal-toggle="authentication-modal">Add New</button>
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
					<div id="personalInfo" style="display: block">
						<h3 class="text-xl font-medium text-gray-900 dark:text-white">Personal Info</h3>
						<div class="grid grid-cols-4 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company ID</label>
							<input type="text" name="companyID" id="companyID" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company ID" required="">
						</div>
						<div class="col-start-2 col-span-1">
							<label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First Name</label>
							<input @input="capitalizeFName"  type="text" name="fName" id="fName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="First Name" required="">
						</div>
						<div class="col-start-3 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Middle Name</label>
							<input type="text" name="mName" id="mName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Middle Name" required="">
						</div>
						<div class="col-start-4 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Last Name</label>
							<input type="text" name="lName" id="lName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Last Name" required="">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Birthdate</label>
							<input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required="">
						</div>
							
						<div class="col-start-2 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contact No.</label>
							<input type="text" name="cNumber" maxlength="11" id="cNumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Contact Number" required="">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Job Position</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Job Position" required="">
						</div>
						<div class="col-start-2">
							<label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
							<input type="email" name="email" id="email" onkeyup="ValidateEmail()" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email (Eg. name@email.com)" required="">
							<span id="lblError" style="color: red"></span>
						</div>
						</div>
						<button type="button" onClick="nextPage()" class="w-full text-white mt-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Next</button>
					</div>
					<div id="companyInfo" style="display: none">
						<h3 class="text-xl font-medium text-gray-900 dark:text-white">Company Info</h3>
						<div class="grid grid-cols-4 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company</label>
							<input type="text" name="companyID" id="companyID" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company" required="">
						</div>
						<div class="col-start-2 col-span-1">
							<label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Brand</label>
							<input @input="capitalizeFName"  type="text" name="fName" id="fName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Brand" required="">
						</div>
						<div class="col-start-3 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
							<input type="text" name="mName" id="mName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Chain" required="">
						</div>
						<div class="col-start-4 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Store Assignment</label>
							<input type="text" name="lName" id="lName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Store Assignment" required="">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">RAS</label>
							<input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="RAS" required="">
						</div>
							
						<div class="col-start-2 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HR</label>
							<input type="text" name="cNumber" maxlength="11" id="cNumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="HR" required="">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date Started</label>
							<input type="date" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Date Started" required="">
						</div>
						<button type="button" onClick="back()" class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Back</button>
						<button type="submit" class="col-start-2 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Add Account</button>
						
						</div>
						
					</div>
				</form>
            </div>
        </div>
    </div> 
        </div>

        <div class="row-start-1 row-span-1">
			<div class="flex">
			<div>
				<button id="branchdp" data-dropdown-toggle="branchdropdown" class="flex flex-row items-center h-12 px-2 py-2 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none" type="button">Branch<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
				<!-- Dropdown menu -->
				<div id="branchdropdown" class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
					<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="branchdp">
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Finds Finds Las Pinas</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Robinsons Las Pinas</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Waltermart Makati</a>
					</li>
					</ul>
				</div>
			</div>
				
			<div>
				<button id="chaindp" data-dropdown-toggle="chaindropdown" class="flex flex-row items-center h-12 px-2 py-2  ml-5 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none" type="button">Chain<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
				<!-- Dropdown menu -->
				<div id="chaindropdown" class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
					<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="chaindp">
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vista Mall Las Pinas, Finds Finds Department Store</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Robinsons Place Las Pinas Department Store</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Waltermart Makati Department Store</a>
						</li>
					</ul>
				</div>
			</div>
				<div class="mb-3 xl:w-full ml-5 flex">
					<input type="search"
					class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl"
					id="exampleSearch"
					placeholder="Search"
					/>
					<button  class="bgcolor text-white hover:bg-white xl:ml-10 h-12 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none" data-modal-toggle="print">Print</button>
				</div>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto" >
		<thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full">
				<th class="p-4 w-1/6"><button type="button" id="btn" onClick="showprint()">Select All</button></th>
				<th class="p-4 w-2/6">ID Number</th>
				<th class="p-4 w-2/6">Name</th>
				<th class="p-4 w-2/6">Branch</th>
				<th class="p-4 w-2/6">Chain</th>
				<th class="p-4 w-2/6 ">Status</th>
				<th class="p-4 w-2/6 ">Remaining Days</th>
				<th class="p-4 w-2/6 ">Attendance</th>
				<th class="p-4 w-2/6 "></th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col text-center items-left justify-left overflow-y-scroll w-full" style="height: 68vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">Crisostomo Ibarra</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Onboarding</td>
			<td class="p-4 w-2/6 ">5 days left</td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
		<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>

			<td class="p-4 w-2/6">0000-0002</td>
			<td class="p-4 w-2/6">Mark Anthony Luis</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Active</td>
			<td class="p-4 w-2/6 "><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Resign</button></td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0003</td>
			<td class="p-4 w-2/6">Cardo Dalisay</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Active</td>
			<td class="p-4 w-2/6 "><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Resign</button></td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
		<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0004</td>
			<td class="p-4 w-2/6">Juan Carlo</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Active</td>
			<td class="p-4 w-2/6 "><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Resign</button></td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0005</td>
			<td class="p-4 w-2/6">James Reid</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Active</td>
			<td class="p-4 w-2/6 "><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Resign</button></td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0006</td>
			<td class="p-4 w-2/6">Kathrin Bernardo</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Active</td>
			<td class="p-4 w-2/6 "><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Resign</button></td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0007</td>
			<td class="p-4 w-2/6">Ysabella Prado</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Pending Resignation</td>
			<td class="p-4 w-2/6 ">25 days left</td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0008</td>
			<td class="p-4 w-2/6">James Pedo</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Pending Resignation</td>
			<td class="p-4 w-2/6 ">13 days left</td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"></td>
			<td class="p-4 w-2/6">0000-0009</td>
			<td class="p-4 w-2/6">Robert Mandato</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6">Pending Resignation</td>
			<td class="p-4 w-2/6 ">25 days left</td>
			<td class="p-4 w-2/6"><a href="#attendanceSummary"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" onClick="showAttendance()">VIEW</button></a></td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button></td>
		</tr>
		</tbody>
	</table>
    </div>
</div> <!--end employee list-->

<div class="grid bgcolor overflow-auto xl:w-5/6 xl:mx-40 xl:my-12 rounded-lg mb-5" >
    <div class="grid grid-rows-1 grid-col-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 col-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Employee Salary</h1>
        </div>
		
		<div class="row-start-1 col-span-1 flex">
		<div class="mb-3 xl:w-full">
					<input type="search"
					class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl"
					id="exampleSearch"
					placeholder="Search"
					/>
				</div>
		</div>
    </div>
    <div>
	<table class="text-center w-full bg-white rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">ID Number</th>
				<th class="p-4 w-2/6">Name</th>
				<th class="p-4 w-2/6">Cut-Off Date</th>
				<th class="p-4 w-2/6">No. of Days</th>
				<th class="p-4 w-2/6">Daily Rate</th>
				<th class="p-4 w-2/6">Sum Rate</th>
				<th class="p-4 w-2/6">13th Month</th>
				<th class="p-4 w-2/6">Gov. Deduction</th>
				<th class="p-4 w-2/6"></th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full" style="height: 70vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">0000-0001</td>
			<td class="py-4 w-2/6">Ibarra Crisostomo</td>
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 hrs 20 mins</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button></td>
		</tr>
		</tbody>
	</table>
    </div>
</div><!--end employee salary-->

<div class="grid xl:py-12"  id="attendanceSummary" style="display: none">
<div class="flex flex-row xl:w-5/6 xl:mx-40 xl:mb-12 bgprofile rounded-lg justify-center">
  <div class="basis-1/2 py-8 px-8 flex flex-row justify-center place-items-center">
  <img
          src="img\profilepic.png"
          class="w-56 xl:mx-20 lg:mx-20 rounded-full bordercolor bordercolor border-4 "
          alt="Sample image"
        />
  </div>
  <div class="basis-1/3 py-8 px-8" >
	<h1 class="text-black text-4xl font-bold px">EMPLOYEE PROFILE<h1>
	<div class="basis-1/3 py-5">
	<div class="grid auto-rows-max grid-cols-2">
			<div><label class="font-bold">Company ID :</label></div>
			<div><label>0000-0001</label></div>
			<div><label class="font-bold">Name :</label></div>
			<div><label>Crisostomo Ibarra</label></div>
			<div><label class="font-bold">Birthday :</label></div>
			<div><label>December 14, 1989</label></div>
			<div><label class="font-bold">Contact No :</label></div>
			<div><label>09123456789</label></div>
			<div><label class="font-bold">Email :</label></div>
			<div><label>crisostomo.ibarra@barbizonfashion.com</label></div>
			<div><label class="font-bold">Job Position :</label></div>
			<div><label>NBFI Sales</label></div>
			<div><label class="font-bold">Company :</label></div>
			<div><label>NBFI</label></div>
			<div><label class="font-bold">Brand :</label></div>
			<div><label>Barbizon</label></div>
			<div><label class="font-bold">Branch :</label></div>
			<div><label>RDS Bacolod</label></div>
			<div><label class="font-bold">Chain :</label></div>
			<div><label>RDS</label></div>
			<div><label class="font-bold">RAS :</label></div>
			<div><label>Ms. Revelyn Loyola</label></div>
			<div><label class="font-bold">HR :</label></div>
			<div><label>Helena Loyola</label></div>
			<div><label class="font-bold">Date Started :</label></div>
			<div><label>October 21, 2006</label></div>
		</div>
	</div>
  </div>
</div>


<div class="grid bgcolor overflow-auto xl:w-5/6 xl:mx-40 rounded-lg mb-5" >
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Attendance Summary</h1>
        </div>
		<div class="row-start-2 row-span-1 flex">
		<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
			<button id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none ml-5 mt-2 text-center inline-flex items-center" type="button">Duration<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
				<!-- Dropdown menu -->
				<div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
					<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Weekly</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monthly</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Annually</a>
					</li>
					</ul>
				</div>
		</div>
        
		<!-- <div class="row-start-2 row-span-1 flex bg-green-900 floar">
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">OT History</button>
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
		</div> -->
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="print">Upload</button>
				<a href="#overtimeHistory"><button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" onClick="showOT()">OT History</button></a>
				<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="print">Print</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full pr-5">
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
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full" style="height: 63vh;">
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
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr><tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">1 hr 05 min</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">07 : 34 am</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">30 mins</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">0</td>
			<td class="py-4 w-2/6">9 hrs 5 mins</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full pr-4">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 px-1 w-2/6">Date</th>
				<th class="p-4 px-1 w-2/6">--</th>
				<th class="p-4 px-1 w-2/6">--</th>
				<th class="p-4 px-1 w-2/6">30 mins</th>
				<th class="p-4 px-1 w-2/6">0</th>
				<th class="p-4 px-1 w-2/6">1 hrs 05 mins</th>
				<th class="p-4 px-1 w-2/6">81 hrs 45 mins</th>
			</tr>
		</tfoot>
	</table>
    </div>
</div><!--end attendance summary-->
</div>
<div class="grid bgcolor overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5" id = "overtimeHistory" style="display:none">
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
					<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="file-ot">File Overtime</button>
				</div>
			</div>
		</div>
		<div>
		<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">Overtime Date</th>
				<th class="p-4 w-2/6">Time In</th>
				<th class="p-4 w-2/6">Time Out</th>
				<th class="p-4 w-2/6">Total OT Hours</th>
				<th class="p-4 w-2/6">Approved By</th>
				<th class="p-4 w-2/6">Approval Date</th>
				<th class="p-4 w-2/6">Status</th>
			</tr>
		</thead>
		<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full" style="height: 60vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">09 : 05 am</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6 font-bold text-orange-500">Pending</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 18, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 17, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">September 25, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 11, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 16, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 08, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 18, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 05, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 13, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 03, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">September 02, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 27, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">September 18, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 18, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 18, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 13, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">August 11, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 11, 2021</td>
			<td class="py-4 w-2/6">6 : 05 pm</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">August 10, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full pr-4">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">TOTAL</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">16 hrs 00 hrs</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
			</tr>
		</tfoot>
	</table>
		</div>
	</div><!--end overtime history-->

    </main>
<!-- Main modal -->
<div id="file-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="file-ot">
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
    </div> <!--end modal-->

	<!-- Main modal -->
<div id="view-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/3 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="view-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">OVERTIME REQUEST</h3>
                   
					<div>
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Applicant Name: Maria M. Clara</label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
					<div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date Applied: September 21, 2022</label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Overtime Date: September 22, 2022</label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
					<div>
					<div class="flex justify-center">
						<div class="mb-3 xl:w-full">
							<label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Reason</label>
									<textarea
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
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
<div id="denied-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/3 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="denied-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">OVERTIME REQUEST DENIED!</h3>
                   
					<div>
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Applicant Name: Maria M. Clara</label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
					<div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date Applied: September 21, 2022</label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Overtime Date: September 22, 2022</label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
					<div>
					<div class="flex justify-center">
						<div class="mb-3 xl:w-full">
							<label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Reason</label>
									<textarea
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
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
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bgcolor rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="print">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                
					<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
						<div class="row-start-1 row-span-1 flex">
							<h1 class="text-white text-4xl font-bold px">Attendance Summary</h1>
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
					<div>
					<table class="text-center w-full bg-white rounded-lg hover:table-fixed " >
					<thead class="bg-gray-100 flex text-gray w-full pr-5">
							<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
								<th class="p-4 w-2/6">Date</th>
								<th class="p-4 w-2/6">Time In</th>
								<th class="p-4 w-2/6">Time Out</th>
								<th class="p-4 w-2/6">Late</th>
								<th class="p-4 w-2/6">Undertime</th>
								<th class="p-4 w-2/6">Overtime</th>
								<th class="p-4 w-2/6">Hours Rendered</th>
								<th class="p-4 w-2/6"></th>
							</tr>
						</thead>
					<!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
						<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full" style="height: 63vh;">
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">--</td>
							<td class="py-4 w-2/6">--</td>
							<td class="py-4 w-2/6">--</td>
							<td class="py-4 w-2/6">--</td>
							<td class="py-4 w-2/6">--</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr><tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
							<td class="py-4 w-2/6">September 19, 2021</td>
							<td class="py-4 w-2/6">07 : 34 am</td>
							<td class="py-4 w-2/6">8 : 05 pm</td>
							<td class="py-4 w-2/6">1</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">0</td>
							<td class="py-4 w-2/6">9 hrs 5 mins</td>
							<td class="py-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
						</tr>
						</tbody>
						<tfoot class="bg-gray-100 flex text-gray w-full pr-5">
							<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
								<th class="p-4 px-1 w-2/6">Date</th>
								<th class="p-4 px-1 w-2/6">--</th>
								<th class="p-4 px-1 w-2/6">--</th>
								<th class="p-4 px-1 w-2/6">1</th>
								<th class="p-4 px-1 w-2/6">0</th>
								<th class="p-4 px-1 w-2/6">1 hrs 5 mins</th>
								<th class="p-4 px-1 w-2/6">81 hrs 45 mins</th>
								<th class="p-4 px-1 w-2/6"></th>
							</tr>
						</tfoot>
					</table>
					</div>
            </div>
        </div>
    </div> <!--end modal-->

    <!-- Javascript Code -->
    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5" id="btn-back-to-top">
		<svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
	</button>

	    <!-- Main modal -->
		<div id="view-employee" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="view-employee">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8"  action="#">
                    <h3 class="text-2xl font-medium text-gray-900 dark:text-white">Employee Salary</h3>
					<div class= "grid grid-cols-4 gap-2">
                    <div class="col-start-1 col-span-1">
                        <label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">ID Number</label>
                        <input type="text" name="companyID" id="companyID" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="0000-0001" required="" value="0000-0001" disabled>
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Payroll Number</label>
                        <input type="text" name="lName" id="lName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="340" required="" value="340" disabled>
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                        <input @input="capitalizeFName"  type="text" name="fName" id="fName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ibarra Crisostomo" required="" value="Ibarra Crisostomo" disabled>
                    </div>
					<div class="col-start-4 col-span-1">
                        <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Cut-Off Date</label>
                        <input type="text" name="mName" id="mName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="9" required="" value="September 19, 2021" disabled>
                    </div>
					
					</div>
					<div class="grid grid-cols-3 gap-2">
					<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">No. of Days</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="" value="4" disabled>
					</div>
					<div class="col-start-2 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Store Assignment</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="" value="SM URDANETA" disabled>
					</div>
					<div class="col-start-3 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">13th Month Pay</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="" value="113.33" disabled>
					</div>
					</div>
					<div class="w-full">
						<label for="jobPosition" class="text-xl font-medium text-gray-900 dark:text-white">Earnings</label>
					</div>

					<div class="grid grid-cols-6 gap-1">
						<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic Rate</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="" value="340" disabled>
						</div>
						<div class="col-start-2 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA Rate</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
						</div>
						<div class="col-start-3 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SEA Rate</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
						</div>
						<div class="col-start-4 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Hour </label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
						</div>
						<div class="col-start-5 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Minute </label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
						</div>
						<div class="col-start-6 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total Rate</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="340" disabled>
						</div>
						</div>
						<div class = "grid grid-cols-6 gap-2">
							<div class="col-start-1 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="1360" disabled>
							</div>
							
							<div class="col-start-2 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
							</div>
							
							<div class="col-start-3 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SEA Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
							</div>
							<div class="col-start-4 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Overtime Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
							</div>
							<div class="col-start-5 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Holiday Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="0.00" disabled>
							</div>
			
							<div class="col-start-6 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="1360" disabled>
							</div>					
						</div>
					<div class="col-start-1 col-end-7 w-full">
						<label for="jobPosition" class="text-xl font-medium text-gray-900 dark:text-white">Deduction</label>
					</div>
					<div class="grid grid-cols-5 gap-1">
						<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SSS</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="" value="260" disabled>
						</div>
						<div class="col-start-2 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">PHIC</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="150.32" disabled>
						</div>
						<div class="col-start-3 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HMDF</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="50.00" disabled>
						</div>
						<div class="col-start-4 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HMDF</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="50.00" disabled>
						</div>
						<div class="col-start-5 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="460.32" disabled>
						</div>
					</div>
					<div class="col-start-1 col-end-7 w-full">
						<label for="jobPosition" class="text-xl font-medium text-gray-900 dark:text-white">NET PAY</label>
					</div>
					<div class="grid grid-cols-3 gap-2">
						<div class="col-start-1 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Gross Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="" value="1360" disabled>
							</div>
							<div class="col-start-2 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total Deduction</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="460.32" disabled>
							</div>
							<div class="col-start-3 col-span-1">
								<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Net Pay</label>
								<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="" value="899.68" disabled>
							</div>
					</div>
                    <!-- <button type="submit" class="col-start-1 col-end-7 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
				</form>
            </div>
        </div>
    </div> 


	    <!-- Main modal -->
		<div id="edit-employee" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-employee">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
					<div id="personalInfoEdit" style="display: block">
						<h3 class="text-xl font-medium text-gray-900 dark:text-white">Personal Info</h3>
						<div class="grid grid-cols-4 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company ID</label>
							<input type="text" name="companyID" id="companyID" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company ID" required="" value="0000-0001">
						</div>
						<div class="col-start-2 col-span-1">
							<label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First Name</label>
							<input @input="capitalizeFName"  type="text" name="fName" id="fName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="First Name" required="" value="Crisostomo">
						</div>
						<div class="col-start-3 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Middle Name</label>
							<input type="text" name="mName" id="mName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Middle Name" required="" value="Simon">
						</div>
						<div class="col-start-4 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Last Name</label>
							<input type="text" name="lName" id="lName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Last Name" required="" value="Ibarra">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Birthdate</label>
							<input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required="">
						</div>
							
						<div class="col-start-2 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contact No.</label>
							<input type="text" name="cNumber" maxlength="11" id="cNumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Contact Number" required="" value="09405554125">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Job Position</label>
							<input type="text" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Job Position" required="" value="Junior Software Engineer">
						</div>
						<div class="col-start-2">
							<label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
							<input type="email" name="email" id="email" onkeyup="ValidateEmail()" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email (Eg. name@email.com)" required="" value="crisostomo.ibarra@barbizonfashion.com">
							<span id="lblError" style="color: red"></span>
						</div>
						</div>
						<button type="button" onClick="nextPageEdit()" class="w-full mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Next</button>
					</div>
					<div id="companyInfoEdit" style="display: none">
						<h3 class="text-xl font-medium text-gray-900 dark:text-white">Company Info</h3>
						<div class="grid grid-cols-4 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company</label>
							<input type="text" name="companyID" id="companyID" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company" required="" value="Cotton Mountain Corporation">
						</div>
						<div class="col-start-2 col-span-1">
							<label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Brand</label>
							<input @input="capitalizeFName"  type="text" name="fName" id="fName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Brand" required="" value="At Home">
						</div>
						<div class="col-start-3 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
							<input type="text" name="mName" id="mName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Chain" required="" value="ALL HOME">
						</div>
						<div class="col-start-4 col-span-1">
							<label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Store Assignment</label>
							<input type="text" name="lName" id="lName" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Store Assignment" required="" value="ALL HOME ILOILO">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">RAS</label>
							<input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="RAS" required="" value="MS. RAQUEL REYES">
						</div>
							
						<div class="col-start-2 col-span-1">
							<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HR</label>
							<input type="text" name="cNumber" maxlength="11" id="cNumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="HR" required="" value="MS. EMMA GACCION">
						</div>
						</div>
						<div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date Started</label>
							<input type="date" name="jobPosition" id="jobPosition" class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Date Started" required="" >
						</div>
						<button type="button" onClick="backEdit()" class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Back</button>
						<button type="submit" class="col-start-2 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Edit Account</button>
						
						</div>
						
					</div>
				</form>
            </div>
        </div>
    </div> 
	<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
	
	</body>
	</html>

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

		// var x = document.getElementById("attendanceSummary");
		// if (x.style.display === "block") {
		// 	x.style.display = "none";
		// 	} 

		// var x = document.getElementById("overtimeHistory");
		// 	if (x.style.display === "block") {
		// 		x.style.display = "none";
		// 		}
		}

		function showAttendance() {
			var x = document.getElementById("attendanceSummary");
			if (x.style.display === "none") {
				x.style.display = "block";
			} 

		}

		function showOT() {
			var x = document.getElementById("overtimeHistory");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
			}
		function nextPage() {
			var x = document.getElementById("personalInfo");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
				showCompany();
				console.log("Next page")
			}
		function nextPageEdit() {
			var x = document.getElementById("personalInfoEdit");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
				showCompanyEdit();
				console.log("Next page")
			}
		function showCompany(){
			var x = document.getElementById("companyInfo");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
			}
		function showCompanyEdit(){
			var x = document.getElementById("companyInfoEdit");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
			}
		function back(){
			var x = document.getElementById("personalInfo");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
				console.log("back to personal info");
				hideCompany();
			}
		function backEdit(){
			var x = document.getElementById("personalInfoEdit");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
				console.log("back to personal info");
				hideCompanyEdit();
			}
		function hideCompany(){
			var x = document.getElementById("companyInfo");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
		function hideCompanyEdit(){
			var x = document.getElementById("companyInfoEdit");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
		function showPrint(){
			var x = document.getElementById("printshow");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
				console.log("show Print")
		}
		
		function check(checked = true){
			const checkboxes = document.querySelectorAll('input[name="employee"]');
			checkboxes.forEach((checkbox) =>{
				checkbox.checked = checked;
			});
		}

		function checkAll(){
			check();
			this.onclick = uncheckAll;
			console.log("select all")
			showPrint();
		}

		function uncheckAll(){
			check(false);
			this.onclick = checkAll;
		}

		const btn = document.querySelector('#btn');
		btn.onclick = checkAll;
		
    </script>