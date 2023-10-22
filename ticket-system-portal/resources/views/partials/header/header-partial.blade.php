
   <section class=" fixed top-20  bg-cover bg-center py-32" style=background-color:#f8f8ff>
       <div class="card">
           <div
               class="relative overflow-hidden bg-cover bg-no-repeat"
               style="
      background-position: 50%;
      background-color: #CCCCFF;
      height: 50px;
    ">
               <div
                   class="absolute rounded-t-lg bg-indigo-500 top-1 left-0 right-10 bottom-0 h-full w-full overflow-hidden bg-fixed">
                   <div class="flex h-full items-center justify-center">
                       <div class="px-6 text-center text-white md:px-12">
                           <h1 class="mb-6 text-5xl font-bold"></h1>
                           <h3 class="mb-8 text-2xl font-bold"> Welkom {{ Auth::user()->name }}</h3>
                       </div>
                   </div>
               </div>
           </div>
    <div class="container text-center text-black">
        <img src="{{Vite::asset('resources/images/student-header.jpg')}}"/>
    </div>
   </section>

