<div class="mt-16 mx-auto max-w-xl">
  <div>
    <h2 class="text-2xl text-center font-bold text-sky-800">Frequently Asked Questions [Option 1]</h2>
  </div>
  <div class="mt-6 divide-y divide-gray-100">
    <details class="group">
      <summary class="flex cursor-pointer list-none items-center justify-between py-4 text-lg font-medium text-gray-900">
        Accordion item 01
        <div class="text-secondary-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block h-5 w-5 transition-all duration-300 group-open:rotate-180">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </summary>
      <div class="grid grid-rows-[0fr] group-open:grid-rows-[1fr] transition-all duration-1000 ease-in-out">
        <div class="overflow-hidden p-4 bg-gray-100">
          <p>
            This is the first item's accordion body.
          </p>
        </div>
      </div>
    </details>
    <details class="group">
      <summary class="flex cursor-pointer list-none items-center justify-between py-4 text-lg font-medium text-gray-900">
        Accordion item 02
        <div class="text-secondary-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block h-5 w-5 transition-all duration-300 group-open:rotate-180">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </summary>
      <div class="pb-4 text-gray-900">This is the second item's accordion body.</div>
    </details>
    <details class="group">
      <summary class="flex cursor-pointer list-none items-center justify-between py-4 text-lg font-medium text-gray-900">
        Accordion item 03
        <div class="text-secondary-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block h-5 w-5 transition-all duration-300 group-open:rotate-180">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </summary>
      <div class="pb-4 text-gray-900">This is the third item's accordion body.</div>
    </details>
  </div>
  <div class="mt-6">
    <details class="group">
  <!-- Summary (Always Visible) -->
  <summary class="flex justify-between items-center p-4 cursor-pointer bg-gray-200 hover:bg-gray-300 transition duration-300">
    <span>Click to expand</span>
    <!-- Optional: Animate an icon -->
    <svg class="w-4 h-4 transition duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </summary>

  <!-- Content (Animatable part) -->
  <div class="grid grid-rows-[0fr] group-open:grid-rows-[1fr] transition-all duration-300 ease-in-out">
    <div class="overflow-hidden p-4 bg-gray-100">
      <p>
        This is the animated content of the accordion body. It expands smoothly using CSS grid for the height transition. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>
</details>
  </div>


  <div x-data="{ expanded: false }" class="mt-6 border rounded-lg">
    <!-- Summary/Trigger -->
    <details :open="expanded" @toggle="expanded = $event.target.open" class="group">
        <summary class="cursor-pointer list-none flex justify-between items-center p-4 font-semibold bg-gray-100 hover:bg-gray-200 transition-colors duration-300">
            <span>Click to expand/collapse</span>
            <!-- Icon to indicate state -->
            <svg class="w-4 h-4 transform transition-transform duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        
        <!-- Animated Content Wrapper -->
        <!-- Use arbitrary values for grid-rows to transition between 0fr and 1fr -->
        <div 
            x-ref="content" 
            x-bind:style="expanded ? 'grid-template-rows: 1fr;' : 'grid-template-rows: 0fr;'"
            class="grid transition-all duration-300 ease-in-out overflow-hidden"
        >
            <div class="p-4 bg-white overflow-hidden">
                <!-- Accordion Body Content -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at est sit amet quam placerat dictum. Integer eget neque efficitur, dapibus tellus vel, congue ante. 
                </p>
                <!-- More content if needed -->
            </div>
        </div>
    </details>
</div>

<div x-data="{ expanded: false }" class="mt-6 border rounded-lg overflow-hidden">
    <!-- Summary/Trigger -->
    <details :open="expanded" @toggle="expanded = $event.target.open" class="group">
        <summary class="cursor-pointer list-none flex justify-between items-center p-4 font-semibold bg-gray-100 hover:bg-gray-200 transition-colors duration-300">
            <span>Click to expand/collapse (Smoother Transition)</span>
            <!-- Icon to indicate state -->
            <svg class="w-4 h-4 transform transition-transform duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        
        <!-- Animated Content Wrapper -->
        <div 
            x-show="expanded"
            x-transition:enter="transition-all duration-1000 ease-out"
            x-transition:enter-start="opacity-0 max-h-0"
            x-transition:enter-end="opacity-100 max-h-screen"
            x-transition:leave="transition-all duration-1000 ease-in"
            x-transition:leave-start="opacity-100 max-h-screen"
            x-transition:leave-end="opacity-0 max-h-0"
            class="bg-white overflow-hidden"
        >
            <div class="p-4 border-t">
                <!-- Accordion Body Content -->
                <p>
                    This approach generally provides a smoother feel because the browser is transitioning a standard `max-height` value.
                </p>
                <!-- More content if needed -->
            </div>
        </div>
    </details>
