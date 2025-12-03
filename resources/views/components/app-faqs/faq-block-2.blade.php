<div class="mt-16 mx-auto max-w-xl">
  <div>
    <h2 class="text-2xl text-center font-bold text-sky-800">Frequently Asked Questions [Option 2]</h2>
  </div>
  <div class="mt-6 w-full divide-y divide-outline overflow-hidden rounded-radius border border-outline bg-neutral-50">
    <div x-data="{ isExpanded: false }">
      <button id="accordionControlsItem1" type="button" x-on:click="isExpanded = ! isExpanded" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left hover:bg-neutral-100 focus-visible:bg-neutral-100 focus-visible:outline-none" aria-controls="accordionItemOne" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
      FAQ Question #1
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 shrink-0 stroke-gray-900 stroke-1 transition" x-bind:class="isExpanded  ?  'rotate-180'  :  ''" viewBox="0 0 16 16" aria-hidden="true">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
        </svg>
      </button>
      <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="accordionControlsItem1" x-collapse.duration.500ms>
        <div class="p-4 text-sm sm:text-base text-pretty" x-bind:class="isExpanded  ?  'bg-white'  :  'bg-neutral-50'">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ut nulla expedita, nobis ullam unde necessitatibus voluptatem quod reprehenderit ea?</p>
        </div>
      </div>
    </div>
    <div x-data="{ isExpanded: false }">
      <button id="accordionControlsItem2" type="button" x-on:click="isExpanded = ! isExpanded" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left hover:bg-neutral-100 focus-visible:bg-neutral-100 focus-visible:outline-none" aria-controls="accordionItemTwo" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
        FAQ Question #2
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 shrink-0 stroke-gray-900 stroke-1 transition" x-bind:class="isExpanded  ?  'rotate-180'  :  ''" viewBox="0 0 16 16" aria-hidden="true">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
        </svg>
      </button>
      <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region" aria-labelledby="accordionControlsItem2" x-collapse.duration.500ms>
        <div class="p-4 text-sm sm:text-base text-pretty" x-bind:class="isExpanded  ?  'bg-white'  :  'bg-neutral-50'">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam doloremque voluptatibus accusantium quia blanditiis sed molestias ex voluptate iusto eum.</p>
        </div>
      </div>
    </div>
    <div x-data="{ isExpanded: false }">
      <button id="accordionControlsItem3" type="button" x-on:click="isExpanded = ! isExpanded" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left hover:bg-neutral-100 focus-visible:bg-neutral-100 focus-visible:outline-none" aria-controls="accordionItemThree" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
        FAQ Question #3
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 shrink-0 stroke-gray-900 stroke-1 transition" x-bind:class="isExpanded  ?  'rotate-180'  :  ''" viewBox="0 0 16 16" aria-hidden="true">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
        </svg>
      </button>
      <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="accordionControlsItem3" x-collapse.duration.500ms>
        <div class="p-4 text-sm sm:text-base text-pretty" x-bind:class="isExpanded  ?  'bg-white'  :  'bg-neutral-50'">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, ab sit doloribus corrupti inventore repudiandae quas ad qui necessitatibus ratione!</p>
        </div>
      </div>
    </div>
    <div x-data="{ isExpanded: false }">
      <button id="accordionControlsItem4" type="button" x-on:click="isExpanded = ! isExpanded" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left hover:bg-neutral-100 focus-visible:bg-neutral-100 focus-visible:outline-none" aria-controls="accordionItemFour" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
        FAQ Question #4
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 shrink-0 stroke-gray-900 stroke-1 transition" x-bind:class="isExpanded  ?  'rotate-180'  :  ''" viewBox="0 0 16 16" aria-hidden="true">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
        </svg>
      </button>
      <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="accordionControlsItem4" x-collapse.duration.500ms>
        <div class="p-4 text-sm sm:text-base text-pretty" x-bind:class="isExpanded  ?  'bg-white'  :  'bg-neutral-50'">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem excepturi voluptas laudantium iste asperiores eius repellat vel inventore iusto! Hic!</p>
        </div>
      </div>
    </div>
  </div>
</div>