@extends('layouts.app')
@section('content')

<div class="background-image grid grid-cols-1 m-auto">

    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block
        text-center">
             <h1 class="sm:text-black text-5xl uppercase font-bold
             text-shadow-md pb-14">
                 Do you want to become a developer?
             </h1>
                 <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4
                    font-bold text-xl uppercase">
                    Read More
                 </a>

        </div>


     </div>


</div>


<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img
           src="https://cdn.pixabay.com/photo/2018/04/29/13/14/seo-3359946_960_720.jpg"
           width="700">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
       <h2 class="text-3xl font-extrabold text-gray-600">
          Struggling to be a better web developer?

       </h2>
       <p class="py-8 text-gray-500 text-s">
        The internet is nothing short of gigantic. Did you know that there are over
        1.8 billion websites as of January 2018? That’s an insane amount.
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
        Let’s first explain a little bit about what web development is.
        Web development is the coding and programming of websites and web apps.
        It involves building and maintenance. Basically, it’s the behind the scenes
        of a website that looks good and works well. The main goal of a web
        developer is to create a website with the best user experience possible.
        </p>
       <a href="/blog"
       class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
       Find Out More  . . .
       </a>
    </div>
</div>
       <div class="text-center p-15 bg-black text-white">
          <h2 class="text-2xl pb-5 text-l">
           I'm an expert in
          </h2>
        <span class="font-extrabold block text-4xl py-1">
           Ux Design

        </span>
        <span class="font-extrabold block text-4xl py-1">
           Project Management

         </span>
        <span class="font-extrabold block text-4xl py-1">
        Digital Strategy

        </span>
       <span class="font-extrabold block text-4xl py-1">
        Backend Development

       </span>


</div>

<div class="text-center py-15">
  <span class="uppercase text-s text-gray-400">
      Blog
  </span>
  <h2 class="text-4xl font-bold py-10">
      Recent Posts

 </h2>
 <p class="m-auto w-4/5 text-gray-500">



 </p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-blue-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
           <span class="uppercase text-xs">
               PHP

           </span>
           <h3 class="text-xl font-bold py-10">
            Web developers work independently as freelancers
            or with company teams to create websites.
            These professionals may
            focus on front-end development , or back-end
            development . Web developers may also become webmasters
            for a site, providing maintenance, updates, and troubleshooting when needed.

           </h3>
              <a href=""
              class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold
              py-3 px-5 rounded-3xl">Find Out More</a>
        </div>
    </div>

    <div>
        <img
           src="https://cdn.pixabay.com/photo/2016/12/28/09/36/web-1935737_960_720.png"
           width="700" alt="laptop"/>
    </div>

</div>
@endsection
