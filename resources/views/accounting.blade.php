<!doctype html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accounting</title>
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
					<button onClick="showSalaryMaintenance()" class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Salary Maintenance </button>
					<button onClick="showDeductionMaintenance()" class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Deduction Maintenance</button>
					<button onClick="showEmployeeSalary()" class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded focus:outline-none">Employee Salary</button>
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
<div id="salaryMaintenance" class="grid bg-white mt-5 xl:w-5/6 xl:mx-40 sm:w-full rounded-lg overflow-auto" style="display: block">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-gray-800 text-4xl font-bold px">Salary Maintenance</h1>
			<!-- Modal toggle -->
            <button class="bgcolor text-white hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none" data-modal-toggle="authentication-modal">Add New</button>
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
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add Salary Maintenance</h3>
                    <div class="grid grid-cols-5 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch ID</label>
                        <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Branch ID" required="">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Region" required="">
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Municipality/City" required="">
                    </div>
					<div class="col-start-4 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Chain" required="">
                    </div>
					<div class="col-start-5 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Branch" required="">
                    </div>
					</div>

					<div class="grid grid-cols-4 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic Rate</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Basic Rate" required="">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Hour</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Hour" required="">
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Min</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Per Min" required="">
                    </div>
					<div class="col-start-4 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="COLA" required="">
                    </div>
					</div>

                    <button type="submit" class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                </form>
            </div>
        </div>
    </div> 
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
    </div>
    <div>
	<table class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto" >
		<thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full">
				<th class="p-4 w-2/6">Branch ID</th>
				<th class="p-4 w-2/6">Region</th>
				<th class="p-4 w-2/6">Municipality/City</th>
				<th class="p-4 w-2/6">Chain</th>
				<th class="p-4 w-2/6">Branch</th>
				<th class="p-4 w-2/6">Basic Rate</th>
				<th class="p-4 w-2/6">Per Hour</th>
				<th class="p-4 w-2/6">Per Min</th>
				<th class="p-4 w-2/6">COLA</th>
				<th class="p-4 w-2/6"></th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col text-center items-left justify-left overflow-y-scroll w-full" style="height: 65vh;">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0001</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Las Pinas City</td>
				<td class="p-4 w-2/6">Finds Finds Las Pinas</td>
				<td class="p-4 w-2/6">Vista Mall Las Pinas, Finds Finds Department Store</td>
				<td class="p-4 w-2/6">P370.00</td>
				<td class="p-4 w-2/6">P46.25</td>
				<td class="p-4 w-2/6">P0.77</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0002</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Las Pinas City</td>
				<td class="p-4 w-2/6">Robinsons Las Pinas</td>
				<td class="p-4 w-2/6">Robinsons Place Las Pinas Department Store</td>
				<td class="p-4 w-2/6">P373.00</td>
				<td class="p-4 w-2/6">P46.63</td>
				<td class="p-4 w-2/6">P0.78</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0003</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Makati City</td>
				<td class="p-4 w-2/6">Waltermart Makati</td>
				<td class="p-4 w-2/6">Waltermart Makati Department Store</td>
				<td class="p-4 w-2/6">P401.00</td>
				<td class="p-4 w-2/6">P50.13</td>
				<td class="p-4 w-2/6">P0.84</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0004</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Malabon City</td>
				<td class="p-4 w-2/6">Fisher Mall Malabon</td>
				<td class="p-4 w-2/6">Fisher Mall Malabon Department Store</td>
				<td class="p-4 w-2/6">P435.00</td>
				<td class="p-4 w-2/6">P54.38</td>
				<td class="p-4 w-2/6">P0.91</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0005</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Malabon City</td>
				<td class="p-4 w-2/6">Robinsons Malabon</td>
				<td class="p-4 w-2/6">Robinsons Citi Square Malabon Department Store</td>
				<td class="p-4 w-2/6">P450.00</td>
				<td class="p-4 w-2/6">P56.25</td>
				<td class="p-4 w-2/6">P0.94</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0006</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Mandaluyong City</td>
				<td class="p-4 w-2/6">Robinsons Forum Pioneer</td>
				<td class="p-4 w-2/6">Robinsons Forum Pioneer Department Store</td>
				<td class="p-4 w-2/6">P570.00</td>
				<td class="p-4 w-2/6">P71.25</td>
				<td class="p-4 w-2/6">P1.19</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0007</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Manila</td>
				<td class="p-4 w-2/6"></td>
				<td class="p-4 w-2/6">Robinsons Place Ermita Department Store</td>
				<td class="p-4 w-2/6">P373.00</td>
				<td class="p-4 w-2/6">P46.63</td>
				<td class="p-4 w-2/6">P0.78</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0008</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Muntinlupa City</td>
				<td class="p-4 w-2/6">Metro Alabang</td>
				<td class="p-4 w-2/6">Alabang Town Center Muntinlupa Metro Department Store</td>
				<td class="p-4 w-2/6">P373.00</td>
				<td class="p-4 w-2/6">P46.63</td>
				<td class="p-4 w-2/6">P0.78</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0009</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Muntinlupa City</td>
				<td class="p-4 w-2/6">Festival Alabang</td>
				<td class="p-4 w-2/6">Festival Mall Alabang, Robinsons Department Store</td>
				<td class="p-4 w-2/6">P570.00</td>
				<td class="p-4 w-2/6">P71.25</td>
				<td class="p-4 w-2/6">P1.19</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">BRANCH-0010</td>
				<td class="p-4 w-2/6">NCR</td>
				<td class="p-4 w-2/6">Muntinlupa City</td>
				<td class="p-4 w-2/6">The Landmark Makati</td>
				<td class="p-4 w-2/6">The Landmark Makati Department Store</td>
				<td class="p-4 w-2/6">P373.00</td>
				<td class="p-4 w-2/6">P46.63</td>
				<td class="p-4 w-2/6">P0.78</td>
				<td class="p-4 w-2/6">P0.00</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
		</tbody>
	</table>
    </div>
