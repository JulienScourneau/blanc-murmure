@props(['titleArticle', 'textArticle', 'srcImg', 'hoverImg', 'textImg'])
<article class="shadow-lg w-full lg:w-10/12 2xl:w-8/12 mx-auto p-5 text-white bg-greenDuck my-5 lg:flex lg:flex-col"
    style="margin-top: 30px">
    <div class="lg:flex-col lg:w-full">
        <h2 class="text-2xl mb-10 Title font-black">{{ $titleArticle }}</h2>
        <p class="text-xl">{{ $textArticle }}</p>
    </div>
    <div class="lg:flex lg:flex-row mx-auto mt-5">
        <x-collaborater-img :src="$srcImg[0]" :hover="$hoverImg[0]" :text="$textImg[0]" />
        <x-collaborater-img :src="$srcImg[1]" :hover="$hoverImg[1]" :text="$textImg[1]" />
        <x-collaborater-img :src="$srcImg[2]" :hover="$hoverImg[2]" :text="$textImg[2]" />
    </div>
</article>
