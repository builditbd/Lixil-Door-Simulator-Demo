            <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                <div x-data="{ accordionOpen: true }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Door Color</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-0" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                        <div class="space-y-1">
                            <?php for($i=1; $i<=11; $i++): ?>
                                <div class="flex items-center">
                                    <input @click="doorColorUrl = 'lixil/door/lgy_a_0<?=sprintf("%02d", $i) ?>.png'" <?= $i===1 ? 'checked' : '' ?> id="door-body-0<?=sprintf("%02d", $i) ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="door-body-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Color 0<?=sprintf("%02d", $i) ?></label>
                                </div>
                            <?php endfor; ?>
                        </div>
                        </fieldset>
                    </dd>
                </div>
                <div x-data="{ accordionOpen: false }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Floor</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                            <div class="space-y-1">
                                <?php for($i=12; $i<30; $i++): ?>
                                    <div class="flex items-center">
                                        <input @click="floorUrl = 'lixil/floor/fl_a_0<?=sprintf("%02d", $i) ?>.png'" <?= $i===29 ? 'checked' : '' ?> id="floor-0<?=sprintf("%02d", $i) ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="floor-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Color 0<?=sprintf("%02d", $i) ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </fieldset>
                    </dd>
                </div>
                <div x-data="{ accordionOpen: false }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Frame</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                            <div class="space-y-1">
                                <?php for($i=1; $i<7; $i++): ?>
                                    <div class="flex items-center">
                                        <input @click="frameUrl = 'lixil/frame/df_a_0<?=sprintf("%02d", $i) ?>.png'" <?= $i===1 ? 'checked' : '' ?> id="frame-0<?=sprintf("%02d", $i) ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="frame-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Color 0<?=sprintf("%02d", $i) ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </fieldset>
                    </dd>
                </div>
                <div x-data="{ accordionOpen: false }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Floor Base</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                            <div class="space-y-1">
                                <?php for($i=1; $i<7; $i++): ?>
                                    <div class="flex items-center">
                                        <input @click="doorBaseUrl = 'lixil/door-base/tw_a_0<?=sprintf("%02d", $i) ?>.png'" <?= $i===1 ? 'checked' : '' ?> id="door-base-0<?=sprintf("%02d", $i) ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="door-base-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Color 0<?=sprintf("%02d", $i) ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </fieldset>
                    </dd>
                </div>
                <div x-data="{ accordionOpen: false }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Glass</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                            <div class="space-y-1">
                                <?php for($i=1; $i<7; $i++): ?>
                                    <div class="flex items-center">
                                        <input @click="glassUrl = 'lixil/glass/lgy_a_g<?=sprintf("%02d", $i) ?>.png'" <?= $i===1 ? 'checked' : '' ?> id="glass-0<?=sprintf("%02d", $i) ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="glass-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Color 0<?=sprintf("%02d", $i) ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </fieldset>
                    </dd>
                </div>
                <div x-data="{ accordionOpen: false }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Handle</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                            <div class="space-y-1">
                                <?php for($i=1; $i<15; $i++): ?>
                                    <div class="flex items-center">
                                        <input @click="handleUrl = 'lixil/handle/dh_a_0<?=sprintf("%02d", $i) ?>.png'" <?= $i===1 ? 'checked' : '' ?> id="handle-0<?=sprintf("%02d", $i) ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="handle-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Color 0<?=sprintf("%02d", $i) ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </fieldset>
                    </dd>
                </div>
                <div x-data="{ accordionOpen: false }" class="pt-6">
                    <dt>
                        <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="accordionOpen = !accordionOpen" aria-expanded="false" x-bind:aria-expanded="accordionOpen.toString()">
                            <span class="text-base font-semibold leading-7">Choose Tree</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': accordionOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': !(accordionOpen) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="accordionOpen" style="display: none;">
                        <fieldset class="mt-4 ml-6">
                            <div class="space-y-1">
                                <?php for($i=1; $i<3; $i++): ?>
                                    <div class="flex items-center">
                                        <input @click="treeUrl = 'lixil/tree<?=$i ?>.png'" <?= $i===2 ? 'checked' : '' ?> id="tree-0<?=$i ?>" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tree-0<?=sprintf("%02d", $i) ?>" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Tree <?=$i ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </fieldset>
                    </dd>
                </div>
            </dl>