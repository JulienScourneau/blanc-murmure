@props(['title', 'text'])
<article class="shadow-lg w-11/12 mx-auto p-5 text-white bg-greenDuck my-5 lg:flex flex-row w-10/12" style="margin-top: 30px">
    <div class="lg:flex-col lg:w-5/12">
        <h2 class="text-2xl mb-10 Title font-black">{{$title}}</h2>
        <p class="text-xl">{{$text}}</p>
    </div>
     <div class="lg:flex flex-row">
         <x-collaborater-img src="assets/collaborater/school_1.png" hover="assets/collaborater/school_01_hover.png" text="1 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti libero exercitationem animi eaque laudantium, blanditiis quae adipisci iusto. Odit ex vitae quod expedita laborum, atque placeat quisquam debitis assumenda deleniti." />
         <x-collaborater-img src="assets/collaborater/school_2.png" hover="assets/collaborater/school_01_hover.png" text="2 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti libero exercitationem animi eaque laudantium, blanditiis quae adipisci iusto. Odit ex vitae quod expedita laborum, atque placeat quisquam debitis assumenda deleniti." />
         <x-collaborater-img src="assets/collaborater/school_3.png" hover="assets/collaborater/school_01_hover.png" text="3 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti libero exercitationem animi eaque laudantium, blanditiis quae adipisci iusto. Odit ex vitae quod expedita laborum, atque placeat quisquam debitis assumenda deleniti." />
     </div>
 </article>