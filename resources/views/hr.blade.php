<!doctype html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HR</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <scrip		<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
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
          			<img src="img\Login-image.png"
					class="w-12 rounded-full border-white border-2 "
					alt="Sample image" />
					</button>
					<div class="absolute hidden xl:w-80 rounded-full group-hover:block">
						<div class="flex-none w-full text-left px-2 pt-2 pb-4 bg-white bg-white shadow-lg grid bordercolor rounded-lg">
						<div class="content-center flex items-center justify-center mb-5"><img src="img\Login-image.png" class="w-2/3 rounded-full border-white border-2 object-center" alt="Sample image" /></div>
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
							<button class="bg-transparent hover:bg-white text-white font-semibold hover:text-teal-700 hover:text-opacity-50 py-2 px-4 border-2 border-white hover:border-transparent rounded  focus:outline-none">Log Out</button></a>
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
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
<!-- This is an example component -->
<div class="row-start-1 row-span-1 flex">
<h1 class="text-gray-800 text-4xl font-bold px">Employee List</h1>
    <!-- Modal toggle -->
    <button class="bgcolor font-themecolor hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none" type="button" data-modal-toggle="authentication-modal">
    Add New
    </button>

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
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign up to our platform</h3>
                    <div>
                        <label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company ID</label>
						
                        <input type="text" name="companyID" id="companyID" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company ID" required="">
                    </div>
					<div>
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First Name</label>
                        <input type="text" name="fName" id="fName" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="First Name" required="">
                    </div>
					<div>
                        <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Middle Name</label>
                        <input type="text" name="mName" id="mName" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Middle Name" required="">
                    </div>
					<div>
                        <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Last Name</label>
                        <input type="text" name="lName" id="lName" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Last Name" required="">
                    </div>
					<div>
                        <label for="jobPosition" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Job Position</label>
                        <input type="text" name="jobPosition" id="jobPosition" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Job Position" required="">
                    </div>
					<div>
                        <label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contact No.</label>
                        <input type="text" name="cNumber" maxlength="11" id="cNumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Contact Number" required="">
                    </div>
					<div>
                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" onkeyup="ValidateEmail()" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email (Eg. name@email.com)" required="">
						<span id="lblError" style="color: red"></span>
					</div>
					<div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Birthdate</label>
                        <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required="">
                    </div>
                    <!-- <div>
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                    </div> -->
                    <!-- <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="text-sm ml-3">
                            <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                    </div> -->
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Account</button>
                    <!-- <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div> -->
                </form>
            </div>
        </div>
    </div> 

    
</div>
		<div class="row-start-2 row-span-1 flex">
			
  <div class="relative group mt-2">
      <button class="flex flex-row items-center px-2 py-2 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none">
          <span>Branch</span>
      </button>
      <div class="absolute hidden w-56 bg-white bordercolor group-hover:block">
          <div class="px-2 pt-2 pb-4 bg-white bg-white shadow-lg grid bordercolor rounded-lg">
		  		<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0">SM Bicutan</a>
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
				<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-1">SM Appliances</a>
				<a href="#" class="block px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" tabindex="-1" id="menu-item-2">Makati Robinsons</a>
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
		<tbody class="bg-grey-light flex flex-col text-center items-left justify-left overflow-y-scroll w-full" style="height: 70vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="p-4 w-2/6">Maria Clara</td>
			<td class="p-4 w-2/6">fn.lastname@email.com</td>
			<td class="p-4 w-2/6">0000-0001</td>
			<td class="p-4 w-2/6">123</td>
			<td class="p-4 w-2/6">SM Bicutan</td>
			<td class="p-4 w-2/6">SM Department Store</td>
			<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">VIEW</button></td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
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
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full" style="height: 65vh;">
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
		<tfoot class="bg-gray-100 flex text-gray w-full ">
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
</div><!--end attendance summary-->

	<div class="grid bgcolor overflow-hidden xl:w-5/6 xl:mx-40 rounded-lg mb-5">
		<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
			<div class="row-start-1 row-span-1 flex">
				<h1 class="text-white text-4xl font-bold px">Overtime History</h1>

<<<<<<< HEAD
=======
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
				<button class="text-white px-1 py-1 border-2 border-white mt-2 mr-3 rounded-lg" data-modal-toggle="file-ot">File Overtime</button>
>>>>>>> 610c871b63929309d416a673725f784b40b806ca
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
			<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed" >
				<thead class="bg-gray-100 flex text-gray w-full ">
					<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
						<th class="py-4 w-2/6">Date</th>
						<th class="py-4 w-2/6">Time In</th>
						<th class="py-4 w-2/6">Time Out</th>
						<th class="py-4 w-2/6">Hours Rendered</th>
						<th class="py-4 w-2/6">Status</th>
					</tr>
				</thead>
				<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full " style="height: 65vh;">
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
    </div> 
    <!-- Javascript Code -->
    <script>
        var navmenu = document.getElementById('navmenu');
        function toggleMenu() {
            navmenu.classList.toggle('hidden');
            navmenu.classList.toggle('w-full');
            navmenu.classList.toggle('h-screen');
        };


		document.getElementById("fName").addEventListener("keypress", isLetter)
		document.getElementById("mName").addEventListener("keypress", isLetter)
		document.getElementById("lName").addEventListener("keypress", isLetter)
		document.getElementById("jobPosition").addEventListener("keypress", isLetter)
		function isLetter(e) {
		console.log(e)
		let char = String.fromCharCode(e.keyCode); // Get the character
		if (/^[A-Za-z ]+$/.test(char)) return true;
		// Match with regex
		else e.preventDefault(); // If not match, don't add to input text
		};

		document.getElementById("companyID").addEventListener("keypress", isNumber)
		document.getElementById("cNumber").addEventListener("keypress", isNumber)
		
		function isNumber(e) {
		let char = String.fromCharCode(e.keyCode); // Get the character
		if (/^[0-9]+$/.test(char)) return true;
		// Match with regex
		else e.preventDefault(); // If not match, don't add to input text
    	};

		function ValidateEmail() {
        var email = document.getElementById("email").value;
        var lblError = document.getElementById("lblError");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
        	}
    	}



    </script>
	<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
	

