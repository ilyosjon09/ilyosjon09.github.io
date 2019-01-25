@extends('_layouts.master')

@section('body')
<div class="md:fixed md:pin-t z-index-50 lg:fixed lg:pin-t bg-white p-4 w-full border-b border-grey-light">
	<h1>Portfolio</h1>
</div>

<div class="md:mt-12 lg:mt-12">
	<div class="flex flex-col p-2 w-full justify-center md:flex-row lg:flex-row">
		<section class="mx-2 border border-grey-light rounded-lg hover:shadow-md mt-4 md:w-1/2 lg:w-1/2 overflow-hidden">
			<a href="https://globusedu.uz/" class="p-2 block no-underline  text-black mb-4 mx-2">
				<h2 class="mt-2">Globus E&C &mdash; Website</h2>
				<img class="w-full border mt-2 rounded block h-auto" src="assets/images/globusedu.jpg" alt="Globus E&C Website Screenshot">
				<article class="mt-2 text-grey-darkest leading-normal">
					Globus E&C is an education consulting company and they wanted to have a simple but attractive website to promote their services online.
				</article>
			</a>
		</section>

		<section class="mx-2 border border-grey-light rounded-lg hover:shadow-md mt-4 md:w-1/2 lg:w-1/2 overflow-hidden">
			<a href="https://ilmplyus.wordpress.com/" class="p-2 block no-underline text-black mb-4 mx-2">
				<h2 class="mt-2">Ilm Plyus &mdash; Website</h2>
				<img class="w-full border mt-2 rounded block h-auto" src="assets/images/ilmplyus.jpg" alt="Globus E&C Website Screenshot">
				<article class="mt-2 text-grey-darkest leading-normal">
					Ilm Plyus is the largest education center in Andijan with more than 5 branches across Uzbekistan. To provide up-to-date information to students, we created offical website  using Wordpress.
				</article>
			</a>
		</section>
	</div>
	<div class="text-grey text-3x p-4 text-center">More projects will be added soon...</div>
</div>
</div>
@endsection