</div> <!--end salary maintenance-->

<div id="deductionMaintenance" class="grid bg-white mt-5 xl:w-5/6 xl:mx-40 sm:w-full rounded-lg overflow-auto" style="display: none">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-gray-800 text-4xl font-bold px">Deduction Maintenance</h1>
			<!-- Modal toggle -->
            <button class="bgcolor text-white hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none" data-modal-toggle="add-deduction">Add New</button>
    <!-- Main modal -->
    <div id="add-deduction" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-deduction">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add Deduction Maintenance</h3>
                    <div class="grid grid-cols-2 gap-2">
						<div class="col-start-1 col-span-1">
							<label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Salary ID</label>
							<input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Salary ID" required="">
						</div>
						<div class="col-start-2 col-span-1">
							<label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Range Salary</label>
							<input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Range Salary" required="">
						</div>
					</div>

					<div class="grid grid-cols-3 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic Rate</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="SSS" required="">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Hour</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="PHIC" required="">
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Min</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="HMDF" required="">
                    </div>
					</div>

                    <button type="submit" class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                </form>
            </div>
        </div>
    </div> 
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
    </div>
    <div>
	<table class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto" >
		<thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full">
				<th class="p-4 w-2/6">Salary ID</th>
				<th class="p-4 w-2/6">Range Salary</th>
				<th class="p-4 w-1/6">SSS</th>
				<th class="p-4 w-1/6">PHIC</th>
				<th class="p-4 w-1/6">HMDF</th>
				<th class="p-4 w-1/6">TOTAL</th>
				<th class="p-4 w-2/6"></th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col text-center items-left justify-left overflow-y-scroll w-full" style="height: 65vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0001</td>
				<td class="p-4 w-2/6">P20,000.00 and below</td>
				<td class="p-4 w-1/6">P302.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P352.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0002</td>
				<td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0003</td>
				<td class="p-4 w-2/6">P25,001.00 - P27,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0004</td>
				<td class="p-4 w-2/6">P27,001.00 - P29,000.00</td>
				<td class="p-4 w-1/6">P302.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P352.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0005</td>
				<td class="p-4 w-2/6">P29,001.00 - P35,000.00</td>
				<td class="p-4 w-1/6">P587.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P637.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0006</td>
				<td class="p-4 w-2/6">P35,001.00 - P37,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0007</td>
				<td class="p-4 w-2/6">P37,001.00 - P40,000.00</td>
				<td class="p-4 w-1/6">P302.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P352.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0008</td>
				<td class="p-4 w-2/6">P40,001.00 - P50,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0009</td>
				<td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0010</td>
				<td class="p-4 w-2/6">P20,000.00 and below</td>
				<td class="p-4 w-1/6">P302.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P352.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0011</td>
				<td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="p-4 w-2/6">SALARY-0012</td>
				<td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
				<td class="p-4 w-1/6">P387.50</td>
				<td class="p-4 w-1/6">P00.32</td>
				<td class="p-4 w-1/6">P50.00</td>
				<td class="p-4 w-1/6">P437.82</td>
				<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-deduction">Edit</button>
				<button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none">Delete</button></td>
			</tr>
		</tbody>
	</table>
    </div>
