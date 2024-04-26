@props(['module'])

<div class="relative">
    <ievtds-slider :screenshots="{{ json_encode($module->screenshots) }}" :arrow="true" :slider-view="5"></ievtds-slider>
</div>
