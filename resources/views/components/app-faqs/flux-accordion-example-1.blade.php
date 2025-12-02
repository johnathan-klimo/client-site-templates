<div class="leading-relaxed">
  <h2 class="font-semibold text-zinc-800 dark:text-white mb-2  scroll-mt-60 lg:scroll-mt-44 " id="with-transition" data-aside-title>
    <a href="#with-transition" class="relative before:absolute before:-left-4 before:content-['#'] before:opacity-40 before:hidden hover:before:block">With transition</a>
  </h2>

  <div class="text-zinc-500 dark:text-zinc-300 mb-6">
    <p>Enable expanding transitions for smoother interactions.</p>
  </div>

  <div class="rounded-2xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-zinc-900">
    <div class="px-6 py-16 overflow-x-auto relative" data-preview-wrapper>
      <div class="m-auto  max-w-full max-lg:min-w-fit lg:max-w-96  flex justify-center">
        <div class="w-full">
          <ui-disclosure-group class="block" transition="transition" data-flux-accordion-heading>
            <ui-disclosure
              class="block pt-4 first:pt-0 pb-4 last:pb-0 border-b last:border-b-0 border-zinc-800/10 dark:border-white/10"
              x-data="{ open: false }"
              x-model.self="open"
              data-flux-accordion-item
            >
              <button type="button" class="group/accordion-heading flex items-center w-full text-start text-sm font-medium justify-between [&amp;&gt;svg]:ms-6 text-zinc-800 dark:text-white cursor-pointer"  data-flux-accordion-heading>
                <span class="flex-1">What's your refund policy?</span>
                <svg class="shrink-0 [:where(&amp;)]:size-5 text-zinc-300 dark:text-zinc-400 group-hover/accordion-heading:text-zinc-800 dark:group-hover/accordion-heading:text-white hidden group-data-open/accordion-heading:block text-zinc-800! dark:text-white!" aria-hidden="true" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z" clip-rule="evenodd"/>
                </svg>

                <svg class="shrink-0 [:where(&amp;)]:size-5 text-zinc-300 dark:text-zinc-400 group-hover/accordion-heading:text-zinc-800 dark:group-hover/accordion-heading:text-white block group-data-open/accordion-heading:hidden" aria-hidden="true" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                </svg>
              </button>
          
              <div x-show="open" x-collapse x-cloak data-flux-accordion-content>
                <div class="pt-2 text-sm text-zinc-500 dark:text-zinc-300">
                  If you are not satisfied with your purchase, we offer a 30-day money-back guarantee. Please contact our support team for assistance.
                </div>
              </div>
            </ui-disclosure>

            <ui-disclosure
              class="block pt-4 first:pt-0 pb-4 last:pb-0 border-b last:border-b-0 border-zinc-800/10 dark:border-white/10"
              x-data="{ open: false }"
              x-model.self="open"
              data-flux-accordion-item
            >
              <button type="button" class="group/accordion-heading flex items-center w-full text-start text-sm font-medium justify-between [&amp;&gt;svg]:ms-6 text-zinc-800 dark:text-white cursor-pointer"  data-flux-accordion-heading>
                <span class="flex-1">Do you offer any discounts for bulk purchases?</span>
                <svg class="shrink-0 [:where(&amp;)]:size-5 text-zinc-300 dark:text-zinc-400 group-hover/accordion-heading:text-zinc-800 dark:group-hover/accordion-heading:text-white hidden group-data-open/accordion-heading:block text-zinc-800! dark:text-white!" aria-hidden="true" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z" clip-rule="evenodd"/>
                </svg>

                <svg class="shrink-0 [:where(&amp;)]:size-5 text-zinc-300 dark:text-zinc-400 group-hover/accordion-heading:text-zinc-800 dark:group-hover/accordion-heading:text-white block group-data-open/accordion-heading:hidden" aria-hidden="true" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                </svg>

              </button>
              <div x-show="open" x-collapse x-cloak data-flux-accordion-content>
                <div class="pt-2 text-sm text-zinc-500 dark:text-zinc-300">
                  Yes, we offer special discounts for bulk orders. Please reach out to our sales team with your requirements.
                </div>
              </div>
            </ui-disclosure>

            <ui-disclosure
              class="block pt-4 first:pt-0 pb-4 last:pb-0 border-b last:border-b-0 border-zinc-800/10 dark:border-white/10"
              x-data="{ open: false }"
              x-model.self="open"
              data-flux-accordion-item
            >
              <button type="button" class="group/accordion-heading flex items-center w-full text-start text-sm font-medium justify-between [&amp;&gt;svg]:ms-6 text-zinc-800 dark:text-white cursor-pointer"  data-flux-accordion-heading>
                <span class="flex-1">How do I track my order?</span>
                <svg class="shrink-0 [:where(&amp;)]:size-5 text-zinc-300 dark:text-zinc-400 group-hover/accordion-heading:text-zinc-800 dark:group-hover/accordion-heading:text-white hidden group-data-open/accordion-heading:block text-zinc-800! dark:text-white!" aria-hidden="true" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z" clip-rule="evenodd"/>
                </svg>

                <svg class="shrink-0 [:where(&amp;)]:size-5 text-zinc-300 dark:text-zinc-400 group-hover/accordion-heading:text-zinc-800 dark:group-hover/accordion-heading:text-white block group-data-open/accordion-heading:hidden" aria-hidden="true" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                </svg>

              </button>
          
              <div x-show="open" x-collapse x-cloak data-flux-accordion-content>
                <div class="pt-2 text-sm text-zinc-500 dark:text-zinc-300">
                  Once your order is shipped, you will receive an email with a tracking number. Use this number to track your order on our website.
                </div>
              </div>
            </ui-disclosure>
          </ui-disclosure-group>
        </div>
      </div>
    </div>
  </div>
  
</div>