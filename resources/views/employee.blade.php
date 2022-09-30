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
    <header class="w-full h-16 bgcolor drop-shadow-lg sticky top-0">
        <div class="container px-1 md:px-0 h-full mx-auto flex justify-between items-center">
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
        <!-- component -->
<div class="grid bg-white mt-5 xl:w-5/6 xl:mx-40 sm:w-full rounded-lg overflow-auto">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-gray-800 text-4xl font-bold px">Employee List</h1>
            <button class="bgcolor text-white hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none">Add New</button>
        </div>
		<div class="row-start-2 row-span-1 flex">
			
  <div class="relative group mt-2">
      <button class="flex flex-row items-center px-2 py-2 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none">
          <span>Branch</span>
      </button>
      <div class="absolute hidden w-56 bg-white bordercolor group-hover:block">
          <div class="px-2 pt-2 pb-4 bg-white bg-white shadow-lg grid bordercolor rounded-lg">
		  		<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0">SM Department Store</a>
				<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-1">SM Sucat</a>
				<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-2">Makati Robinsons</a>
          </div>
      </div>
  </div>  
  <div class="relative group mt-2 ml-5">
      <button class="flex flex-row items-center px-2 py-2 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none">
          <span>Chain</span>
      </button>
      <div class="absolute hidden w-56 bg-white bordercolor group-hover:block">
          <div class="px-2 pt-2 pb-4 bg-white bg-white shadow-lg grid bordercolor rounded-lg">
		  		<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0">SM Department Store</a>
				<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-1">SM Sucat</a>
				<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-2">Makati Robinsons</a>
          </div>
      </div>
  </div>  

			<!-- This example requires Tailwind CSS v2.0+ -->
		<!-- <div class="relative inline-block text-left flex mt-2">
			<div>
				<button onclick="toggleMenu('branch')"
						class="px-1 py-1 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor focus:outline-none">
				Branch</button>
			</div>

			<div id="branch" class="absolute hidden mt-10 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" >
				<div class="py-1" role="none"> -->
				<!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
				<!-- <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0">SM Bicutan</a>
				<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-1">SM Sucat</a>
				<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-2">Makati Robinsons</a> -->
				<!-- <form method="POST" action="#" role="none">
					<button type="submit" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
				</form> -->
				<!-- </div>
			</div>
			<div>
				<button onclick="toggleMenu('chain')"
						class="px-1 py-1 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor focus:outline-none ml-2">
				Chain</button>
			</div> -->

			<!-- <div id="chain" class="absolute hidden z-10 mt-10 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" >
				<div class="py-1" role="none"> -->
				<!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
				<!-- <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0">SM Department Store</a>
				<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-1">SM Sucat</a>
				<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-2">Makati Robinsons</a> -->
				<!-- <form method="POST" action="#" role="none">
					<button type="submit" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
				</form> -->
				<!-- </div>
			</div>
		</div> -->

        </div>
        <div class="row-start-1 row-span-2">
			<div class="flex float-right">
				<div class="mb-3 xl:w-96">
					<input type="search"
					class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl"
					id="exampleSearch"
					placeholder="Search"
					/>
				</div>
			</div>
        </div>
		<!-- </div>
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="font-themecolor font-bold px-1 py-1 border-2 border border-solid bordercolor mt-2 mr-3 rounded-lg">File Overtime</button>
			</div>
        </div> -->
    </div>
    <div>
	<table class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto" >
		<thead class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full">
				<th class="p-4 w-2/6">Name</th>
				<th class="p-4 w-2/6">Email</th>
				<th class="p-4 w-2/6">ID Number</th>
				<th class="p-4 w-2/6">Contact Number</th>
				<th class="p-4 w-2/6">Branch</th>
				<th class="p-4 w-2/6">Chain</th>
				<th class="p-4 w-2/6">Attendance</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col text-center items-left justify-left overflow-y-scroll w-full " style="height: 70vh;">
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full ">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		</tbody>
	</table>
    </div>
