<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link rel="icon" href="./logo.png">
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

	<script src="https://cdn.tailwindcss.com"></script>
	<script>
	tailwind.config = {
		theme: {
			extend: {
				colors: {
					red: '#AD0000',
					gold: '#D0AD50',
				}
			},
			fontFamily: {
				'base': 'Open sans',
			}
		}
	}
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />

	<style type="text/css">
		/* width */
		::-webkit-scrollbar {
		    width: 5px;
		}
		  
		/* Track */
		::-webkit-scrollbar-track {
		    background: #f1f1f1;
		}
		  
		/* Handle */
		::-webkit-scrollbar-thumb {
		    background: #ddd;
		    border-radius: 5px;
		}
		  
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		    background: #ccc;
		}
	</style>
</head>
<body class="bg-gray-50 font-base">

	<div class="py-3 px-6 min-h-screen text text-gray-600 flex flex-col">		

		@include('layouts.sidebar')
		@include('layouts.header')

		<h1 class="my-3 text-sm text-gray-300"> BERANDA \ <span class="text-gray-500"> @yield('location') </span></h1>

		@yield('content')

		<footer class="mt-auto text-center pt-3 text-sm">
			©
			<script>
				document.write(new Date().getFullYear())
			</script>
			Newus Technology
		</footer>		

	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>
</html>