</div>

<div x-data="{ expanded: false }" class="mt-6 border rounded-lg overflow-hidden">
    <!-- Summary/Trigger -->
    <details :open="expanded" @toggle="expanded = $event.target.open" class="group">
        <summary class="cursor-pointer list-none flex justify-between items-center p-4 font-semibold bg-gray-100 hover:bg-gray-200 transition-colors duration-300">
            <span>Click to expand/collapse (Smoother Transition)</span>
            <!-- Icon to indicate state -->
            <svg class="w-4 h-4 transform transition-transform duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        
        <!-- Animated Content Wrapper -->
        <div 
            x-show="expanded"
            x-transition:enter="transition-all duration-1000 ease-out"
            x-transition:enter-start="opacity-0 max-h-0"
            x-transition:enter-end="opacity-100 max-h-screen"
            x-transition:leave="transition-all duration-1000 ease-in"
            x-transition:leave-start="opacity-100 max-h-screen"
            x-transition:leave-end="opacity-0 max-h-0"
            class="bg-white overflow-hidden"
        >
            <div class="p-4 border-t">
                <!-- Accordion Body Content -->
                <p>
                    This approach generally provides a smoother feel because the browser is transitioning a standard `max-height` value.
                </p>
                <!-- More content if needed -->
            </div>
        </div>
    </details>
</div>

<div x-data="{ expanded: false }" class="mt-6 border rounded-lg overflow-hidden">
    <!-- Summary/Trigger -->
    <details :open="expanded" @toggle="expanded = $event.target.open" class="group">
        <summary class="cursor-pointer list-none flex justify-between items-center p-4 font-semibold bg-gray-100 hover:bg-gray-200 transition-colors duration-300">
            <span>Click to expand/collapse (Smoother Transition)</span>
            <!-- Icon to indicate state -->
            <svg class="w-4 h-4 transform transition-transform duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        
        <!-- Animated Content Wrapper -->
        <div x-show="expanded" x-transition x-transition.scale.origin.top x-transition:enter.duration.600ms
    x-transition:leave.duration.600ms class="bg-white overflow-hidden">
            <div class="p-4 border-t">
                <!-- Accordion Body Content -->
                <p>
                    This approach generally provides a smoother feel because the browser is transitioning a standard `max-height` value.
                </p>
                <!-- More content if needed -->
            </div>
        </div>
    </details>
</div>

<div x-data="{ expanded: false }" class="mt-6 border rounded-lg overflow-hidden">
    <!-- Summary/Trigger -->
    {{-- @toggle="expanded = $event.target.open" --}}
    <details :open="expanded" @toggle="expanded = $event.target.open" class="group">
        <summary class="cursor-pointer list-none flex justify-between items-center p-4 font-semibold bg-gray-100 hover:bg-gray-200 transition-colors duration-300">
            <span>Click to expand/collapse (Smoother Transition WIP 1)</span>
            <!-- Icon to indicate state -->
            <svg class="w-4 h-4 transform transition-transform duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        
        <!-- Animated Content Wrapper -->
        <div x-show="expanded" x-collapse.duration.500ms class="bg-white overflow-hidden">
            <div class="p-4 border-t">
                <!-- Accordion Body Content -->
                <p>
                    This approach generally provides a smoother feel because the browser is transitioning a standard `max-height` value.
                </p>
                <!-- More content if needed -->
            </div>
        </div>
    </details>
</div>

<div x-data="{ expanded: false }" class="mt-6 border rounded-lg">
    <!-- Summary/Trigger -->
    {{-- @toggle="expanded = $event.target.open" --}}
    <details :open="expanded">
        <summary @click.prevent="expanded = !expanded" class="cursor-pointer list-none flex justify-between items-center p-4 font-semibold bg-gray-100 hover:bg-gray-200 transition-colors duration-300">
            <span>Click to expand/collapse (Smoother Transition WIP 2)</span>
            <!-- Icon to indicate state -->
            <svg class="w-4 h-4 transform transition-transform duration-300 group-open:rotate-180" xmlns="www.w3.org" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        
        <!-- Animated Content Wrapper -->
        <div x-show="expanded" x-collapse.duration.500ms class="bg-white overflow-hidden">
            <div class="p-4 border-t">
                <!-- Accordion Body Content -->
                <p>
                    This approach generally provides a smoother feel because the browser is transitioning a standard `max-height` value.
                </p>
                <!-- More content if needed -->
            </div>
        </div>
    </details>
</div>

<div x-data="{ isOpen: false }">
    <details :open="isOpen">
        <!-- Prevent default click behavior to allow Alpine to manage the animation -->
        <summary @click.prevent="isOpen = !isOpen">
            Click to smoothly toggle content
        </summary>
        
        <!-- Use x-show and x-collapse on a wrapper div for animation -->
        <div x-show="isOpen" x-collapse.duration.500ms>
            <div class="p-4 border-t">
                This content will expand and collapse smoothly.
            </div>
        </div>
    </details>
