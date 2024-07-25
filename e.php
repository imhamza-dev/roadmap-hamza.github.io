<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vite App powerd by Mr-Hamza</title>
  <link rel="stylesheet" href="style.css" ` />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

  <style>
    .vertical-divider {
      width: 1px;
      background-color: #0e52e6;
      margin: 0 1rem;
    }

    .nav-link {
      border-bottom: 2px solid transparent;
      transition: color 0.3s, border-bottom 0.3s;
      padding: 10px;
    }

    .nav-link:hover {
      background-color: #e8e9eb;
      padding: 10px;
      overflow: hidden;
    }

    .hov-effect {
      padding: 10px;
    }

    .hov-effect:hover {
      background-color: #e8e9eb;
      padding: 10px;
    }

    .nav-link.active {
      color: rgb(3, 3, 19);
      border-bottom-color: blue;
    }

    .sign-in {
      padding: 10px;
    }

    .sign-in:hover {
      background-color: #e8e9eb;
      padding: 10px;
    }
  </style>
</head>

<body class="bg-gray-100">
  <!-- submit-form -->
  <!-- <div
			class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-300"
		>
			<div
				class="p-8 transition-transform transform bg-white rounded-lg shadow-lg w-80 hover:-translate-y-1"
			>
				<form id="statusForm">
					<div class="mb-5">
						<label for="status" class="block mb-2 font-bold text-gray-700"
							>Status</label
						>
						<input
							type="text"
							id="status"
							class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500"
							placeholder="Enter status"
						/>
					</div>
					<div class="mb-5">
						<label for="title" class="block mb-2 font-bold text-gray-700"
							>Title</label
						>
						<input
							type="text"
							id="title"
							class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500"
							placeholder="Enter title"
						/>
					</div>
					<div class="mb-5">
						<label for="description" class="block mb-2 font-bold text-gray-700"
							>Description powerd by Mr-Hamza</label
						>
						<textarea
							id="description"
							class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500"
							placeholder="Enter description"
							rows="4"
						></textarea>
					</div>
					<div>
						<input
							type="submit"
							value="Submit"
							class="w-full p-3 text-white transition-colors bg-blue-500 rounded cursor-pointer hover:bg-blue-700"
						/>
					</div>
				</form>
			</div>
		</div> -->

  <!-- header -->

  <div class="mx-auto rounded-lg">
    <nav class="flex items-center justify-between max-w-3xl p-4 mx-auto bg-white rounded-lg shadow-lg mt-9">
      <div class="flex items-center space-x-4">
        <span class="text-xl font-semibold">Roadmap <br />
          <p class="text-sm text-gray-500">Powered by Rowy</p>
        </span>
      </div>
      <div class="flex items-center space-x-4">
        <button class="focus:outline-none hov-effect">
          <svg class="fill-current swap-off w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"></path>
          </svg>
        </button>
        <button class="focus:outline-none"></button>
        <button class="flex items-center space-x-1 text-blue-500 focus:outline-none hov-effect">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" class="w-6 h-6">
            <defs>
              <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"></path>
            </defs>
            <clipPath id="b">
              <use xlink:href="#a" overflow="visible"></use>
            </clipPath>
            <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"></path>
            <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"></path>
            <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"></path>
            <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"></path>
          </svg>
          <span class="text-black sign-in"> SIGN IN WITH GOOGLE</span>
        </button>
      </div>
    </nav>
  </div>

  <!-- navigation -->
  <div class="container max-w-3xl p-4 mx-auto mt-3 bg-white rounded-t-lg shadow">
    <div class="flex justify-between">
      <ul class="flex space-x-4">
        <li>
          <a href="#all" class="nav-link active">All</a>
        </li>
        <li>
          <a href="#need-feedback" class="nav-link">Need feedback</a>
        </li>
        <li>
          <a href="#next" class="nav-link">Next</a>
        </li>
        <li>
          <a href="#in-progress" class="nav-link">In Progress</a>
        </li>
        <li>
          <a href="#complete" class="nav-link">Complete</a>
        </li>
      </ul>
      <div>
        <ul class="flex space-x-4">
          <li>
            <a href="#most-voted" class="nav-link active">Most Voted</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Content display section -->
  <div class="container max-w-3xl p-4 mx-auto mt-1 bg-white rounded-t-lg shadow">
    <div class="flex items-center justify-between">
      <ul class="mr-2">
        <li class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
          </svg>
        </li>
        <li class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path>
          </svg>
        </li>
        <li class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </li>
      </ul>
      <div class="h-[118px] min-h-[1em] w-0.5 self-stretch -ml-24 bg-black"></div>
      <div class="flex items-center px-4 py-1 -mt-8 text-sm text-white rounded-lg select-none mb-14 bg-info">
        <span id="displayStatus">In Progress</span>
      </div>

      <div class="mb-8">
        <h2 class="text-gray-900" id="displayTitle"></h2>
        <h3 class="-ml-40 text-sm text-gray-500 table-info mr-36" id="displayDescription"></h3>
        <div class="mb-8"></div>
      </div>

      <div class="h-[118px] min-h-[1em] w-0.5 self-stretch bg-black -mr-24"></div>

      <ul class="">
        <li class="mb-4">
          <span class="text-gray-400">+509</span>
        </li>
        <li class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
          </svg>
        </li <li class="mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
        </svg>
        </li>
      </ul>

      <!-- divider -->
    </div>
    <div class="flex items-center -mt-10 ml-28">
      <span class="">Target Release:</span>
      <span class="bg-gray-200 text-gray-900 text-sm font-medium ml-2 px-2.5 py-0.5 rounded">June 2024</span>
    </div>
  </div>

  <!-- script -->
  <script type="module" src="main.js"></script>
</body>

</html>