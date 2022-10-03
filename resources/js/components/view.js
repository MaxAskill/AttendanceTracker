import {useState} from 'react';
import React from 'react';
import ReactDOM from 'react-dom';

export default function App() {
  const [isShown, setIsShown] = useState(false);

  const handleClick = event => {
    // 👇️ toggle shown state
    setIsShown(current => !current);

    // 👇️ or simply set it to true
    setIsShown(true);
  };

  return (
    <div>
      <button onClick={handleClick}>Click</button>

      {/* 👇️ show elements on click */}
      {isShown && (
        <div>
          <div class="grid bgcolor overflow-auto rounded-lg mb-5 drop-shadow-md">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold">Attendance Summary</h1>
        </div>
		<div class="row-start-2 row-span-1 flex">
		<span class="text-white"> Sort By: <input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
		</div>
        
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="text-white px-1 py-1 border-2 border-white mt-2 mr-3 rounded-lg">OT History</button>
				<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
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

		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 65vh;">
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
</div>
        </div>
      )}

      {/* 👇️ show component on click */}
      {isShown && <Box />}
    </div>
  );
}

function Box() {
  return (
    <div>
      <h2>Box</h2>
    </div>
  );
}

ReactDOM.render( <Search /> , document.getElementById('view'));



