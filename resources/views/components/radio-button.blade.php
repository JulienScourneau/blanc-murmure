<div>
    <label class="flex self-start pl-16 my-2" for="">Droit à l'image <span class="text-xs font-light pl-1">(01)</span></label>
    <div class="flex w-10/12 mx-auto">
       <div class="border-2 border-disableText rounded-full w-10/12 p-2.5">
            <input type="radio" value="oui" id="yes" name="right_to_image">
            <label for="yes">Oui</label>
        </div>
        <div class="border-2 border-disableText rounded-full w-10/12 p-2.5 ml-1">
            <input type="radio" value="non" id="no" name="right_to_image">
            <label for="no">Non</label>
        </div>
    </div>
    <x-error name="right_to_image"/>
</div>