</div>

<div x-data="{ isOpen: false }">
    {{-- Remove the :open="isOpen" binding --}}
    <details>
        {{-- Keep @click.prevent to manage the state toggle only --}}
        <summary @click.prevent="isOpen = !isOpen">
            Click to smoothly toggle content
        </summary>
        
        <!-- Use x-show and x-collapse for animation and display management -->
        <div x-show="isOpen" x-collapse>
            <div class="p-4 border-t">
                This content will expand and collapse smoothly.
            </div>
        </div>
    </details>
</div>

<!-- Set initial state to true AND add the 'open' attribute natively -->
<div x-data="{ isOpen: true }">
    <details open> 
        <summary @click.prevent="isOpen = !isOpen">
            Click to smoothly toggle content
        </summary>
        
        <div x-show="isOpen" x-collapse :class="{ 'hidden': !isOpen}">
            <div class="p-4 border-t">
                This content will expand and collapse smoothly.
            </div>
        </div>
    </details>
</div>

<div x-data="{ isOpen: false }">
    <button @click="isOpen = !isOpen" class="p-2 bg-blue-500 text-white rounded">
        Toggle Content
    </button>
    
    <div x-show="isOpen" x-collapse>
        <div class="p-4 border">
            This content will expand and collapse smoothly using a standard div setup.
        </div>
    </div>
</div>

<div class="mt-6 w-full divide-y divide-outline overflow-hidden rounded-radius border border-outline bg-surface-alt/40 text-on-surface dark:divide-outline-dark dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:text-on-surface-dark">
    <div x-data="{ isExpanded: false }">
        <button id="controlsAccordionItemOne" type="button" class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75" aria-controls="accordionItemOne" x-on:click="isExpanded = ! isExpanded" x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'  : 'text-on-surface dark:text-on-surface-dark font-medium'" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
            What browsers are supported?
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" x-bind:class="isExpanded  ?  'rotate-180'  :  ''">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
            <div class="p-4 text-sm sm:text-base text-pretty">
                Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">documentation</a> for additional information.
            </div>
        </div>
    </div>
    <div x-data="{ isExpanded: false }">
        <button id="controlsAccordionItemTwo" type="button" class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75" aria-controls="accordionItemTwo" x-on:click="isExpanded = ! isExpanded" x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'  : 'text-on-surface dark:text-on-surface-dark font-medium'" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
            How can I contact customer support?
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" x-bind:class="isExpanded  ?  'rotate-180'  :  ''">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region" aria-labelledby="controlsAccordionItemTwo" x-collapse>
            <div class="p-4 text-sm sm:text-base text-pretty">
                Reach out to our dedicated support team via email at <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">support@example.com</a> or call our toll-free number at 1-800-123-4567 during business hours.
            </div>
        </div>
    </div>
    <div x-data="{ isExpanded: false }">
        <button id="controlsAccordionItemThree" type="button" class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75" aria-controls="accordionItemThree" x-on:click="isExpanded = ! isExpanded" x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'  : 'text-on-surface dark:text-on-surface-dark font-medium'" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
            What is the refund policy?
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" x-bind:class="isExpanded  ?  'rotate-180'  :  ''">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="controlsAccordionItemThree" x-collapse.duration.500ms>
            <div class="p-4 text-sm sm:text-base text-pretty">
                Please refer to our <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">refund policy page</a> on the website for detailed information regarding eligibility, timeframes, and the process for requesting a refund.
            </div>
        </div>
    </div>
</div>


</div>


{{--
<div class="mt-16">
  <div>
    <h2 class="text-2xl text-center font-bold text-sky-800">Our Team [Option 1]</h2>
  </div>
  <div class="mt-6">
    <div class="grid grid-cols-4 gap-6">
      <x-app-team-members.team-card-1
        fileName="professional-headshot-6-large"
        teamMemberName="Gabriela C."
        teamMemberTitle="Co-Founder & CEO"
      />
      <x-app-team-members.team-card-1
        fileName="professional-headshot-5-large"
        teamMemberName="Jason D."
        teamMemberTitle="Co-Founder & CFO"
      />
      <x-app-team-members.team-card-1
        fileName="professional-headshot-4-large"
        teamMemberName="Theresa M."
        teamMemberTitle="Chief Technology Officer"
      />
      <x-app-team-members.team-card-1
        fileName="professional-headshot-3-large"
        teamMemberName="Jessica Z."
        teamMemberTitle="Manager, Web Development"
      />
    </div>
  </div>
</div>
--}}