</div> <!--end deduction maintenance-->

<div id="employeeSalary" class="grid bgcolor overflow-auto xl:w-5/6 xl:mx-40 xl:my-12 rounded-lg mb-5" style="display: none">
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

    </main>
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
							<label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">LATE/UNDERTIME</label>
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
<div id="edit-store" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-store">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Salary Maintenance</h3>
                   
					<div class="grid grid-cols-5 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch ID</label>
                        <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="BRANCH-0001" required="" value="BRANCH-0001">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="NCR" required="" value="NCR">
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Las Pinas City" required="" value="Las Pinas City">
                    </div>
					<div class="col-start-4 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Finds Finds Las Pinas" required="" value="Finds Finds Las Pinas">
                    </div>
					<div class="col-start-5 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Vista Mall Las Pinas, Finds Finds Department Store" required="" value="Vista Mall Las Pinas, Finds Finds Department Store">
                    </div>
					</div>

					<div class="grid grid-cols-4 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic Rate</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P370.00" required="" value="P370.00">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Hour</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P46.25" required="" value="P46.25">
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Min</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P0.77" required="" value="P0.77">
                    </div>
					<div class="col-start-4 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P0.00" required="" value="P0.00">
                    </div>	
					</div>
                    <button type="submit" class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </form>
            </div>
        </div>
    </div> <!--end modal-->

	<div id="edit-deduction" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-deduction">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Deduction Maintenance</h3>
                   
					<div class="grid grid-cols-2 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch ID</label>
                        <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="BRANCH-0001" required="" value="BRANCH-0001">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Range Salary</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="NCR" required="" value="P25,000 and below">
                    </div>
					</div>

					<div class="grid grid-cols-4 gap-2">
					<div class="col-start-1 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SSS</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P370.00" required="" value="P302.50">
                    </div>
					<div class="col-start-2 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">PHIC</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P46.25" required="" value="P00.32">
                    </div>
					<div class="col-start-3 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HMDF</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P0.77" required="" value="P50.00">
                    </div>
					<div class="col-start-4 col-span-1">
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">TOTAL</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="P0.00" required="" value="P352.82">
                    </div>	
					</div>
                    <button type="submit" class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </form>
            </div>
        </div>
    </div> <!--end modal-->

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
		}

		function showSalaryMaintenance() {
			var x = document.getElementById("salaryMaintenance");
			if (x.style.display === "none") {
				x.style.display = "block";
			} 	
			hideDeductionMaintenance();
			hideEmployeeSalary();

		}

		function showDeductionMaintenance() {
			var x = document.getElementById("deductionMaintenance");
			if (x.style.display === "none") {
				x.style.display = "block";
				}
				
				hideSalaryMaintenance();
				hideEmployeeSalary();
			}
		function showEmployeeSalary() {
			var x = document.getElementById("employeeSalary");
			if (x.style.display === "none") {
				console.log("show employee salary");
				x.style.display = "block";
				}
				
				hideSalaryMaintenance();
				hideDeductionMaintenance()
			}

		function hideSalaryMaintenance(){
			var x = document.getElementById("salaryMaintenance");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
		function hideDeductionMaintenance(){
			var x = document.getElementById("deductionMaintenance");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
		function hideEmployeeSalary(){
			var x = document.getElementById("employeeSalary");
			if (x.style.display === "block") {
				x.style.display = "none";
				}
		}
    </script>