</div> <!--end employee list-->

<div class="grid ">

</div>

<div class="flex flex-row xl:w-5/6 xl:mx-40 xl:my-8 bgprofile rounded-lg justify-center">
  <div class="basis-1/2 py-8 px-8 flex flex-row justify-center place-items-center">
  <img
          src="img\Login-image.png"
          class="w-56 xl:mx-20 lg:mx-20 rounded-full bordercolor bordercolor border-4 "
          alt="Sample image"
        />
  </div>
  <div class="basis-1/2 py-8 px-8">
	<h1 class="text-black text-4xl font-bold px">EMPLOYEE PROFILE<h1>
		<ul class="py-3">
			<li class="text-lg text-gray-800"><span class="font-bold">Name:</span> Maria Clara</li>
			<li class="text-lg text-gray-800"><span class="font-bold">ID No. :</span> 0000-0001</li>
			<li class="text-lg text-gray-800"><span class="font-bold">Contact No. :</span> 09123456789</li>
			<li class="text-lg text-gray-800"><span class="font-bold">Email :</span> fn.lastname@email.com</li>
			<li class="text-lg text-gray-800"><span class="font-bold">Department :</span> SM Bicutan</li>
			<li class="text-lg text-gray-800"><span class="font-bold">Chain : </span> SM Department Store</li>
		</ul>
  </div>
</div>


<div class="grid bgcolor overflow-auto xl:w-5/6 xl:mx-40 rounded-lg mb-5">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold px">Attendance Summary</h1>
        </div>
		<div class="row-start-2 row-span-1 flex">
		<span class="text-white"> Sort By: <input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
		</div>
        
		<!-- <div class="row-start-2 row-span-1 flex bg-green-900 floar">
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">OT History</button>
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
		</div> -->
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="text-white px-1 py-1 border-2 border-white mt-2 mr-3 rounded-lg">OT History</button>
				<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed" >
	<thead class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full">
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
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 65vh;">
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">--</td>
			<td class="py-4 px-0.5 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">1</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button></td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full">
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
        
		<!-- <div class="row-start-2 row-span-1 flex bg-green-900 floar">
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">OT History</button>
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
		</div> -->
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="text-white px-1 py-1 border-2 border-white mt-2 mr-3 rounded-lg">File Overtime</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed" >
		<thead class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full">
				<th class="py-4 w-2/6">Date</th>
				<th class="py-4 w-2/6 bg-green-900">Time In</th>
				<th class="py-4 w-2/6 bg-red-900">Time Out</th>
				<th class="py-4 w-2/6 bg-blue-900">Hours Rendered</th>
				<th class="py-4 w-2/6 bg-yellow-900">Status</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full " style="height: 65vh;">
		<tr class="flex w-full px-5">
			<td class="py-4 px-1 w-2/6">September 19, 2021</td>
			<td class="py-4 px-2 w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px-2 w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px-2 w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-2 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px-2 w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-">September 19, 2021</td>
			<td class="py-4 px- w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px- w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px- w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-9 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		<tr class="flex w-full">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6 bg-green-900">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6 bg-red-900">8 : 05 pm</td>
			<td class="py-4 px-1 w-2/6 bg-blue-900">9 hrs 5 mins</td>
			<td class="py-4 px-1 w-2/6 bg-yellow-900">Approved</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full ">
			<tr class="flex w-full">
				<th class="p-4 px-1 w-2/6">Date</th>
				<th class="p-4 px-1 w-2/6">--</th>
				<th class="p-4 px-1 w-2/6">--</th>
				<th class="p-4 px-1 w-2/6">9 hrs 5 mins</th>
				<th class="p-4 px-1 w-2/6">--</th>
			</tr>
		</tfoot>
	</table>
    </div>
</div><!--end attendance summary-->

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